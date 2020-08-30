<?php

namespace App\Services;


use App\Models\Sale;
use App\Models\User;
use App\Services\Interfaces\IDateTimeService;
use App\Services\Interfaces\IReportService;
use App\Services\Interfaces\IUserService;
use App\Utils\Common\StringUtils;
use App\ViewModels\DashboardViewModels\DashboardViewModel;
use App\ViewModels\ReportViewModels\ReportViewModel;
use Carbon\Carbon;
use Khill\Lavacharts\Lavacharts;

class ReportService implements IReportService
{

    public $UserService;
    public $DateTimeService;

    public function __construct(IUserService $userService, IDateTimeService $dateTimeService)
    {
        $this->UserService = $userService;
        $this->DateTimeService = $dateTimeService;
    }

    public function getMonthlySumOfSale($userId, $month, $year)
    {
        return Sale::where('sales_man_id', $userId)
            ->whereYear('date', $year)
            ->whereMonth('date', $month)
            ->sum('sale_price');
    }

    public function getYearlySumOfSale($userId, $year)
    {
        return Sale::where('sales_man_id', $userId)
            ->whereYear('date', $year)
            ->sum('sale_price');
    }

    public function getMonthlySumOfCommission($userId, $month, $year)
    {
        return Sale::where('sales_man_id', $userId)
            ->whereYear('date', $year)
            ->whereMonth('date', $month)
            ->sum('commission');
    }

    public function getTotalCommissionSumFor($userId)
    {
        return Sale::where('sales_man_id', $userId)
            ->sum('commission');
    }

    public function getTotalSaleSumFor($userId)
    {
        return Sale::where('sales_man_id', $userId)
            ->sum('sale_price');
    }

    public function getMonthlySalesBySalesMen($month, $year)
    {
        $users = $this->UserService->getAllSalesMen();
        $saleArray = [];

        foreach ($users as $user) {
            $salesSum = $this->getMonthlySumOfSale($user->id, $month, $year);

            if ($salesSum > 0) {
                $saleArray[] = DashboardViewModel::ToHighestToLowestSaleViewModel($user, $salesSum);
            }
        }
        return $this->sortArrayDesc($saleArray);
    }

    public function getYearlySalesBySalesMenFor($year)
    {
        $users = $this->UserService->getAllSalesMen();
        $saleArray = [];

        foreach ($users as $user) {
            $salesSum = $this->getYearlySumOfSale($user->id, $year);

            if ($salesSum > 0) {
                $saleArray[] = DashboardViewModel::ToHighestToLowestSaleViewModel($user, $salesSum);
            }
        }

        return $this->sortArrayDesc($saleArray);
    }

    private function sortArrayDesc($array)
    {
        $sizeOfArray = sizeof($array);

        for ($i = 0; $i < $sizeOfArray; $i++) {
            for ($j = 0; $j < $sizeOfArray - $i - 1; $j++) {
                if ($array[$j]->sale <= $array[$j + 1]->sale) {
                    $t = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $t;
                }
            }
        }
        return $array;
    }

    public function createMonthlySaleAndProfitLineChart($from, $to)
    {
        $monthlySalesArray = $this->getMonthlySalesArray($from, $to);

        $lava = new Lavacharts();
        $monthlySalesAndProfitGraph = $lava->DataTable();
        $monthlySalesAndProfitGraph->addStringColumn('MonthlySalesAndProfit')
            ->addNumberColumn('Sale')
            ->addNumberColumn('Profit')
            ->addNumberColumn('Total Sale')
            ->addNumberColumn('Total Profit');

        foreach ($monthlySalesArray as $monthSale) {
            $monthlySalesAndProfitGraph->addRow(
                array($monthSale->monthAndYear, $monthSale->sale, $monthSale->profit, $monthSale->totalSale, $monthSale->totalProfit));

        }

        $lava->LineChart('MonthlySalesAndProfit', $monthlySalesAndProfitGraph, [
            'title' =>
                '\nTotal Sale : ' . end($monthlySalesArray)->totalSale .
                '\nTotal Profit : ' . end($monthlySalesArray)->totalProfit
        ]);

        return $lava;
    }


