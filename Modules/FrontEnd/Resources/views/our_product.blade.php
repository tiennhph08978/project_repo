@extends('frontend::layouts.master')

@section('title', 'Our Product')

@section('content')
    <div class="content">
        <section class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            Hamlet<i class="fa-solid fa-chevron-right float-right"></i>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Mody Dick<i
                                class="fa-solid fa-chevron-right float-right"></i></a>
                        <a href="#" class="list-group-item list-group-item-action">The Color Purple<i
                                class="fa-solid fa-chevron-right float-right"></i></a>
                        <a href="#" class="list-group-item list-group-item-action">Midnight's Children<i
                                class="fa-solid fa-chevron-right float-right"></i></a>
                        <a href="#" class="list-group-item list-group-item-action">Midnight's Children<i
                                class="fa-solid fa-chevron-right float-right"></i></a>
                        <a href="#" class="list-group-item list-group-item-action">Midnight's Children<i
                                class="fa-solid fa-chevron-right float-right"></i></a>
                        <a href="#" class="list-group-item list-group-item-action">Midnight's Children<i
                                class="fa-solid fa-chevron-right float-right"></i></a>
                        <a href="#" class="list-group-item list-group-item-action">Midnight's Children<i
                                class="fa-solid fa-chevron-right float-right"></i></a>
                        <a href="#" class="list-group-item list-group-item-action">Midnight's Children<i
                                class="fa-solid fa-chevron-right float-right"></i></a>
                        <a href="#" class="list-group-item list-group-item-action">Midnight's Children<i
                                class="fa-solid fa-chevron-right float-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8 col-sm-6">
                    <div class="row">
                        <div class="col-xl-5 col-md-12 col-12">
                            <div class="detail-img justify-content-center">
                                <img class="img-fluid" src="{{ asset('asset_fe/img/2.png') }}" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-12 col-12">
                            <h3 class="title-detail-product">iNB106 – Eco Friendly NoteBook</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>
                            <p class="price-product">$10</p>
                            <button class="btn btn-danger btn-enquiry">Enquiry Now</button>
                            <div class="mt-2">
                                <button class="btn-sm btn-primary"><i class="fa-brands fa-facebook-f icon-m pr-1"></i></i>Facebook
                                </button>
                                <button class="btn-sm btn-info"><i class="fa-brands fa-twitter pr-1"></i>Twitter</button>
                                <button class="btn-sm btn-info"><i class="fa-brands fa-google-plus-g icon-m pr-1"></i>Google+</button>
                                <button class="btn-sm btn-danger"><i class="fa-brands fa-pinterest-p pr-1"></i>Pinterest
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="py-4">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active title-detail-product" id="nav-home-tab" data-toggle="tab"
                                   href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <p class="description">
                                    Mauris nibh nulla, iaculis vel commodo nec, fermentum ut risus. Duis porttitor accumsan
                                    felis,
                                    id porta enim faucibus lacinia. Aenean sed augue et sem blandit condimentum. Class
                                    aptent taciti
                                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin massa
                                    nibh, ornare
                                    a condimentum eu, malesuada sit amet est. Praesent ac ligula at nisl feugiat dignissim.
                                    Nulla id porta dolor.
                                    Morbi pretium mattis nulla, nec iaculis nibh pretium ut. Ut et quam enim. Morbi
                                    tincidunt turpis at elit tristique feugiat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-center font-weight-bold mb-3 text-uppercase">Related products</h2>
                    <div class="row mt-3">
                        <div class="col-xl-3 col-md-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-img justify-content-center">
                                    <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                                </div>
                                <div class="card-body text-center">
                                    <p class="t-price">iMP4102 – Memo Desk Set</p>
                                    <p class="text-warning font-weight-bold">$10</p>
                                    <a href="#" class="btn c-btn-bg border-radius">Add to Enquiry</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-img justify-content-center">
                                    <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/5.png') }}" alt="Card image cap">
                                </div>
                                <div class="card-body text-center">
                                    <p class="t-price">iMP4101 – MemoPad</p>
                                    <p class="text-warning font-weight-bold">$10</p>
                                    <a href="#" class="btn c-btn-bg border-radius">Add to Enquiry</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-img justify-content-center">
                                    <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/6.png') }}" alt="Card image cap">
                                </div>
                                <div class="card-body text-center">
                                    <p class="t-price">iDW4701ST – AntiSlip Suction</p>
                                    <p class="text-warning font-weight-bold">$10</p>
                                    <a href="#" class="btn c-btn-bg border-radius">Add to Enquiry</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-img justify-content-center">
                                    <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/8.png') }}" alt="Card image cap">
                                </div>
                                <div class="card-body text-center">
                                    <p class="t-price">iDW5001B-Rectangle MEMO</p>
                                    <p class="text-warning font-weight-bold">$10</p>
                                    <a href="#" class="btn c-btn-bg border-radius">Add to Enquiry</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-img justify-content-center">
                                    <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/9.png') }}" alt="Card image cap">
                                </div>
                                <div class="card-body text-center">
                                    <p class="t-price">iMP4102 – Memo Desk Set</p>
                                    <p class="text-warning font-weight-bold">$10</p>
                                    <a href="#" class="btn c-btn-bg border-radius">Add to Enquiry</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-img justify-content-center">
                                    <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/7.png') }}" alt="Card image cap">
                                </div>
                                <div class="card-body text-center">
                                    <p class="t-price">iMP4101 – MemoPad</p>
                                    <p class="text-warning font-weight-bold">$10</p>
                                    <a href="#" class="btn c-btn-bg border-radius">Add to Enquiry</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-img justify-content-center">
                                    <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/2.png') }}" alt="Card image cap">
                                </div>
                                <div class="card-body text-center">
                                    <p class="t-price">iDW4701ST – AntiSlip Suction</p>
                                    <p class="text-warning font-weight-bold">$10</p>
                                    <a href="#" class="btn c-btn-bg border-radius">Add to Enquiry</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-img justify-content-center">
                                    <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/3.png') }}" alt="Card image cap">
                                </div>
                                <div class="card-body text-center">
                                    <p class="t-price">iDW5001B-Rectangle MEMO</p>
                                    <p class="text-warning font-weight-bold">$10</p>
                                    <a href="#" class="btn c-btn-bg border-radius">Add to Enquiry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
