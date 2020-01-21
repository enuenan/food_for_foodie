@extends('restaurant.layouts.default')
@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1 style="color:indigo;font-size:20px;">Menu</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Components </a></li>
                                    <li class="active">Products</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->


                {{-- <div class="main-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card alert">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="product-3-img">
                                            <img src="{{ asset('restaurant/assets/images/product_1/image-8-226x223.jpg') }}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="product_details_3">
                                            <div class="product_name">
                                                <h4>Maxican Hot Pizza</h4>
                                            </div>
                                            <div class="product_des">
                                                <p>Vimply dummy text the printing.</p>
                                            </div>
                                            <div class="prdt_add_to_cart">
                                                <button type="button" class="btn btn-success btn-rounded">$29</button>
                                                <button type="button" class="btn btn-primary btn-rounded  m-l-10">add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->
                    </div><!-- /# row -->
                </div><!-- /# main content --> --}}

                <div class="main-content">
                    @foreach ($items as $item)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card alert">
                                    <div class="product-2-details">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="product-2-img">
                                                        <img src="{{ URL::to('restaurant/uploads/items/thumbnail/'.$item->image) }}" alt=""/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-2-des">
                                                        <div class="product_name">
                                                            <h2>{{ $item -> name }}</h2>
                                                        </div>
                                                        <div class="product_des">
                                                            <p><span style="color:maroon">Details:</span>{{ $item -> details }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-2-button">
                                                        <div class="prdt_add_to_cart">
                                                            <button type="button" class="btn btn-success btn-lg btn-rounded m-b-10 m-l-5">{{ $item -> status }} Available</button>
                                                            <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">৳ {{ $item -> price }}</button>
                                                            <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5" data-toggle="modal" data-target="#{{ $item -> id }}"><i class="ti-shopping-cart"></i> Edit</button>
                                                            
                                                            {{-- Edit category form --}}
                                                            <div class="modal fade" id="{{ $item -> id }}" role="dialog">
                                                                <div class="modal-dialog">
                                                                
                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            <h4 class="modal-title">Edit category</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form class="form form-login" method="post" action="{{ URL::to('editmenu/'.$item->id) }}" onsubmit="return category_validation()">
                                                                                {{ csrf_field() }}
                                                                                <div class="form-group">
                                                                                    <label for="name" style="float:left">Category Name</label>
                                                                                    <input type="text" class="form-control" name="name" id="name" value="{{ $item -> name }}">
                                                                                    <span class="error">{{ $errors->first('name') }}</span>
                                                                                    <span id="cat" style="color: red; font-weight: bold; font-style: oblique;"></span>

                                                                                    <label for="price" style="float:left">Price</label>
                                                                                    <input type="text" class="form-control" name="price" id="price" value="{{ $item -> price }}">
                                                                                    <span class="error">{{ $errors->first('price') }}</span>
                                                                                    <span id="cat" style="color: red; font-weight: bold; font-style: oblique;"></span>

                                                                                    <label for="status" style="float:left">Available</label>
                                                                                    <input type="text" class="form-control" name="status" id="status" value="{{ $item -> status }}">
                                                                                    <span class="error">{{ $errors->first('status') }}</span>
                                                                                    <span id="cat" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                                                                    
                                                                                    <label for="details" style="float:left">Details</label>
                                                                                    <input type="text" class="form-control" name="details" id="details" value="{{ $item -> details }}">
                                                                                    <span class="error">{{ $errors->first('details') }}</span>
                                                                                    <span id="cat" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                                                                    
                                                                                    
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                                    <button type="submit" class="btn btn-success">Update</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>{{--End of Edit category form --}}

                                                            <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5" data-toggle="modal" data-target="#mymodal"><i class="ti-shopping-cart"></i> Delete</button>

                                                            {{-- Delete category --}}
                                                            <div class="modal fade" id="mymodal" role="dialog">
                                                                <div class="modal-dialog">
                                                                
                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            <h4 class="modal-title">Delete food item</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h2 style="float:left">Are you sure want to <span style="color:red;font-weight:bold">delete</span> this food item??</h2>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                                                            <a href="{{ URL::to('deletemenu/'.$item -> id) }}"><button type="submit" class="btn btn-danger">Delete</button></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>{{--End of Delete category --}}

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /# card -->
                            </div><!-- /# column -->
                        </div><!-- /# row -->
                    @endforeach
                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->
@stop
