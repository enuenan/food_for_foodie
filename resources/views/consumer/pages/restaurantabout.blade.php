@extends('consumer.layouts.default')
@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1 style="color:indigo;font-size:20px;">{{ $restaurant -> name }}</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Menu </a></li>
                                    <li class="active">Items</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->





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
                                                            <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5"><i class="ti-shopping-cart"></i> add to cart</button>
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

                {{-- <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="product-2-details">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="{{ URL::to('restaurant/assets/images/product_1/download.jpg') }}" alt=""/>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="product-2-details">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt=""/>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="product-2-details">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt=""/>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="product-2-details">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt=""/>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="product-2-details">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt=""/>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
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

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="product-2-details">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt=""/>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
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
                </div><!-- /# main content --> --}}





            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->
@stop