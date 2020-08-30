@extends('layouts.master')
@section('content')

    <section>
        <div class="container">

            <div class="row mt-5">
                <div class="col-12">
                    <div class="card mb-20">
                        <div class="card-header card-header-style">Monthly Sale And Commission
                            <div class="tools">
                                <a href="javascript:;" class="tools-close fa fa-chevron-down" data-animation="true"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Collapse/Expand"> </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="monthly_sale_and_commission_chart_div" style="height:500px;"></div>
                            <div id="abc"></div>
                            {!! $monthlySaleAndCommissionChart->render('LineChart', 'MonthlySaleAndCommissionChart', 'monthly_sale_and_commission_chart_div') !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection











@extends('layouts.master')
@section('content')

    <section>
        <div class="container">

            <div class="row mt-5" >
                <div class="col-12" >
                    <div class="card mb-20" >
                        <div class="card-header card-header-style">Monthly Sales Graph
                            <div class="tools">
                                <a href="javascript:;" class="tools-close fa fa-chevron-down" data-animation="true"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Collapse/Expand"> </a>
                            </div>
                        </div>
                        <div class="card-body" >
                            <div id="monthly_sale_graph_div" style="height:500px;"></div>
                            {!! $monthlySaleGraph->render('LineChart', 'MonthlySalesAndProfit', 'monthly_sale_graph_div') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



@extends('layouts.master')
@section('content')

    <section class="page-container mt-5">
        <div class="container">


            <div class="form-group row">
                <div class="col-md-12">
                    @include('common.errors')
                    <div class="card md-12">
                        <div class="card-header card-header-style">
                            Monthly Sale And Profit
                            <div class="tools">
                                <a href="javascript:;" class="tools-close fa fa-chevron-down" data-animation="true"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Collapse/Expand"> </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{url(\App\Utils\Common\UrlRoutes::MonthlySaleAndProfitReport)}}"
                                  method="get" class="form-horizontal">
                                <div class="col-sm-4">
                                    <label for="from" class="col-form-label required">From Date</label>
                                    <input id="from" type="month" name="fromDate" required class="form-control"/>
                                </div>
                                <div class="col-sm-4">
                                    <label for="to" class=" col-form-label required">To Date</label>
                                    <input id="to" type="month" name="toDate" required class="form-control"/>
                                </div>

                                <div class="mt-2 col-sm-6">
                                    <button type="submit" class="btn btn-primary">Show

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-md-12">

                    <div class="card md-12">
                        <div class="card-header green-bg primary-color">
                            Monthly Sale And Commission by Sales Men
                            <div class="tools">
                                <a href="javascript:;" class="tools-close fa fa-chevron-down" data-animation="true"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Collapse/Expand"> </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{url(\App\Utils\Common\UrlRoutes::MonthlySaleAndCommissionReport)}}"
                                  method="get" class="form-horizontal">
                                <div class="col-sm-4">
                                    <label for="salesManId" class="col-form-label required">From Date</label>
                                    <select class="form-control" id="salesManId" name="salesManId" required>
                                        <option value="">Select Sales Man</option>
                                        @foreach ($salesMenSelectList as $saleMan)
                                            <option value="{{$saleMan->id}}" id="sale{{$saleMan->id}}">
                                                {{$saleMan->name}}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="col-sm-4">
                                    <label for="from" class="col-form-label required">From Date</label>
                                    <input id="from" type="month" name="fromDate" required class="form-control"/>
                                </div>
                                <div class="col-sm-4">
                                    <label for="to" class=" col-form-label required">To Date</label>
                                    <input id="to" type="month" name="toDate" required class="form-control"/>
                                </div>

                                <div class="mt-2 col-sm-6">
                                    <button type="submit" class="btn btn-primary">Show

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
