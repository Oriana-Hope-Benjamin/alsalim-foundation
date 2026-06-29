<div class="sidebar-wrapper">
    <div class="sidebar-heading p-4 d-flex align-items-center">
        <div class="logo-circle me-3">AF</div>
        <div>
            <h6 class="mb-0 fw-bold">Alsalim Foundation</h6>
            <small class="text-white-50">Admin Portal</small>
        </div>
    </div>

    <nav class="sidebar-nav flex-grow-1 mt-3">
        <a href="{{ route('admin.dashboard') }}" class="nav-link text-decoration-none {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fas fa-th-large"></i> Dashboard
        </a>
        <a href="{{ route('admin.causes.index') }}" class="nav-link text-decoration-none {{ request()->routeIs('admin.causes.*') ? 'active' : '' }}">
            <i class="fas fa-hand-holding-heart"></i> Causes
        </a>
        <a href="{{ route('admin.blogs.index') }}" class="nav-link text-decoration-none {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
            <i class="fas fa-rss"></i> Blogs
        </a>
        <a href="#" class="nav-link text-decoration-none">
            <i class="fas fa-cog"></i> Settings
        </a>
    </nav>

    <div class="p-4 border-top border-secondary mt-auto">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}" 
           onclick="event.preventDefault(); this.closest('form').submit();" 
           class="text-white-50 text-decoration-none hover-white d-block">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </a>
    </form>
</div>
</div>