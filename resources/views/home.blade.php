@extends('layouts.app')

@section('content')
    <section class="content dark-body">
        <header class="content__title px-0 border-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
							<span class="rev-title-container">
							 <h1 class="text-capitalize stream_name m-0">Biller Dashboard</h1>
							</span>
                    <div class="">
                        <ol class="breadcrumb border-0">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>

                        </ol>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-right text-white"><small>Date last updated <span>22 June 2020, 10:00 EAT</span></small></div>
            </div>
        </header>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6">
                <a href="#" class="card dark-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="flaticon-calendar-2"></i></div>
                            <div class="ml-4">
                                <span>This week</span>
                                <h4 class="mb-0 font-weight-medium">KES 54,678,757</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="card dark-card" href="#!">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg text-white rounded-circle bg-green text-uppercase">
                                <strong class="mon-container"><small class="this-year ">2020</small><strong class="month-abr">MON</strong></strong>
                            </div>
                            <div class="ml-4">
                                <span>This Month</span>
                                <h4 class="mb-0 font-weight-medium">KES 182,887,196 </h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#" class="card dark-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-purple text-white rounded-circle"><strong class=" year-abr">20</strong></div>
                            <div class="ml-4">
                                <span>This Year</span>
                                <h4 class="mb-0 font-weight-medium">3,761,298,129</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 d-none">
                <a href="#" class="card dark-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-danger text-white rounded-circle"><i class="flaticon-not-permitted"></i></div>
                            <div class="ml-4">
                                <span>Schools</span>
                                <h4 class="mb-0 font-weight-medium">13,651</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row clearfix other-summarys">
            <div class="col-lg-4 col-md-12">
                <div class="">
                    <h2>Today's Collection summary <span class="today"></span></h2>
                </div>
                <div class="card dark-card height-54">

                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-6 border-right pb-4 pt-4 today-collections">
                                <label class="mb-0">Total Collected</label>
                                <h4 class="font-light">9,951,093</h4>
                            </div>
                            <div href="#" class="col-6 pb-4 pt-4 trend">
                                <label class="mb-0">From yesterday</label>
                                <h4 class="font-light"><i class="zmdi  mr-2"></i>-7,703,177‬</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body the-streams height-54">
                        <a href="revenuestream-dash.html">
                            <div class="form-group" data-toggle="tooltip" data-original-title="0.00%">
                                <label class="d-block"><span class="stream-name">Parking Fees</span><span class="float-right">8,444,300</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                </div>
                            </div>
                        </a>
                        <a href="revenuestream-dash.html">
                            <div class="form-group" data-toggle="tooltip" data-original-title="0.00%">
                                <label class="d-block"><span class="stream-name">Billboards and Advertisements</span><span class="float-right">2,490,006</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                </div>
                            </div>
                        </a>
                        <a href="revenuestream-dash.html">
                            <div class="form-group" data-toggle="tooltip" data-original-title="0.00%">
                                <label class="d-block"><span class="stream-name">Other incomes</span><span class="float-right">2,304,858</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-animated"  role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                        </a>
                        <a href="revenuestream-dash.html">
                            <div class="form-group" data-toggle="tooltip" data-original-title="0.00%">
                                <label class="d-block"><span class="stream-name">Market Fees</span><span class="float-right">1,085,596</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-animated"  role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                        </a>
                        <a href="revenuestream-dash.html">
                            <div class="form-group" data-toggle="tooltip" data-original-title="0.00%">
                                <label class="d-block"><span class="stream-name">Single Business Permits</span><span class="float-right">1,005,055</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-animated"  role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                        </a>
                        <div class="form-group" data-toggle="tooltip" data-original-title="0.00%">
                            <label class="d-block"><span class="stream-name">Land Rates</span><span class="float-right">862,775</span></label>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-animated"  role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                            </div>
                        </div>
                        <a href="revenuestream-dash.html">
                            <div class="form-group" data-toggle="tooltip" data-original-title="0.00%">
                                <label class="d-block"><span class="stream-name">Plans and Inspections</span><span class="float-right">782,525</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-animated"  role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                        </a>

                        <a href="revenuestream-dash.html">
                            <div class="form-group" data-toggle="tooltip" data-original-title="0.00%">
                                <label class="d-block"><span class="stream-name">Fire Inspection Certificate</span><span class="float-right">295,000</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-animated"  role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                        </a>
                        <a href="revenuestream-dash.html">
                            <div class="form-group" data-toggle="tooltip" data-original-title="0.00%">
                                <label class="d-block"><span class="stream-name">House and stall rents</span><span class="float-right">86,150</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-animated"  role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <h2>Revenue collection sammary</h2>
                        </div>
                        <div class="card user_statistics dark-card">

                            <div class="card-body">
                                <div id="transaction-data" style="height: 338px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-none">
                            <h2>Revenue collection by revenuestreams</h2>
                        </div>
                        <div class="card user_statistics dark-card">

                            <div class="card-body">
                                <div id="RevenueStreams2" style="height: 338px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-sm-12">

                <div class="card user_statistics dark-card height-32">
                    <div class="card-body">
                        <p class="graph-title text-center">Revenue Targets Comparisons</p>
                        <figure class="targets-container">
                            <div id="daily-target"></div>
                            <div id="monthly-target"></div>
                            <div id="annual-target"></div>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="card user_statistics dark-card">
                    <div class="card-body">
                        <div id="revenue-by-bank" style="height: 338px"></div>
                    </div>
                </div>
            </div>

            <!--revenue perfomance-->
            <div class="col-12">
                <div class="card dark-card">
                    <div class="card-body">
                        <div id="perfomance" style="height: 500px"></div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer hidden-xs-down">
            <p>Powered by RevenueSure</p>
        </footer>
    </section>
@endsection
