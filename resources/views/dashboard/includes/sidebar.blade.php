<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('dashboard/img/logo/logo.png') }}" width="50" height="50"
                 alt="right step" class="d-inline-block align-self-top bg-gr-logo rounded-lg">
        </div>
        <div class="sidebar-brand-text mx-3">
            Right Step
            <span class="statue-store text-success"> ● <small>open</small></span>
            <span class="statue-store text-danger"> ● <small>close</small></span>
        </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{Illuminate\Support\Facades\Route::current()->uri == "admin" ? 'active':'' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Pages</div>
    <li class="nav-item {{Illuminate\Support\Facades\Route::current()->uri == 'categories/create' || Illuminate\Support\Facades\Route::current()->uri == 'categories' ? 'active':'' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories"
           aria-expanded="true" aria-controls="collapseCategories">
            <i class="fa fa-fw fa-puzzle-piece"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategories" class="collapse {{Illuminate\Support\Facades\Route::current()->uri == 'categories/create' || Illuminate\Support\Facades\Route::current()->uri == 'categories' ? 'show':'' }}" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Categories</h6>
                <a class="collapse-item {{Illuminate\Support\Facades\Route::current()->uri == 'categories/create' ? 'active':'' }}" href="{{route('categories.create')}}">Add New Category</a>
                <a class="collapse-item {{Illuminate\Support\Facades\Route::current()->uri == 'categories' ? 'active':'' }}" href="{{route('categories.index')}}">Show Categories</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{Illuminate\Support\Facades\Route::current()->uri == 'products/create' || Illuminate\Support\Facades\Route::current()->uri == 'products' ? 'active':'' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts"
           aria-expanded="true" aria-controls="collapseProducts">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Products</span>
        </a>
        <div id="collapseProducts" class="collapse {{Illuminate\Support\Facades\Route::current()->uri == 'products/create' || Illuminate\Support\Facades\Route::current()->uri == 'products' ? 'show':'' }}" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Products</h6>
                <a class="collapse-item {{Illuminate\Support\Facades\Route::current()->uri == 'products/create' ? 'active':'' }}" href="{{route('products.create')}}">Add New Product</a>
                <a class="collapse-item {{Illuminate\Support\Facades\Route::current()->uri == 'products' ? 'active':'' }}" href="{{route('products.index')}}">Show Products</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Orders</div>
    <li class="nav-item {{Illuminate\Support\Facades\Route::current()->uri == 'orders' ? 'active':'' }}">
        <a class="nav-link" href="{{route('orders.index')}}">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>Show Orders</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">User</div>
    <li class="nav-item {{Illuminate\Support\Facades\Route::current()->uri == 'users/create' || Illuminate\Support\Facades\Route::current()->uri == 'users' ? 'active':'' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
           aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseUsers" class="collapse {{Illuminate\Support\Facades\Route::current()->uri == 'users/create' || Illuminate\Support\Facades\Route::current()->uri == 'users' ? 'show':'' }}" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Users</h6>
                <a class="collapse-item {{Illuminate\Support\Facades\Route::current()->uri == 'users/create' ? 'active':'' }}" href="{{route('users.create')}}">Add New User</a>
                <a class="collapse-item {{Illuminate\Support\Facades\Route::current()->uri == 'users' ? 'active':'' }}" href="{{route('users.index')}}">Show Users</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Setting</div>
    <li class="nav-item {{Illuminate\Support\Facades\Route::current()->uri == 'settings' ? 'active':'' }}">
        <a class="nav-link" href="{{route('settings.index')}}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting</span>
        </a>
    </li>

</ul>
