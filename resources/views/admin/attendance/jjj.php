<?php

namespace App\Http\Controllers\Admin;

use App\Services\Interfaces\IReportService;
use App\Services\Interfaces\IUserService;
use App\ViewModels\UserViewModels\UserViewModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Khill\Lavacharts\Laravel\LavachartsFacade;
use Khill\Lavacharts\Lavacharts;

class ReportController extends Controller
{
    private static $ViewBaseName = "admin.reports.";
    public $ReportService;
    public $UserService;

    public function __construct(IReportService $reportService, IUserService $userService)
    {
        $this->middleware('auth');

        $this->ReportService = $reportService;
        $this->UserService = $userService;

    }

    public function index()
    {
        $salesMenSelectList = UserViewModel::ToSalesMenSelectListViewModel($this->UserService->getAllSalesMen());

        return view(self::$ViewBaseName . 'index', compact('salesMenSelectList'));
    }

    public function monthlySaleAndCommission(Request $request)
    {

        Validator::make($request->all(), array(
            'salesManId' => 'required|integer',
            'fromDate' => 'required|date',
            'toDate' => 'required|date|after_or_equal:fromDate',

        ))->validate();

        $monthlySaleAndCommissionChart = $this->ReportService
            ->createMonthlySaleAndCommissionChart($request->input('salesManId'), $request->input('fromDate'), $request->input('toDate'));

        return view(self::$ViewBaseName . 'monthlySaleAndCommission', compact('monthlySaleAndCommissionChart'));
    }


    public function monthlySaleAndProfit(Request $request)
    {

        Validator::make($request->all(), array(
            'fromDate' => 'required|date',
            'toDate' => 'required|date|after_or_equal:fromDate',

        ))->validate();

        $monthlySaleGraph = $this->ReportService
            ->createMonthlySaleAndProfitLineChart($request->input('fromDate'), $request->input('toDate'));

        return view(self::$ViewBaseName . 'monthlySaleAndProfit', compact('monthlySaleGraph'));

    }

    public function dailySaleAndProfit(Request $request)
    {

        $dailySaleAndProfitChart = $this->ReportService
            ->createDailySaleAndProfitChart($request->input('from'), $request->input('to'));

        return view(self::$ViewBaseName . 'monthlySaleAndCommission', compact('monthlySaleAndCommissionChart'));
    }
}
