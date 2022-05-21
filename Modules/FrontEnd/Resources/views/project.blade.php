@extends('frontend::layouts.master')

@section('title', 'Projects')

@section('content')
    <div class="content">
        <section class="container">
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-img-project justify-content-center">
                                <img class="card-img-top img-fluid" src="/storage/{{ $project->image }}"
                                     alt="Card image cap">
                                <div class="gift-img  text-center">
                                    <i class="fa-solid fa-gift text-danger m-1"></i>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <p class="t-project">{{ $project->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img-project justify-content-center">
                            <img class="card-img-top img-fluid" src="{{ asset('asset_fe/img/4.png') }}" alt="Card image cap">
                            <div class="gift-img  text-center">
                                <i class="fa-solid fa-gift text-danger m-1"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <p class="t-project">iMP4102 – Memo Desk Set</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
