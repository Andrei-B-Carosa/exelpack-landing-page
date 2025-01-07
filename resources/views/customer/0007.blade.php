@extends('customer.layout.app')

@section('title', 'Exelpack - Contact Us')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5 p-4" style="background-image: url(customer/page-header/background-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="fs-5 mb-0 pb-0">Contact <strong>Us</strong></h1>
                    {{-- <p class="custom-font-secondary custom-font-size-1 mb-0 pb-0 text-white">Selection of Packaging Product</p> --}}

                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- START GET IN TOUCH --}}
<div class="container">

    <div class="row py-0">
        <div class="col-lg-7 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn"
            data-appear-animation-delay="650" style="animation-delay: 650ms;">

            <div class="offset-anchor" id="contact-sent"></div>


            <h2 class="font-weight-bold text-7 mt-2 mb-0">Contact Us</h2>
            <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

            <form id="contactFormAdvanced"
                action="https://www.okler.net/previews/porto/9.9.3/contact-us-advanced.php#contact-sent" method="POST"
                enctype="multipart/form-data" novalidate="novalidate">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label mb-1 text-2">Subject</label>
                        <input type="text" value="" class="form-control text-3 h-auto py-2" name="subject" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-2">Full Name</label>
                        <input type="text" value=""
                            class="form-control text-3 h-auto py-2" name="name" id="name" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-2">Email Address</label>
                        <input type="email" value="" data-msg-required="Please enter your email address."
                            data-msg-email="Please enter a valid email address." maxlength="100"
                            class="form-control text-3 h-auto py-2" name="email" id="email" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 mb-4">
                        <label class="form-label mb-1 text-2">Message</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6"
                            class="form-control text-3 h-auto py-2" name="message" id="message" required=""></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 mb-5">
                        <input type="submit" id="contactFormSubmit" value="Send Message"
                            class="btn btn-primary btn-modern pull-right" data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-5">

            <div class="overflow-hidden mb-1">
                <h4 class="text-primary mb-2 appear-animation animated maskUp appear-animation-visible"
                    data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">Get
                    in <strong>Touch</strong></h4>
            </div>
            <div class="overflow-hidden mb-0">
                <p class="lead text-4 mb-0 appear-animation animated maskUp appear-animation-visible"
                    data-appear-animation="maskUp" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    Don't hesitate to get in touch with us. We're available and eager to connect, providing the assistance you need.</p>
            </div>
            <div class="appear-animation animated fadeInUpShorter appear-animation-visible"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                style="animation-delay: 800ms;">
                <h4 class="text-primary pt-4">Our <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-3 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Address:</strong> Blk 2 Lot 2 Filinvest Technology Park, Ciudad de Calamba</li>
                    <li><i class="fas fa-phone top-6"></i> <strong>Phone:</strong> (049) 502-0295</li>
                    <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a
                            href="mailto:mail@example.com">lvibora@exelpackcorp.com</a></li>
                </ul>

                <div class="row lightbox mt-4 mb-0 pb-0"
                    data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <a class="img-thumbnail p-0 border-0 d-block"
                            href="{{ asset('customer/web_img/office/our-office-1.jpg') }}"
                            data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{ asset('customer/web_img/office/office-1.png') }}"
                                alt="Office">
                        </a>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <a class="img-thumbnail p-0 border-0 d-block"
                            href="{{ asset('customer/web_img/office/our-office-2.jpg') }}"
                            data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{ asset('customer/web_img/office/office-2.png') }}"
                                alt="Office">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="img-thumbnail p-0 border-0 d-block"
                            href="{{ asset('customer/web_img/office/our-office-3.jpg') }}"
                            data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{ asset('customer/web_img/office/office-3.png') }}"
                                alt="Office">
                        </a>
                    </div>
                </div>

                <h4 class="text-primary pt-5">Business <strong>Hours</strong></h4>
                <ul class="list list-icons list-dark mt-2">
                    <li><i class="far fa-clock top-6"></i> Monday - Friday - 8am to 5pm</li>
                    <li><i class="far fa-clock top-6"></i> Saturday - 7am to 5pm</li>
                    <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                </ul>
            </div>

        </div>

    </div>

</div>
{{-- END GET IN TOUCH --}}
@endsection
