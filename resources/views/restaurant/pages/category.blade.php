@extends('restaurant.layouts.default')
@section('content')

	<style type="text/css">
        .error {
            color: #FF0000;
            font-weight: bolder;
        }
    </style>

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
						<div class="col-lg-8 col-md-offset-2">
							<div class="card alert">
								<div class="card-header">
								<h4>Category <sub style="color:indigo">(Total {{ $total }})</sub></h4>
									<div class="card-header-right-icon">
										<ul>
											<button type="button" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5" data-toggle="modal" data-target="#myModal"><i class="ti-plus"></i> Add category</button>
											{{-- <li class="card-close" data-dismiss="alert"><i class="ti-plus"></i></li> --}}
											{{-- <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li> --}}
										</ul>
									</div>
								</div>

								<div class="bootstrap-data-table-panel">
									<table id="row-select" class="display table table-borderd table-hover table-responsive">
										<thead>
											<tr>
												<th>Category</th>
												{{-- <th>Quantity of food</th> --}}
												<th>Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($category as $cat)
											{{-- <tr>
												<td>{{ $cat -> name }}</td>
												@foreach ($items as $item)
													@if ($item->category_id == $cat->id)
														<td style="text-align:center">{{ $item->status }}</td>
													@endif
												@endforeach
											</tr> --}}
											<tr>
												<td>{{ $cat -> name }}</td>
												{{-- <td>10</td> --}}
												<td><button type="button" class="btn btn-info btn-outline btn-rounded m-b-10 m-l-5" data-toggle="modal" data-target="#{{ $cat -> id }}"><i class="ti-write"></i> Edit</button></td>
												
												
												{{-- Edit category form --}}
												<div class="modal fade" id="{{ $cat -> id }}" role="dialog">
													<div class="modal-dialog">
													
														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">EDIt category</h4>
															</div>
															<div class="modal-body">
																<form class="form form-login" method="post" action="{{ URL::to('editcategory/'.$cat->id) }}" onsubmit="return category_validation()">
																	{{ csrf_field() }}
																	<div class="form-group">
																		<label for="name">Category Name</label>
																		<input type="text" class="form-control" name="name" id="name" value="{{ $cat -> name }}">
																		<span id="cat" style="color: red; font-weight: bold; font-style: oblique;"></span>
																		<span class="error">{{ $errors->first('name') }}</span>
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

												<td><button type="button" class="btn btn-primary btn-outline btn-rounded m-b-10 m-l-5" data-toggle="modal" data-target="#mymodal"><i class="ti-close"></i> Delete</button></td>

												{{-- Delete category --}}
												<div class="modal fade" id="mymodal" role="dialog">
													<div class="modal-dialog">
													
														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Delete category</h4>
															</div>
															<div class="modal-body">
																<h2>Are you sure want to <span style="color:red;font-weight:bold">delete</span> this category</h2>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
																<a href="{{ URL::to('delete/'.$cat -> id) }}"><button type="submit" class="btn btn-danger">Delete</button></a>
															</div>
														</div>
													</div>
												</div>
											</tr>
											@endforeach
										</tbody>
										<tfoot>
											<tr>
												<th>Name</th>
												{{-- <th>Category</th> --}}
											</tr>
										</tfoot>
									</table>
								</div>
							</div><!-- /# card -->
						</div><!-- /# column -->
					</div><!-- /# row -->
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
	</div><!-- /# content wrap -->

	{{-- Add category form --}}
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add category</h4>
				</div>
				<div class="modal-body">
					<form class="form form-login" method="post" action="{{ URL::to('addcategory') }}" onsubmit="return category_validation()">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="name">Category Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Enter your category name">
							<span id="cat" style="color: red; font-weight: bold; font-style: oblique;"></span>
							<span class="error">{{ $errors->first('name') }}</span>
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
	
	
	<script type="text/javascript">
        function category_validation()
        {
            var name = document.getElementById('name').value;

            // name
            if(name=="")
            {
                document.getElementById('cat').innerHTML="** Please enter your category name";
                return false;
            }
        }

    </script>
	
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