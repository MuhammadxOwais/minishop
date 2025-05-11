@extends('header-footer.header_footer')
@section('space-between')
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-flex no-gutters slider-text align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <img class="one-third order-md-last img-fluid"
                            src="Gallery/pexels-karolina-grabowska-4041392-removebg-preview.png" alt=""
                            style="width: 60%;">
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">#New Arrival</span>
                                <div class="horizontal">
                                    <h1 class="mb-4 mt-3">New COSMATIC & BEAUTY Collection</h1>
                                    <p class="mb-4">The art of living well, it’s personal. We believe true wellbeing feels
                                        different to everyone – and let’s be honest</p>
                                    <p><a href="#" class="btn-custom">Discover Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-bag"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Free Shipping</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Support Customer</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-payment-security"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Secure Payments</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4" style="font-weight: bold">COSMATIC PRODUCT</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($cosmdata as $u)
                    <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="{{ $u->product_image }}"
                                    style="height: 320px; width: 100%;" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3">
                                <div class="d-flex">
                                    <div class="cat">
                                        <span>MAC COSMATIC</span>
                                    </div>
                                    <div class="rating">
                                        <p class="text-right mb-0">
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <h3><a href="#">{{ $u->product_name }}</a></h3>
                                <div class="pricing">
                                    <p class="price"><span>{{ $u->product_price }}</span></p>
                                </div>
                                <p class="bottom-area d-flex px-3">
                                    <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                                class="ion-ios-add ml-1"></i></span></a>
                                    <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                                class="ion-ios-cart ml-1"></i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1>Exclusive Hot Deal Ends Soon!</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="row clock-wrap">
                                <div class="col clockinner1 clockinner">
                                    <h1 class="days">150</h1>
                                    <span class="smalltext">Days</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="hours">23</h1>
                                    <span class="smalltext">Hours</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="minutes">47</h1>
                                    <span class="smalltext">Mins</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="seconds">59</h1>
                                    <span class="smalltext">Secs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <div class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
                        <div class="text text-center px-5">
                            <span class="subheading">Winnter Sale</span>
                            <h2>Extra 20% Off</h2>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                large language ocean.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
