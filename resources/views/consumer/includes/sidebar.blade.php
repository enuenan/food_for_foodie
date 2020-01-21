<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
				<li class="label">Main</li>
                <li class="active"><a href="{{ URL::to('foodie') }}"><i class="ti-home"></i> Dashboard </a></li>
                
                <li class="label">Menu</li>
                <li><a href="{{ URL::to('restaurantlist') }}"><i class="ti-receipt"></i> Restaurant List</a></li>

                <li class="label">Settings</li>
                <li><a href="{{ URL::to('userprofile') }}"><i class="ti-user"></i> Profile</a></li>
                <li><a href="{{ URL::to('cal') }}"><i class="ti-calendar"></i> Calender </a></li>
                <li><a href="{{ URL::to('logout') }}"><i class="ti-close"></i> Logout</a></li>

            </ul>
        </div>
    </div>
</div><!-- /# sidebar -->
