@extends('consumer.layouts.default')
@section('content')
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
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
							<div class="page-title">
								<ol class="breadcrumb text-right">
									<li><a href="#">Dashboard</a></li>
									<li><a href="#">Table</a></li>
									<li class="active">Data Table</li>
								</ol>
							</div>
						</div>
                    </div>
                </div>
				<div class="main-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="card alert">
								<div class="card-header">
									<h2>Restaurant List</h2>
									<div class="card-header-right-icon">
										<ul>
											<li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
											<li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="bootstrap-data-table-panel">
									<table id="row-select" class="display table table-borderd table-hover table-responsive">
										<thead>
											<tr>
												<th>Name</th>
												{{-- <th>Address</th> --}}
												<th>Contact</th>
												<th>Email</th>
											</tr>
										</thead>
										
										<tbody>
											@foreach ($restaurant as $res)
												<tr>
													<td><a href="{{ URL::to('restaurantabout/'.$res -> id) }}" style="color:green">{{ $res -> name }}</a></td>
													{{-- <td>{{ $res -> address }}</td> --}}
													<td>0{{ $res -> contact }}</td>
													<td>{{ $res -> email }}</td>
												</tr>
											@endforeach
										</tbody>
										{{-- <tfoot>
											<tr>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
											</tr>
										</tfoot> --}}
									</table>
								</div>
							</div><!-- /# card -->
						</div><!-- /# column -->
					</div><!-- /# row -->
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->







    <!-- JS Grid Scripts Start-->
	<script src="{{ asset('restaurant/assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/data-table/dataTables.bootstrap.min.html') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/data-table/buttons.bootstrap.min.html') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/data-table/datatables-init.js') }}"></script>
	
	
    <script src="{{ asset('restaurant/assets/js/lib/mmc-common.js') }}"></script>
    <script src="{{ asset('restaurant/assets/js/lib/mmc-chat.js') }}"></script>
    <script src="{{ asset('restaurant/assets/js/scripts.js') }}"></script><!-- scripit init-->
	<!-- JS Grid Scripts End-->
@stop