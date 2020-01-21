@extends('consumer.layouts.default')
@section('content')
    {{-- <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-primary p-48">
                                                <i class="ti-eye"></i>
                                            </div>
                                            <div class="stat-content p-30">
                                                <div class="stat-text">Order Received</div>
                                                <div class="stat-digit">6,250</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-success p-48">
                                                <i class="ti-bag"></i>
                                            </div>
                                            <div class="stat-content p-30">
                                                <div class="stat-text">Today Delevered</div>
                                                <div class="stat-digit">2,584</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-warning p-48">
                                                <i class="ti-user"></i>
                                            </div>
                                            <div class="stat-content p-30">
                                                <div class="stat-text">New Customer</div>
                                                <div class="stat-digit">9,874</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-danger p-48">
                                                <i class="ti-money"></i>
                                            </div>
                                            <div class="stat-content p-30">
                                                <div class="stat-text">Net Earning</div>
                                                <div class="stat-digit">3,5621</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card bg-success">
                                        <div class="stat-widget-six">
                                            <div class="stat-icon p-15">
                                                <i class="ti-stats-up"></i>
                                            </div>
                                            <div class="stat-content p-t-12 p-b-12">
                                               <div class="text-left dib">
                                                <div class="stat-heading">Daily sales</div>
                                                <div class="stat-text">Total: 9765</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card bg-primary">
                                        <div class="stat-widget-six">
                                            <div class="stat-icon p-15">
                                                <i class="ti-stats-down"></i>
                                            </div>
                                            <div class="stat-content p-t-12 p-b-12">
                                               <div class="text-left dib">
                                                <div class="stat-heading">Daily Expense</div>
                                                <div class="stat-text">Total: 6765</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /# column -->
                    </div><!-- /# row -->
                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap --> --}}

    {{-- <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->


                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-primary p-48">
                                                <i class="ti-eye"></i>
                                            </div>
                                            <div class="stat-content p-30">
                                                <div class="stat-text">Food Items</div>
                                                <div class="stat-digit">Total: {{ $items }}</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-success p-48">
                                                <i class="ti-bag"></i>
                                            </div>
                                            <div class="stat-content p-30">
                                                <div class="stat-text">Total Categories</div>
                                                <div class="stat-digit">Total: {{ $categories }}</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-warning p-48">
                                                <i class="ti-user"></i>
                                            </div>
                                            <div class="stat-content p-30">
                                                <div class="stat-text">New Customer</div>
                                                <div class="stat-digit">Total: </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-danger p-48">
                                                <i class="ti-money"></i>
                                            </div>
                                            <div class="stat-content p-30">
                                                <div class="stat-text">Net Earning</div>
                                                <div class="stat-digit">Total:</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card bg-success">
                                        <div class="stat-widget-six">
                                            <div class="stat-icon p-15">
                                                <i class="ti-stats-up"></i>
                                            </div>
                                            <div class="stat-content p-t-12 p-b-12">
                                               <div class="text-left dib">
                                                <div class="stat-heading">Daily sales</div>
                                                <div class="stat-text">Total:</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card bg-primary">
                                        <div class="stat-widget-six">
                                            <div class="stat-icon p-15">
                                                <i class="ti-stats-down"></i>
                                            </div>
                                            <div class="stat-content p-t-12 p-b-12">
                                               <div class="text-left dib">
                                                <div class="stat-heading">Daily Expense</div>
                                                <div class="stat-text">Total: </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /# column -->
                    </div><!-- /# row -->
                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap --> --}}
@stop
