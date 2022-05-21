@extends('frontend::layouts.master')

@section('title', 'About Us')

@section('content')
    <div class="content">
        <section class="container">
            <div class="row">
                <div class="col-xl-6 text-about">
                    <p>Impress Gift specialise in corporate gift in Singapore. We pride ourselves in giving fast and reliable Quality services to all our customer.
                        We provide the Best Gifting to you. We manage import and export on gifts to Europe and Asia.
                        We have our very own sourcing Department in our factory which gives us the advantage to give you Direct Factory Pricing.
                    </p>
                    <div>
                        <h3 class="font-weight-bold my-4">Why Impress Gift</h3>
                        <p>
                            <span class="circle-v">v</span><span class="ml-2">Because we believed that</span></p>
                        <p>
                            <span class="circle-v">v</span><span class="ml-2">A GIFT that is handed out, will provide an impression to the customer.</span>
                        </p>
                        <p>
                            <span class="circle-v">v</span><span class="ml-2">A GIFT that is handed out, represent your company</span>
                        </p>
                        <p>
                            <span class="circle-v">v</span><span class="ml-2">A GIFT that is handed out, creates a first impression BONDing between</span>
                        </p>
                        <p>
                            <span class="circle-v">v</span><span class="ml-2">We believe in QUALITY Assurance</span>
                        </p>
                        <p>
                            <span class="circle-v">v</span><span class="ml-2">We believe in High Perceive Value and Practicality of Gifting</span>
                        </p>
                        <p>
                            <span class="circle-v">v</span><span class="ml-2">We believe in Advertising and Promotional branding with Gifting</span>
                        </p>
                        <p>
                            <span class="circle-v">v</span><span class="ml-2">LASTLY, Providing EXCELLENT CUSTOMER SERVICE is our PRACTISE.</span>
                        </p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <img src="{{ asset('asset_fe/img/about.jpg') }}" alt="" height="100%" width="100%">
                </div>
            </div>
        </section>
    </div>
@endsection
