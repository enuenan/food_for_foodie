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
                                <h1>Add your menu here</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Add Menu</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
                @if(Session::has('success'))
                    <span style="color:green">{{ Session::get('success') }}</span>
                @endif
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Menu Upload</h4>
									<div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
									<div class="menu-upload-form">
										<form class="form-horizontal" method="post" action="{{ URL::to('addmenu') }}" enctype="multipart/form-data" onsubmit="return food_validation()">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Product Image</label>
                                            <div class="col-sm-10">
                                                <div class="form-control file-input dark-browse-input-box">
                                                    <label for="inputFile-2">
                                                        <span class="btn btn-danger dark-input-button">
                                                            <input type="file" name="image[]" id="inputFile-2" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value" multiple>
                                                            <i class="fa fa-file-archive-o"></i>
                                                        </span>
                                                    </label>
                                                    <input class="file-name input-flat" type="text" readonly="readonly" placeholder="Browse Files" value="{{ old('image') }}">
                                                </div>
                                                <span id="product_image" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                                <span class="error">{{ $errors->first('image') }}</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Product Name</label>
                                            <div class="col-sm-10">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Type your menu Title" value="{{ old('name') }}">
                                                <span id="product_name" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                                <span class="error">{{ $errors->first('name') }}</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">Select Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="category" name="category_id">
                                                    <option value=""><--Select Category--></option>
                                                    @foreach($categories as $cat)
                                                    {
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    }
                                                    @endforeach
                                                </select>
                                                <span id="product_category" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                                <span class="error">{{ $errors->first('category_id') }}</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Product Details</label>
                                            <div class="col-sm-10">
                                            <textarea type="text" id="details" name="details" class="form-control" rows="3" placeholder="Type your menu Details">{{ old('details') }}</textarea>
                                                <span id="product_details" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                                <span class="error">{{ $errors->first('details') }}</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Product Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="price" name="price" class="form-control" placeholder="$00.00">
                                                <span id="product_price" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                                <span class="error">{{ $errors->first('price') }}</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Available</label>
                                            <div class="col-sm-10">
                                            <input type="text" id="available" name="available" class="form-control" placeholder="Type Quantity" value="{{ old('available') }}">
                                                <span id="product_available" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-lg btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </form>
									</div>
                                </div>
							</div><!-- /# card -->
						</div><!-- /# column -->
					</div><!-- /# row -->
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

    

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("button").click(function(){

                $("#product_image").animate({
                    height: 'toggle'
                });
                $("#product_name").animate({
                    height: 'toggle'
                });
                $("#product_details").animate({
                    height: 'toggle'
                });
                $("#product_price").animate({
                    height: 'toggle'
                });
                $("#product_available").animate({
                    height: 'toggle'
                });

                $("#product_image").fadeOut(5000);
                $("#product_name").fadeOut(5000);
                $("#product_details").fadeOut(5000);
                $("#product_price").fadeOut(5000);
                $("#product_available").fadeOut(5000);
                
            });
            $("button").click(function(){
                $("#product_name").fadeOut(5000);
            });
        });
    </script>
@stop
