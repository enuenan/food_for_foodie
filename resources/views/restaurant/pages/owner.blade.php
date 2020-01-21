@extends('restaurant.layouts.default')
@section('content')
    <div class="content-wrap">
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

                @if(!$about)
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card alert">
                                    <div class="card-header">
                                        <h4>Add User Details First </h4>
                                    </div>
                                    <div class="button-list">
                                        <p class="text-muted m-b-15">
                                            
                                        </p>
                                        <button type="button" class="btn btn-success m-b-10 m-l-5" data-toggle="modal" data-target="#myModal">Add Details</button>
                                        
                                        {{-- Add category form --}}
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                            
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Add User Details</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form form-login" method="post" action="{{ URL::to('userdetails') }}" enctype="multipart/form-data" onsubmit="return category_validation()">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <label for="name">Owner Name</label>
                                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                                                                <span id="cat" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                                                <span class="error">{{ $errors->first('name') }}</span>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label">Restaurant Image</label><br>
                                                                <div class="col-sm-12">
                                                                    <div class="form-control file-input dark-browse-input-box">
                                                                        <label for="inputFile-2">
                                                                            <span class="btn btn-danger dark-input-button">
                                                                                <input type="file" name="image" id="inputFile-2" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value" multiple>
                                                                                <i class="fa fa-file-archive-o"></i>
                                                                            </span>
                                                                        </label>
                                                                        <input class="file-name input-flat" type="text" readonly="readonly" placeholder="Browse Files" value="{{ old('image') }}">
                                                                    </div>
                                                                    <span id="product_image" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                                                    <span class="error">{{ $errors->first('image') }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-success">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- /# card -->
                            </div><!-- /# column -->
                        </div><!-- /# row -->
                    </div><!-- /# main content -->
                @endif
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
    </div><!-- /# content wrap -->

    

    
@stop