    private function getMonthlySalesArray($from, $to)
    {
        $months = $this->DateTimeService->getMonthsBetween($from, $to);

        $monthlySalesArray = [];
        $currentMonthStartDate = $this->DateTimeService->getStartOfMonthDate($from);

        $totalSale = 0;
        $totalProfit = 0;

        for ($i = 0; $i <= $months; $i++) {

            $currentMonth = $this->DateTimeService->getMonthFrom($currentMonthStartDate);
            $currentYear = $this->DateTimeService->getYearFrom($currentMonthStartDate);
            $currentMonthAndYear = $this->DateTimeService->getMonthAndYearFrom($currentMonthStartDate);

            $monthlySale = $this->calculateSumOfSalesFor($currentYear, $currentMonth);
            $monthlyProfit = $this->calculateSumOfProfitFor($currentYear, $currentMonth);

            $totalSale = $totalSale + $monthlySale;
            $totalProfit = $totalProfit + $monthlyProfit;

            array_push($monthlySalesArray, ReportViewModel::ToMonthlySaleAndProfitGraphViewModel($monthlySale, $currentMonthAndYear, $monthlyProfit, $totalSale, $totalProfit));

            $nextMonthStartDate = $this->DateTimeService->getNextMonthStartDateFrom($currentMonthStartDate);
            $currentMonthStartDate = $nextMonthStartDate;

        }
        return $monthlySalesArray;
    }

    private function getSaleAndCommissionMonthlyBreakDown($userId, $from, $to)
    {
        $months = $this->DateTimeService->getMonthsBetween($from, $to);

        $monthlySalesArray = [];
        $currentMonthStartDate = $this->DateTimeService->getStartOfMonthDate($from);
        $totalSale = 0;
        $totalCommission = 0;

        for ($i = 0; $i <= $months; $i++) {

            $currentMonth = $this->DateTimeService->getMonthFrom($currentMonthStartDate);
            $currentYear = $this->DateTimeService->getYearFrom($currentMonthStartDate);
            $currentMonthAndYear = $this->DateTimeService->getMonthAndYearFrom($currentMonthStartDate);

            $monthlySale = $this->getMonthlySumOfSale($userId, $currentMonth, $currentYear);
            $totalSale = $totalSale + $monthlySale;
            $monthlyCommission = $this->getMonthlySumOfCommission($userId, $currentMonth, $currentYear);
            $totalCommission = $totalCommission + $monthlyCommission;

            array_push($monthlySalesArray, ReportViewModel::ToMonthlySaleAndCommissionGraphViewModel(
                $monthlySale, $currentMonthAndYear, $monthlyCommission, $totalSale, $totalCommission));

            $nextMonthStartDate = $this->DateTimeService->getNextMonthStartDateFrom($currentMonthStartDate);
            $currentMonthStartDate = $nextMonthStartDate;

        }

        return $monthlySalesArray;
    }

    private function calculateSumOfSalesFor($year, $month)
    {
        return Sale::whereYear('date', $year)
            ->whereMonth('date', $month)
            ->sum('sale_price');
    }

    private function calculateSumOfProfitFor($year, $month)
    {
        return Sale::whereYear('date', $year)
            ->whereMonth('date', $month)
            ->sum('profit');
    }


    public function createMonthlySaleAndCommissionChart($userId, $from, $to)
    {
        $monthlySaleAndCommission = $this->getSaleAndCommissionMonthlyBreakDown($userId, $from, $to);

        $user = $this->UserService->getById($userId);
        $name = StringUtils::GetFullName($user);

        $lava = new Lavacharts();
        $monthlySaleAndCommissionChart = $lava->DataTable();
        $monthlySaleAndCommissionChart->addStringColumn('MonthlySalesAndProfit')
            ->addNumberColumn('Sale')
            ->addNumberColumn('Commission')
            ->addNumberColumn('Total Sale')
            ->addNumberColumn('Total Commission');

        foreach ($monthlySaleAndCommission as $item) {
            $monthlySaleAndCommissionChart->addRow(
                array($item->monthAndYear, $item->sale, $item->commission, $item->totalSale, $item->totalCommission));
        }

        $lava->LineChart('MonthlySaleAndCommissionChart', $monthlySaleAndCommissionChart, [
            'title' => 'Name: ' . $name .
                '\nEmail: ' . $user->email .
                '\nTotal Sale : ' . end($monthlySaleAndCommission)->totalSale .
                '\nTotal Commission : ' . end($monthlySaleAndCommission)->totalCommission
        ]);

        return $lava;
    }


}
