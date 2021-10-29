<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion pr-0" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Paradise</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-desktop"></i>
            <span> داشبورد </span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    {{-- <!-- Heading -->
    <div class="sidebar-heading">
        سیستم مالی
    </div> --}}

    <!-- Nav Item - Catgegory -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('financial.categories.index') }}">
            <i class="fab fa-buffer"></i>
            <span> دسته بندی ها </span>
        </a>
    </li>

    <!-- Nav Item - Shop -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('financial.shops.index') }}">
            <i class="fas fa-archway"></i>
            <span> فروشگاه </span>
        </a>
    </li>

    <!-- Nav Item - Buy -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('financial.buys.index') }}">
            <i class="fas fa-credit-card"></i>
            <span> خرید </span>
        </a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-cart-plus"></i>
            <span> محصولات </span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.products.index') }}">محصولات</a>
                <a class="collapse-item" href="{{ route('admin.categories.index') }}">دسته بندی ها</a>
                <a class="collapse-item" href="{{ route('admin.attributes.index') }}">ویژگی ها</a>
                <a class="collapse-item" href="{{ route('admin.tags.index') }}">تگ ها</a>
            </div>
        </div>
    </li> --}}




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
