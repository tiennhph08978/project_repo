<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container d-flex">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about_us') ? 'active' : '' }}" href="{{ route('about_us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('project') ? 'active' : '' }}" href="{{ route('project') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('our_product') ? 'active' : '' }}" href="{{ route('our_product') }}">Our Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact_us') ? 'active' : '' }}" href="{{ route('contact_us') }}">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="search-chill">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>
    </div>
</nav>
