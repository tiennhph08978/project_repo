@extends('frontend::layouts.master')

@section('title', 'Home')

@section('content')
    <div class="content ">
    <section class="container ">
        <div class="table-wrap table-responsive">
            <table class="table ">
                <thead>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Product</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </thead>
                <tbody>
                    <tr class="align-middle alert border-bottom" role="alert">
                        <td>
                            <div class="btn" data-bs-dismiss="alert">
                                <span class="fas fa-times"></span>
                            </div>
                        </td>
                        <td class="text-center">
                            <img class="pic" src="{{ asset('asset_fe/img/4.png') }}" alt="">
                        </td>
                        <td>
                            <div>
                                <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                                <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                            </div>
                        </td>
                        <td>
                            <div class="fw-600" class="unit">$44.99</div>
                        </td>
                        <td class="d-">
                            <input class="input" type="number" placeholder="2" onchange="upCart()">
                        <td>
                            <span class="price">$100.98</span>
                        </td>
                    </tr>
                    <tr class="align-middle alert border-bottom" role="alert">
                        <td>
                            <div class="btn" data-bs-dismiss="alert">
                                <span class="fas fa-times"></span>
                            </div>
                        </td>
                        <td class="text-center">
                            <img class="pic" src="{{ asset('asset_fe/img/4.png') }}" alt="">
                        </td>
                        <td>
                            <div>
                                <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                                <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                            </div>
                        </td>
                        <td>
                            <div class="fw-600" class="unit">$54.99</div>
                        </td>
                        <td class="d-">
                            <input class="input" type="text" placeholder="2" onchange="upCart()">
                        </td>
                        <td>
                            <span class="price">$100.98</span>
                        </td>
                    </tr>
                    <tr class="align-middle alert border-bottom" role="alert">
                        <td>
                            <div class="btn" data-bs-dismiss="alert">
                                <span class="fas fa-times"></span>
                            </div>
                        </td>
                        <td class="text-center">
                            <img class="pic" src="{{ asset('asset_fe/img/4.png') }}" alt="">
                        </td>
                        <td>
                            <div>
                                <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                                <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                            </div>
                        </td>
                        <td>
                            <div class="fw-600" class="unit">$50.99</div>
                        </td>
                        <td class="d-">
                            <input class="input" type="text" placeholder="2" onchange="upCart()">
                        </td>
                        <td>
                            <span class="price">$100.98</span>
                        </td>
                    </tr>
                    <tr class="align-middle alert border-bottom" role="alert">
                        <td>
                            <div class="btn" data-bs-dismiss="alert">
                                <span class="fas fa-times"></span>
                            </div>
                        </td>
                        <td class="text-center">
                            <img class="pic" src="{{ asset('asset_fe/img/4.png') }}" alt="">
                        </td>
                        <td>
                            <div>
                                <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                                <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                            </div>
                        </td>
                        <td>
                            <div class="fw-600"><span class="unit">74.99</span></div>
                        </td>
                        <td>
                            <input class="input" type="number" placeholder="2" onchange="upCart()">
                        </td>
                        <td>
                            $<span id="price">100.98</span>
                        </td>
                    </tr>
                    <tr class="align-middle alert border-bottom" role="alert">
                        <td></td>
                        <td class="text-center"></td>
                        <td></td>
                        <td colspan="2">Subtotal</td>
                        <td class="text-warning">
                            <span>$100.98</span>
                        </td>
                    </tr>
                    <tr class="align-middle alert border-bottom" role="alert">
                        <td></td>
                        <td class="text-center"></td>
                        <td></td>
                        <td colspan="2">Total</td>
                        <td class="text-warning">
                            <span>$100.98</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-11 col-md-4 col-sm-10 col-xs-10">
                        <div class="card py-3 py-md-3">
                            <div class="d-flex justify-content-between px-3 px-md-4">
                                <div>
                                    <h6 class="">10:00 - 11:00 AM</h6>
                                    <p class="grey"> Monday, August 19 </p>
                                </div>
                                <div class="align-self-baseline">
                                    <img src="https://i.imgur.com/FgxgJ0K.jpg" height="55sspx" width="55px" alt="" class="rounded-circle">
                                </div>
                            </div>
                            <hr class="my-2">
                            <div class="d-flex justify-content-between px-3 px-md-4 div2">
                                <div class=""><h6 class="">Lindsey Johnson</h6>
                                    <div class="d-flex"><p class="grey mt-1">WOMEN'S CUT</p>
                                        <span class="border ml-2 p-1" id="sp1">1 hr</span>
                                    </div>
                                </div>
                                <div class="align-self-center purple"> $80.00</div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-success d-flex purple font-weight-bold">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
