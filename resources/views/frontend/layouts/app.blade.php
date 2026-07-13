<div class="top-bar d-none d-md-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="top-bar-left">
                    <div class="text">
                        <i class="fa fa-phone-alt"></i>
                        <p>+256782032641</p>
                    </div>
                    <div class="text">
                        <i class="fa fa-envelope"></i>
                        <p>alsalimwelfarefoundation@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-bar-right">
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="{{ url('/') }}" class="navbar-brand">Al-salim</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{ url('/causes') }}" class="nav-item nav-link {{ request()->is('causes') ? 'active' : '' }}">Causes</a>
                <a href="{{ url('/blog') }}" class="nav-item nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog</a>

                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Detail Page</a>
                        <a href="#" class="dropdown-item">What We Do</a>
                        <a href="#" class="dropdown-item">Meet The Team</a>
                        <a href="#" class="dropdown-item">Donate Now</a>
                        <a href="#" class="dropdown-item">Become A Volunteer</a>
                    </div>
                </div> -->
                <a href="{{ url('/contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>
    </div>
</div>