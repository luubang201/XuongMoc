<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
{{--            <div class="pull-left image">--}}
{{--                <img src="{{ asset(Auth::user()->avatar) }}" class="img-circle" alt="User Image">--}}
{{--            </div>--}}
{{--            <div class="pull-left info">--}}
{{--                <p>{{ Auth::user()->name}}</p>--}}
{{--                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
{{--            </div>--}}
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{route('admin.category.index')}}">
                    <i class="fa fa-th"></i> <span>Quản lý Danh mục</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.product.index')}}">
                    <i class="fa fa-th"></i> <span>Quản lý Sản Phẩm</span>
                </a>
            </li>

            <li>
                <a href="{{route('admin.vendor.index')}}">
                    <i class="fa fa-th"></i> <span>Quản Lý Nhà Cung Cấp</span>
                </a>
            </li>

            <li>
                <a href="{{route('admin.article.index')}}">
                    <i class="fa fa-th"></i> <span>Quản lý Bài viết</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.brand.index')}}">
                    <i class="fa fa-th"></i> <span>Quản lý Thương Hiệu</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.banner.index')}}">
                    <i class="fa fa-th"></i> <span>Quản lý Banner</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.user.index')}}">
                    <i class="fa fa-th"></i> <span>Quản lý Người dùng</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('admin.setting.index') }}">
                    <i class="fa fa-gear"></i><span>Cài đặt</span>
                </a>
            </li>
        </ul>
    </section>
    <script>

    </script>
    <!-- /.sidebar -->
</aside>



