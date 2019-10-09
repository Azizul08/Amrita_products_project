
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="{{ Request::is('dashboard') ? 'class="active"' :''}}"><a  href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span>
                <span class="label label-important">2</span></a>
            <ul>
                <li class="{{ Request::is('/admin/add-category') ? 'class="active"' :''}}"><a href="{{url('/admin/add-category')}}">Add Category</a></li>
                <li class="{{ Request::is('/admin/view-categories') ? 'class="active"' :''}}"><a href="{{url('/admin/view-categories')}}">View Categories</a></li>

            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span>
                <span class="label label-important">2</span></a>
            <ul>
                <li class="{{ Request::is('/admin/add-product') ? 'class="active"' :''}}"><a href="{{url('/admin/add-product')}}">Add Product</a></li>
                <li class="{{ Request::is('/admin/view-products') ? 'class="active"' :''}}"><a href="{{url('/admin/view-products')}}">View Products</a></li>

            </ul>
        </li>

        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Discounts</span>
                <span class="label label-important">2</span></a>
            <ul>
                <li class="{{ Request::is('/admin/add-discount') ? 'class="active"' :''}}"><a href="{{url('/admin/add-discount')}}">Add Discount</a></li>
                <li class="{{ Request::is('/admin/view-discount') ? 'class="active"' :''}}"><a href="{{url('/admin/view-discount')}}">View Discount Products</a></li>
            </ul>
        </li>

        <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Coupons</span>
                <span class="label label-important">2</span></a>
            <ul>
                <li class="{{ Request::is('/admin/add-coupon') ? 'class="active"' :''}}"><a href="{{url('/admin/add-coupon')}}">Add Coupon</a></li>
                <li class="{{ Request::is('/admin/view-coupons') ? 'class="active"' :''}}"><a href="{{url('/admin/view-coupons')}}">View Coupons</a></li>
            </ul>
        </li> -->
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Banners</span>
                <span class="label label-important">2</span></a>
            <ul>
                <li class="{{ Request::is('/admin/add-banner') ? 'class="active"' :''}}"><a href="{{url('/admin/add-banner')}}">Add Banner</a></li>
                <li class="{{ Request::is('/admin/view-banners') ? 'class="active"' :''}}"><a href="{{url('/admin/view-banners')}}">View Banners</a></li>
            </ul>
        </li>


    </ul>
</div>
<!--sidebar-menu-->