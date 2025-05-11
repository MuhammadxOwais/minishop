@extends('header-footer.header_footer')
@section('space-between')
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <img class="one-third order-md-last img-fluid" src="images/bg_1.png" alt="">
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">#New Arrival</span>
                                <div class="horizontal">
                                    <h1 class="mb-4 mt-3">Shoes Collection 2019</h1>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies it with
                                        the necessary regelialia. It is a paradisematic country.</p>

                                    <p><a href="#" class="btn-custom">Discover Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-flex no-gutters slider-text align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <img class="one-third order-md-last img-fluid" src="images/bg_2.png" alt="">
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">#New Arrival</span>
                                <div class="horizontal">
                                    <h1 class="mb-4 mt-3">New Shoes Winter Collection</h1>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies it with
                                        the necessary regelialia. It is a paradisematic country.</p>

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
                    <h2 class="mb-4">New Shoes Arrival</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
    @foreach ($minidata as $u)
        <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
            <div class="product">
                <a href="#" class="img-prod">
                    <img class="img-fluid" src="{{ $u->product_image }}" style="height: 320px; width: 100%;" alt="Colorlib Template">
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3">
                    <div class="d-flex">
                        <div class="cat">
                            <span>Lifestyle</span>
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
                        <a href="#" class="add-to-cart text-center py-2 mr-1" data-product-id="{{ $u->id }}" 
                        data-product-name="{{ $u->product_name }}" data-product-image="{{ $u->product_image }}" data-product-price="{{ $u->product_price }}">
                            <span>Add to cart <i class="ion-ios-add ml-1"></i></span>
                        </a>
                        <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Sidebar -->
<div id="cart-sidebar" class="cart-sidebar" style="display: none;">
    <h2>Shopping Cart</h2>
    <ul id="cart-items">
        <!-- Cart items will be dynamically added here -->
    </ul>
    <button id="close-cart">Close</button>
</div>

<!-- Add this CSS to your styles -->
<style>
    .cart-sidebar {
        position: fixed;
        right: 0;
        top: 0;
        width: 300px;
        height: 100%;
        background: #fff;
        box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
        padding: 20px;
        z-index: 1000;
    }
</style>

<!-- Add this JavaScript to your scripts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cartSidebar = document.getElementById('cart-sidebar');
        const cartItems = document.getElementById('cart-items');

        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                const productId = this.getAttribute('data-product-id');
                const productName = this.getAttribute('data-product-name');
                const productPrice = this.getAttribute('data-product-price');
                const productImage = this.getAttribute('data-product-image');

                // Add product to the cart (you can also use AJAX to send this to the server)
                const listItem = document.createElement('li');

                // Create an image element for the product
                const imageElement = document.createElement('img');
                imageElement.src = productImage;  // Set the image source
                imageElement.alt = productName;   // Set the alt text for the image

                // Set width and height of the image
                imageElement.style.width = '220px';   // Set the width to 50px (you can change this)
                imageElement.style.height = '220px';  // Set the height to 50px (you can change this)

                // Add image and text to the list item
                listItem.appendChild(imageElement);
                listItem.appendChild(document.createTextNode(`${productName} - ${productPrice}`));

                cartItems.appendChild(listItem);

                // Show the sidebar
                cartSidebar.style.display = 'block';

                // AJAX request to add the product to the cart
                fetch('/cart/add', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        product_name: productName,
                        product_price: productPrice,
                        product_image: productImage
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Product added to cart');
                    }
                });
            });
        });

        document.getElementById('close-cart').addEventListener('click', function() {
            cartSidebar.style.display = 'none';
        });
    });
</script>


        </div>
    </section>



    <section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="choose-wrap divider-one img p-5 d-flex align-items-end"
                        style="background-image: url(images/choose-1.jpg);">

                        <div class="text text-center text-white px-2">
                            <span class="subheading">Men's Shoes</span>
                            <h2>Men's Collection</h2>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                                ocean.</p>
                            <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row no-gutters choose-wrap divider-two align-items-stretch">
                        <div class="col-md-12">
                            <div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end"
                                style="background-image: url(images/choose-2.jpg);">
                                <div class="col-md-7 d-flex align-items-center">
                                    <div class="text text-white px-5">
                                        <span class="subheading">Women's Shoes</span>
                                        <h2>Women's Collection</h2>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                            large language ocean.</p>
                                        <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div
                                        class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
                                        <div class="text text-center px-5">
                                            <span class="subheading">Summer Sale</span>
                                            <h2>Extra 50% Off</h2>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                                large language ocean.</p>
                                            <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="choose-wrap wrap img align-self-stretch d-flex align-items-center"
                                        style="background-image: url(images/choose-3.jpg);">
                                        <div class="text text-center text-white px-5">
                                            <span class="subheading">Shoes</span>
                                            <h2>Best Sellers</h2>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                                large language ocean.</p>
                                            <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-deal bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/prod-1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <div class="heading-section heading-section-white">
                        <span class="subheading">Deal of the month</span>
                        <h2 class="mb-3">Deal of the month</h2>
                    </div>
                    <div id="timer" class="d-flex mb-4">
                        <div class="time" id="days"></div>
                        <div class="time pl-4" id="hours"></div>
                        <div class="time pl-4" id="minutes"></div>
                        <div class="time pl-4" id="seconds"></div>
                    </div>
                    <div class="text-deal">
                        <h2><a href="#">Nike Free RN 2019 iD</a></h2>
                        <p class="price"><span class="mr-2 price-dc">$120.00</span><span
                                class="price-sale">$80.00</span></p>
                        <ul class="thumb-deal d-flex mt-4">
                            <li class="img" style="background-image: url(images/product-6.png);"></li>
                            <li class="img" style="background-image: url(images/product-2.png);"></li>
                            <li class="img" style="background-image: url(images/product-4.png);"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="services-flow">
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-bag"></span>
                            </div>
                            <div class="text">
                                <h3>Free Shipping</h3>
                                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-heart-box"></span>
                            </div>
                            <div class="text">
                                <h3>Valuable Gifts</h3>
                                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-payment-security"></span>
                            </div>
                            <div class="text">
                                <h3>All Day Support</h3>
                                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-customer-service"></span>
                            </div>
                            <div class="text">
                                <h3>All Day Support</h3>
                                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="heading-section ftco-animate mb-5">
                        <h2 class="mb-4">Our satisfied customer says</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts. Separated they live in</p>
                    </div>
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
