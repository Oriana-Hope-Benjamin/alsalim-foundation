<nav class="topbar d-flex justify-content-between align-items-center px-4 py-3">
    <div class="d-flex align-items-center w-50">
        <button id="sidebarToggle" class="btn btn-light d-md-none me-3 border-0">
            <i class="fas fa-bars"></i>
        </button>

        <div class="search-wrapper w-100 d-none d-md-block">
            <i class="fas fa-search"></i>
            <input type="text" class="form-control search-bar w-75" placeholder="Search causes, blogs, or donors...">
        </div>
    </div>

    <div class="d-flex align-items-center gap-3 gap-md-4">
        <!-- Updated Bell Icon with Dynamic Badge[cite: 1] -->
        <a href="{{ route('admin.contacts.index') }}" class="text-secondary d-none d-sm-block position-relative">
            <i class="far fa-bell fs-5"></i>
            @if($unreadCount > 0)
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
                {{ $unreadCount }}
            </span>
            @endif
        </a>

        <a href="#" class="text-secondary d-none d-sm-block"><i class="far fa-question-circle fs-5"></i></a>

        <!-- Profile Dropdown[cite: 1] -->
        <div class="dropdown border-start ps-3 ps-md-4">
            <a href="#" class="d-flex align-items-center text-decoration-none text-dark dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">

                <div class="rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center me-2 fw-bold shadow-sm" style="width: 36px; height: 36px; font-size: 1rem;">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>

                <div class="d-none d-sm-block me-1">
                    <h6 class="mb-0 fw-bold" style="font-size: 0.9rem;">{{ Auth::user()->name }}</h6>
                    <small class="text-muted d-block" style="font-size: 0.75rem;">Administrator</small>
                </div>
            </a>

            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-3" aria-labelledby="profileDropdown">
                <li>
                    <a class="dropdown-item py-2" href="{{ route('profile.edit') }}">
                        <i class="fas fa-user-circle me-2 text-muted"></i> Profile Settings
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item py-2 text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>