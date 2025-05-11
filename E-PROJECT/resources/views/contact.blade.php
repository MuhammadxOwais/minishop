@extends('header-footer.header_footer')
@section('space-between')
    <div class="hero-wrap hero-bread" style="background-image: url('images/image_2.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-0 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form class="bg-white p-5 contact-form" method="POST" action="{{URL::TO('contact')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="USER_NAME">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" name="USER_EMAIL">
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="7" class="form-control" name="USER_MESSAGE" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary py-3 px-5">Send Message</button>
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.8793504453283!2d-73.99903742546658!3d40.742680235739186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bb665a5b95%3A0x37d23ed9e6c9479e!2s198%20W%2021st%20St%20%23721%2C%20New%20York%2C%20NY%2010011%2C%20USA!5e0!3m2!1sen!2s!4v1736654545773!5m2!1sen!2s"
                        width="620" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
