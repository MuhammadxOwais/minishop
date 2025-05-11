@extends('header-footer.header_footer')
@section('space-between')
    <div class="hero-wrap hero-bread" style="background-image: url('images/image_2.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-0 bread">TOP SALE PRODUCT</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4" style="font-weight: bold">BEST SELLING PRODUCT</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($cosdata as $u)
                    <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="{{ $u->product_image }}"
                                    style="height: 320px; width: 100%;" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <h5 style="font-weight: bold; margin: 4px 0px; text-align: center;">{{$u->product_name}}</h5>
                            <div class="pricing">
                                <p class="price text-center">{{$u->product_price}}</p>
                                <p class="price text-center" style="text-transform:capitalize">{{$u->product_detail}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
