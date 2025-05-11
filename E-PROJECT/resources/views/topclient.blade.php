@extends('header-footer.header_footer')
@section('space-between')
    <div class="hero-wrap hero-bread" style="background-image: url('images/image_2.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-0 bread">TOP CLIENT SALE PRODUCT</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4" style="font-weight: bold; margin-top: -50px;">TOP 10 CLIENTS</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>

                @foreach ($cosdata as $tc)
                    <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                        <div class="product text-center">
                            <a href="#" class="img-prod"><img src="{{ $tc->client_image }}"
                                    style="height: 320px; width: 100%;" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <h5 style="font-weight: bold; margin: 4px 0px; text-align: center;">{{ $tc->product_name }}</h5>
                            <div class="pricing mt-4">
                                <h6 class="name" style="color: black; font-weight: bolder;">{{ $tc->client_name }}</h6>
                                <blockquote>{{$tc->client_message}}</blockquote>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
