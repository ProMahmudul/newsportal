<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center py-5" href="{{ route('dashboard') }}">
        @php
            $setting = \App\Setting::orderBy('id', 'DESC')->first();
        @endphp
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="@if($setting) {{ Storage::url($setting->favicon) }} @endif" alt="@if($setting) {{ $setting->site_title }} @endif" width="40">
        </div>
        <div class="sidebar-brand-text mx-3">@if($setting) {{ $setting->site_title }} @endif</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Posts Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#posts" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-thumbtack"></i>
            <span>Posts</span>
        </a>
        <div id="posts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Posts:</h6>
                <a class="collapse-item" href="{{ route('post') }}">Add New</a>
                <a class="collapse-item" href="{{ route('post.manage') }}">All Posts</a>
            </div>
        </div>
    </li>

    <!-- Category Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#category" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-box"></i>
            <span>Category</span>
        </a>
        <div id="category" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category:</h6>
                <a class="collapse-item" href="{{ route('category') }}">Manage Categories</a>
            </div>
        </div>
    </li>

    <!-- Settings Collapse Menu -->
    {{--<li class="nav-item">--}}
        {{--<a class="nav-link" href="{{ route('settings') }}">--}}
            {{--<i class="fas fa-fw fa-chart-area"></i>--}}
            {{--<span>Settings</span></a>--}}
    {{--</li>--}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>