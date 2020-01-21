@extends('restaurant.layouts.default')
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
                                    <li><a href="#">Pages</a></li>
                                    <li class="active">Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-10 col-md-offset-1">
                            <div class="card alert">
                                <div class="card-body">
									<div class="user-profile">
										<div class="row">
											{{-- <div class="col-lg-4">
												<div class="user-photo m-b-30">
													<img class="img-responsive" src="assets/images/user-profile.jpg" alt="" />
												</div>
												<div class="user-work">
													<h4>work</h4>
													<div class="work-content">
														<h3>HTML Cooker Bangladesh </h3>
														<p>123, South Mugda</p>
														<p>Dhaka, 1214</p>
													</div>
													<div class="work-content">
														<h3>Unix Bangladesh</h3>
														<p>123, South Mugda</p>
														<p>Dhaka, 1214</p>
													</div>
												</div>
												<div class="user-skill">
													<h4>Skill</h4>
													<ul>
														<li><a href="#">Branding</a></li>
														<li><a href="#">UI/UX</a></li>
														<li><a href="#">Web Design</a></li>
														<li><a href="#">Wordpress</a></li>
														<li><a href="#">Magento</a></li>
													</ul>
												</div>
											</div> --}}
											<div class="col-lg-12">
												<div class="user-profile-name">Saiful Islam</div>
												<div class="user-Location"><i class="ti-location-pin"></i> Dhaka, Bangladesh</div>
												<div class="user-job-title">Product Designer</div>
												{{-- <div class="ratings">
													<h4>Ratings</h4>
													<div class="rating-star">
														<span>8.9</span>
														<i class="ti-star color-primary"></i>
														<i class="ti-star color-primary"></i>
														<i class="ti-star color-primary"></i>
														<i class="ti-star color-primary"></i>
														<i class="ti-star"></i>
													</div>
												</div> 
												<div class="user-send-message"><button class="btn btn-primary btn-addon" type="button"><i class="ti-email"></i>Send Message</button></div> --}}
												<div class="custom-tab user-profile-tab">
													<ul class="nav nav-tabs" role="tablist">
														<li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a></li>
														<div class="card-header-right-icon">
															<ul>
																<button type="button" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5"><i class="ti-settings"></i> Edit Profile</button>
															</ul>
														</div>
													</ul>
													<div class="tab-content">
														<div role="tabpanel" class="tab-pane active" id="1">
															<div class="contact-information">
																<h4>Contact information</h4>
																<div class="phone-content">
																	<span class="contact-title">Phone:</span>
																	<span class="phone-number">+8801629599859</span>
																</div>
																<div class="address-content">
																	<span class="contact-title">Address:</span>
																	<span class="mail-address">123, Rajar Goli, South Mugda</span>
																</div>
																<div class="email-content">
																	<span class="contact-title">Email:</span>
																	<span class="contact-email">hello@htmlcooker.com</span>
																</div>
																<div class="website-content">
																	<span class="contact-title">Website:</span>
																	<span class="contact-website">www.htmlcooker.com</span>
																</div>
																<div class="skype-content">
																	<span class="contact-title">Skype:</span>
																	<span class="contact-skype">htmlcooker</span>
																</div>
															</div>
															<div class="basic-information">
																<h4>Basic information</h4>
																<div class="birthday-content">
																	<span class="contact-title">Birthday:</span>
																	<span class="birth-date">January 31, 1990 </span>
																</div>
																<div class="gender-content">
																	<span class="contact-title">Gender:</span>
																	<span class="gender">Male</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div><!-- /# column -->
						{{-- <div class="col-lg-6">
							<div class="row">
								<div class="col-lg-3">
									<div class="card">
										<div class="stat-widget-one">
											<div class="profile-widget">
												<div class="stat-text">Job Done</div>
												<div class="stat-digit">19</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="card">
										<div class="stat-widget-one">
											<div class="profile-widget">
												<div class="stat-text">Ongoing Job</div>
												<div class="stat-digit">6</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="card">
										<div class="stat-widget-one">
											<div class="profile-widget">
												<div class="stat-text">Reject</div>
												<div class="stat-digit">6</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="card">
										<div class="stat-widget-one">
											<div class="profile-widget">
												<div class="stat-text">Upcomming</div>
												<div class="stat-digit">29</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="card alert">
										<div class="card-header">
											<h4>Task </h4>
											<div class="card-header-right-icon">
												<ul>
													<li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
													<li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="todo-list">
											<div class="tdl-holder">
												<div class="tdl-content">
													<ul>
														<li><label><input type="checkbox"><i></i><span>get up</span><a href='#' class="ti-close"></a></label></li>
														<li><label><input type="checkbox"><i></i><span>don't give up the fight.</span><a href='#' class="ti-close"></a></label></li>
														<li><label><input type="checkbox" checked><i></i><span>stand up</span><a href='#' class="ti-close"></a></label></li>
														<li><label><input type="checkbox"><i></i><span>don't give up the fight.</span><a href='#' class="ti-close"></a></label></li>
														<li><label><input type="checkbox" checked><i></i><span>do something else</span><a href='#' class="ti-close"></a></label></li>
													</ul>
												</div>
												<input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
											</div>
										</div>
									</div><!-- /# card -->
								</div>
							</div>
						</div><!-- /# column -->
                    </div><!-- /# row -->
					<div class="row">
						<div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Recent Project </h4>
									<div class="card-header-right-icon">
										<ul>
											<li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
											<li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
												<ul class="card-option-dropdown dropdown-menu">
													<li><a href="#"><i class="ti-loop"></i> Update data</a></li>
													<li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
													<li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
													<li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
												</ul>
											</li>
											<li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
										</ul>
									</div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Kolor Tea Shirt For Man</td>
                                                <td><span class="badge badge-primary">Ongoing</span></td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                            </tr>
                                            <tr>
                                                <td>Kolor Tea Shirt For Women</td>
                                                <td><span class="badge badge-success">Complete</span></td>
                                                <td>January 30</td>
                                                <td class="color-success">$55.32</td>
                                            </tr>
                                            <tr>
                                                <td>Blue Backpack For Baby</td>
                                                <td><span class="badge badge-danger">Rejected</span></td>
                                                <td>January 25</td>
                                                <td class="color-danger">$14.85</td>
                                            </tr>
                                            <tr>
                                                <td>Kolor Tea Shirt For Man</td>
                                                <td><span class="badge badge-primary">Ongoing</span></td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                            </tr>
                                            <tr>
                                                <td>Kolor Tea Shirt For Women</td>
                                                <td><span class="badge badge-success">Complete</span></td>
                                                <td>January 30</td>
                                                <td class="color-success">$55.32</td>
                                            </tr>
                                            <tr>
                                                <td>Blue Backpack For Baby</td>
                                                <td><span class="badge badge-danger">Rejected</span></td>
                                                <td>January 25</td>
                                                <td class="color-danger">$14.85</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /# column -->
						<div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Recent Comments </h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="recent-comment">
									<div class="media">
										<div class="media-left">
											<a href="#"><img class="media-object" src="assets/images/avatar/1.jpg" alt="..."></a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Saiful Islam</h4>
											<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
											<div class="comment-action">
												<div class="badge badge-success">Approved</div>
												<span class="m-l-10">
													<a href="#"><i class="ti-check color-success"></i></a>
													<a href="#"><i class="ti-close color-danger"></i></a>
													<a href="#"><i class="fa fa-reply color-primary"></i></a>
												</span>
											</div>
											<p class="comment-date">October 21, 2017</p>
										</div>
									</div>
									<div class="media">
										<div class="media-left">
											<a href="#"><img class="media-object" src="assets/images/avatar/2.jpg" alt="..."></a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Ishrat Jahan</h4>
											<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
											<div class="comment-action">
												<div class="badge badge-warning">Pending</div>
												<span class="m-l-10">
													<a href="#"><i class="ti-check color-success"></i></a>
													<a href="#"><i class="ti-close color-danger"></i></a>
													<a href="#"><i class="fa fa-reply color-primary"></i></a>
												</span>
											</div>
											<p class="comment-date">October 21, 2017</p>
										</div>
									</div>
									<div class="media no-border">
										<div class="media-left">
											<a href="#"><img class="media-object" src="assets/images/avatar/3.jpg" alt="..."></a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Mr. Saifun</h4>
											<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
											<div class="comment-action">
												<div class="badge badge-danger">Rejected</div>
												<span class="m-l-10">
													<a href="#"><i class="ti-check color-success"></i></a>
													<a href="#"><i class="ti-close color-danger"></i></a>
													<a href="#"><i class="fa fa-reply color-primary"></i></a>
												</span>
											</div>
											<div class="comment-date">October 21, 2017</div>
										</div>
									</div>
								</div>
							</div><!-- /# card -->
						</div><!-- /# column -->
					</div> --}}
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->
@stop