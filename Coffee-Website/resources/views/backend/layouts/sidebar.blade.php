<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">
            <li class="">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Trình điều khiển</span>

                </a>

            </li>

            <li class="treeview @if(isset($open) && $open == 'cates') active menu-open @endif">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Quản lý danh mục</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('cates.get_add') }}"><i class="fa fa-circle-o"></i> Thêm danh mục</a></li>
                    <li><a href="{{ route('cates.list') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                </ul>
            </li>

            <li class="treeview @if(isset($open) && $open == 'products') active menu-open @endif">
                <a href="#">
                    <i class="fa fa-folder-open"></i> <span>Quản lý sản phẩm</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('products.get_add') }}"><i class="fa fa-circle-o"></i> Thêm sản phẩm</a></li>
                    <li><a href="{{ route('products.list') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                </ul>
            </li>

            <li class="treeview @if(isset($open) && $open == 'posts') active menu-open @endif">
                <a href="#">
                    <i class="fa fa-folder-open"></i> <span>Quản lý tin tức </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('posts.get_add') }}"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    <li><a href="{{ route('posts.list') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                </ul>
            </li>

            <li class="treeview @if(isset($open) && $open == 'order') active menu-open @endif">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>Quản lý đơn hàng</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('order.list') }}"><i class="fa fa-circle-o"></i> Tất cả đơn hàng</a></li>
                    <li><a href="{{ route('order.da_thanh_toan') }}"><i class="fa fa-circle-o"></i> Đơn hàng đã thanh
                            toán</a></li>
                    <li><a href="{{ route('order.chua_thanh_toan') }}"><i class="fa fa-circle-o"></i> Đơn hàng chưa
                            thanh toán </a></li>
                </ul>
            </li>

{{--            <li class="treeview @if(isset($open) && $open == 'order') active menu-open @endif">--}}
{{--                <a href="#">--}}
{{--                    <i class="fa fa-shopping-cart"></i> <span>Quản lý đơn hàng</span>--}}
{{--                    <span class="pull-right-container">--}}
{{--              <i class="fa fa-angle-left pull-right"></i>--}}
{{--            </span>--}}
{{--                </a>--}}
{{--                <ul class="treeview-menu">--}}
{{--                    <li><a href="{{ route('order.list') }}"><i class="fa fa-circle-o"></i> Tất cả đơn hàng</a></li>--}}
{{--                    <li><a href="{{ route('order.da_thanh_toan') }}"><i class="fa fa-circle-o"></i> Đơn hàng đã thanh--}}
{{--                            toán</a></li>--}}
{{--                    <li><a href="{{ route('order.chua_thanh_toan') }}"><i class="fa fa-circle-o"></i> Đơn hàng chưa--}}
{{--                            thanh toán </a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
