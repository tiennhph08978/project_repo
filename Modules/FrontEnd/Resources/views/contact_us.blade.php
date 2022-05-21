@extends('frontend::layouts.master')

@section('title', 'Contact Us')

@section('content')
    <div class="content">
        <section class="container">
            <div class="row">
                <div class="col-md-6 sm-12 xs-12" >
                    <h1><strong>Get in touch with us</strong></h1>
                    <div class="d-flex" style="color:grey">
                        <i class="fa-solid fa-location-pin  mr-4 mt-1"></i>
                        <p>96C Jalan Senang Singapore 418483.</p>
                    </div>
                    <div class="d-flex" style="color:grey">
                        <i class="fa-solid fa-phone  "></i>
                        <p>+65 6876 0079</p>
                    </div>
                    <div class="d-flex" style="color:grey">
                        <i class="fa-solid fa-envelope  mr-3" ></i>
                        <p>sales@impressgift.com.sg</p>
                    </div>

                    <form class="mt-2" method="post" action="{{ route('send.email') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6  sm-12 xs-12">
                                <div class="form-group ">
                                    <input type="text" class="form-control" required="" id="first_name" name="first_name" placeholder="First name:">
                                </div>
                            </div>
                            <div class="col-md-6  sm-12 xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="" id="last_name" name="last_name" placeholder="Last name:">
                                </div>
                            </div>
                        </div>
                        <!--end of /.row-->
                        <div class="row">
                            <div class="col-md-6 sm-12 xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" required="" id="" placeholder="Email:">
                                </div>
                            </div>
                            <div class="col-md-6 sm-12 xs-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="phone" required="" id="" placeholder="Phone:">
                                </div>
                            </div>
                        </div>
                        <!--end of /.row-->

                        <div class="form-group">
                            <textarea class="form-control" name="content" required="" rows="7" placeholder="Write Message"></textarea>
                        </div>
                        <button style="width: 100%"  type="submit" class="btn btn-danger"><div  class="font-weight-bold text-uppercase">Submit Request</div></button>
                    </form>
                </div>

                <div class="col-md-6 sm-12 xs-12">
                    <h1> &nbsp;</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8845193265147!2d105.76967491489779!3d21.03730618599379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b9f997842d%3A0x28c39ab072e6d1fb!2zMSDEkC4gTMOqIMSQ4bupYyBUaOG7jSwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1652342994964!5m2!1svi!2s"

                            width="100%"
                            height="70%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        AND
                    </iframe>
                </div>
            </div>

        </section>
    </div>
@endsection
