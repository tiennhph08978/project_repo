<header id="head">
    <div class="header-top">
        <div class="container py-2 d-flex d-flex justify-content-between">
            <div>
                <a href="{{ route('login') }}" class="text-secondary text-decoration-none">Login</a> |
                <a href="{{ route('register') }}" class="text-secondary text-decoration-none">Register</a>
            </div>
            <div>
                <a href="{{ route('enquiry') }}" class="text-secondary text-decoration-none"><i class="fa-solid fa-heart"></i> Enquiry (3)</a>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-xl-4 col-md-3 col-sm-4 col-6">
                <img src="{{ asset('asset_fe/img/img.png') }}" alt="Logo">
            </div>
            <div class="col-xl-3 h-ship col-md-3 col-sm-4 my-4 d-flex">
                <div class="my-3">
                    <i class=" fa-solid fa-truck text-danger"></i>
                </div>
                <div class="ml-2">
                    <strong>Free shipping</strong>
                    <p>Free shipping on all order</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-6 col-4 my-4 d-flex">
                <div class="my-3">
                    <i class="fa-solid fa-rocket text-danger"></i>
                </div>
                <div class="ml-2">
                    <strong>Support 24/7</strong>
                    <p>We support online 24 hours a day</p>
                </div>
            </div>
            <div class="col-xl-2 h-phone col-md-3 col-sm-4 my-4 d-flex">
                <div class="my-3">
                    <i class="fa-solid fa-phone-volume text-danger"></i>
                </div>
                <div class="ml-2">
                    <strong>HOTLINE</strong>
                    <p>+65 6876 0079</p>
                </div>
            </div>
        </div>
    </div>
</header>
