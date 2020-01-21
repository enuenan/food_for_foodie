@extends('restaurant.layouts.default')
@section('content')
    {{-- <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard 1</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">menu</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="order-list-item">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Order ID</th>
                                            <th>Menu Name</th>
                                            <th>Price</th>
                                            <th>Rating</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Saiful Islam</td>
                                            <td>#8546677</td>
                                            <td>Hot Dog</td>
                                            <td><button type="button" class="btn btn-success btn-rounded">$29</button></td>
                                            <td><div class="full-stars-only"></div></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">100</button></td>
                                            <td><button type="button" class="btn btn-success btn-rounded">Paid</button></td>
                                        </tr>

                                        <tr>
                                            <td>Jannatul Mariam</td>
                                            <td>#8546678</td>
                                            <td>Chicken Biryani</td>
                                            <td><button type="button" class="btn btn-success btn-rounded">$30</button></td>
                                            <td><div class="half-full-stars"></div></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">105</button></td>
                                            <td><button type="button" class="btn btn-warning btn-rounded">Pending</button></td>
                                        </tr>

                                        <tr>
                                            <td>Anik Hasan</td>
                                            <td>#8546679</td>
                                            <td>Chicken Fried Rice</td>
                                            <td><button type="button" class="btn btn-success btn-rounded">$31</button></td>
                                            <td><div class="full-stars-only"></div></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">110</button></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">Failed</button></td>
                                        </tr>

                                        <tr>
                                            <td>John Doe</td>
                                            <td>#8546680</td>
                                            <td>Crispy Chicken Salt</td>
                                            <td><button type="button" class="btn btn-success btn-rounded">$32</button></td>
                                            <td><div class="full-stars-only"></div></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">120</button></td>
                                            <td><button type="button" class="btn btn-success btn-rounded">Paid</button></td>
                                        </tr>

                                        <tr>
                                            <td>Micheal Qin</td>
                                            <td>#8546681</td>
                                            <td>Chilli Chicken</td>
                                            <td><button type="button" class="btn btn-success btn-rounded">$34</button></td>
                                            <td><div class="half-full-stars"></div></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">130</button></td>
                                            <td><button type="button" class="btn btn-warning btn-rounded">Pending</button></td>
                                        </tr>

                                        <tr>
                                            <td>Ishfaque Akash</td>
                                            <td>#8546682</td>
                                            <td>Paneer Butter Masala</td>
                                            <td><button type="button" class="btn btn-success btn-rounded">$35</button></td>
                                            <td><div class="full-stars-only"></div></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">150</button></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">Failed</button></td>
                                        </tr>

                                        <tr>
                                            <td>Jannatul Tasnim</td>
                                            <td>#8546683</td>
                                            <td>Egg Fried Rice</td>
                                            <td><button type="button" class="btn btn-success btn-rounded">$36</button></td>
                                            <td><div class="full-stars-only"></div></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">160</button></td>
                                            <td><button type="button" class="btn btn-success btn-rounded">Paid</button></td>
                                        </tr>

                                        <tr>
                                            <td>John Cina</td>
                                            <td>#8546684</td>
                                            <td>Sweet Corn Soup</td>
                                            <td><button type="button" class="btn btn-success btn-rounded">$37</button></td>
                                            <td><div class="half-full-stars"></div></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">175</button></td>
                                            <td><button type="button" class="btn btn-warning btn-rounded">Pending</button></td>
                                        </tr>

                                        <tr>
                                            <td>Azad Rahman</td>
                                            <td>#8546685</td>
                                            <td>Clear Soup</td>
                                            <td><button type="button" class="btn btn-success btn-rounded">$38</button></td>
                                            <td><div class="full-stars-only"></div></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">185</button></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">Failed</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->
                    </div><!-- /# row -->
                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap --> --}}

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard 1</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Components </a></li>
                                    <li class="active">Sweetalert</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4 style="color:red;font-size:30px;">SORRY</h4>
                                </div>
                                <div class="sweetalert m-t-15">
                                    <button class="btn btn-danger btn sweet-auto">Havn't done yet</button>
                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->


                        {{-- <div class="col-lg-4">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Sweet Prompt</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sweetalert m-t-15">
                                  
                                        <button class="btn btn-success btn sweet-prompt">Sweet Prompt</button>
                               
                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->


                        <div class="col-lg-4">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Sweet Ajax</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sweetalert m-t-15">
                              
                                        <button class="btn btn-info btn sweet-ajax">Sweet Ajax</button>
                               
                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column --> --}}

                    </div><!-- /# row -->
                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

    
    <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="assets/js/lib/sweetalert/sweetalert.min.js"></script><!-- scripit init-->
    <script src="assets/js/lib/sweetalert/sweetalert.init.js"></script><!-- scripit init-->	
    <script src="assets/js/scripts.js"></script><!-- scripit init-->
@stop
