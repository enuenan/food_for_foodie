<div class="header">
    <div class="pull-left">
    <div class="logo"><a href="index-2.html"><span>{{ Session::get('username') }}</span></a></div>
        <div class="hamburger sidebar-toggle">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>

    {{-- <div class="pull-right p-r-15">
        <ul>
            <li class="header-icon dib"><i class="ti-bell"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">Recent Notifications</span>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Saifun</div>
                                        <div class="notification-text">5 members joined today </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mariam</div>
                                        <div class="notification-text">likes a photo of you</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Tasnim</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Ishrat Jahan</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-center">
                                <a href="#" class="more-link">See All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="header-icon dib"><i class="ti-email"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">2 New Messages</span>
                        <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li class="notification-unread">
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Saiul Islam</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>

                            <li class="notification-unread">
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Ishrat Jahan</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Saiul Islam</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Ishrat Jahan</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-center">
                                <a href="#" class="more-link">See All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
			<li class="header-icon dib chat-sidebar-icon"><i class="ti-comments"></i></li>
            <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar"> <i class="ti-angle-down f-s-10"></i></span>
                <div class="drop-down dropdown-profile">
                    <div class="dropdown-content-heading">
                        <span class="text-left">Upgrade Now</span>
                        <p class="trial-day">30 Days Trail</p>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                            <li><a href="#"><i class="ti-wallet"></i> <span>My Balance</span></a></li>
                            <li><a href="#"><i class="ti-write"></i> <span>My Task</span></a></li>
                            <li><a href="#"><i class="ti-calendar"></i> <span>My Calender</span></a></li>
                            <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                            <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                            <li><a href="#"><i class="ti-help-alt"></i> <span>Help</span></a></li>
                            <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                            <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div> --}}
</div>

{{-- <div class="chat-sidebar">
    <!-- BEGIN chat -->
    <div id="mmc-chat" class="color-default">
        <!-- BEGIN CHAT BOX -->
        <div class="chat-box">
            <!-- BEGIN CHAT BOXS -->
            <ul class="boxs"></ul>
            <!-- END CHAT BOXS -->
            <div class="icons-set">
                <div class="stickers">
                    <div class="had-container">
                        <div class="row">
                            <div class="s12">
                                <ul class="tabs" style="width: 100%;height: 60px;">
                                    <li class="tab col s3">
                                        <a href="#tab1" class="active">
                                            <img src="images/1.html" alt="" />
                                        </a>
                                    </li>
                                    <li class="tab col s3"><a href="#tab2">Test 2</a></li>
                                </ul>
                            </div>
                            <div id="tab1" class="s12 tab-content">
                                <ul>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                    <li><img src="images/1.html" alt="" /></li>
                                </ul>
                            </div>
                            <div id="tab2" class="s12 tab-content">Test 2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CHAT BOX -->
        <!-- BEGIN SIDEBAR -->
        <div id="sidebar" class="right scroll">
            <div class="had-container">
                <!-- BEGIN USERS -->
                <div class="users">

                    <ul class="user-list">
                        <!-- BEGIN USER-->
                        <li class="user-tooltip" data-id="1" data-status="online" data-username="Rufat Askerov" data-position="left" data-filter-item data-filter-name="rufat askerov">
                            <!-- BEGIN USER IMAGE-->
                            <div class="user-image">
                                <img src="assets/images/avatar/1.jpg" class="avatar" alt="Rufat Askerov" />
                            </div>
                            <!-- END USER IMAGE-->
                            <!-- BEGIN USERNAME-->
                            <span class="user-name">Rufat Askerov</span>
							<span class="user-show"></span>
                            <!-- END USERNAME-->
                        </li>
                        <!-- END USER-->
                        <!-- BEGIN USER-->
                        <li class="user-tooltip" data-id="3" data-status="online" data-username="Alice" data-position="left" data-filter-item data-filter-name="alice">
                            <div class="user-image">
                                <img src="assets/images/avatar/1.jpg" class="avatar" alt="Alice" />
                            </div>
                            <span class="user-name">Alice</span>
							<span class="user-show"></span>
                        </li>

                        <!-- BEGIN USER-->
                        <li class="user-tooltip" data-id="7" data-status="offline" data-username="Michael Scofield" data-position="left" data-filter-item data-filter-name="michael scofield">
                            <div class="user-image">
                                <img src="assets/images/avatar/1.jpg" class="avatar" alt="Michael Scofield" />
                            </div>
                            <span class="user-name">Michael Scofield</span>
							<span class="user-show"></span>
                        </li>

                        <!-- BEGIN USER-->
                        <li class="user-tooltip" data-id="5" data-status="online" data-username="Irina Shayk" data-position="left" data-filter-item data-filter-name="irina shayk">
                            <div class="user-image">
                                <img src="assets/images/avatar/1.jpg" class="avatar" alt="Irina Shayk" />
                            </div>
                            <span class="user-name">Irina Shayk</span>
							<span class="user-show"></span>
                        </li>

                        <!-- BEGIN USER-->
                        <li class="user-tooltip" data-id="6" data-status="offline" data-username="Sara Tancredi" data-position="left" data-filter-item data-filter-name="sara tancredi">
                            <div class="user-image">
                                <img src="assets/images/avatar/1.jpg" class="avatar" alt="Sara Tancredi" />
                            </div>
                            <span class="user-name">Sara Tancredi</span>
							<span class="user-show"></span>
                        </li>

                        <!-- BEGIN USER-->
                        <li class="user-tooltip" data-id="7" data-status="offline" data-username="Saifun" data-position="left" data-filter-item data-filter-name="saifun">
                            <div class="user-image">
                                <img src="assets/images/avatar/1.jpg" class="avatar" alt="Saifun" />
                            </div>
                            <span class="user-name">Saifun</span>
							<span class="user-show"></span>
                        </li>
                    </ul>
					<div class="chat-user-search">
						<div class="input-group">
							<span class="input-group-addon"><i class="ti-search"></i></span>
							<input type="text" class="form-control" placeholder="Search"  data-search />
						</div>
					</div>
                </div>
                <!-- END USERS -->

            </div>
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END chat -->
</div> --}}
<!-- END chat Sidebar-->
