@extends('layouts.app')

@section('content')
    <section class="content dark-body">
        <header class="content__title px-0 border-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
							<span class="rev-title-container">
							 <h1 class="text-capitalize stream_name m-0">Advertisements Dashboard</h1>
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
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#" class="card dark-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-danger text-white rounded-circle"><i class="flaticon-not-permitted"></i></div>
                            <div class="ml-4">
                                <span>Today</span>
                                <h4 class="mb-0 font-weight-medium">KES 703,651</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
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
            <div class="col-lg-3 col-md-6 col-sm-12">
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
            <div class="col-lg-3 col-md-6 col-sm-12">
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
            
        </div>
        <div class="row clearfix other-summarys">
           
            <div class="col-lg-12 col-md-12">
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
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">

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
           
            <!--revenue perfomance-->
            <div class="col-sm-12 col-md-7">
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
