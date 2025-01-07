@extends('customer.layout.app')

@section('title', 'Exelpack - Services')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5 p-4" style="background-image: url(customer/page-header/background-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="fs-5 mb-0 pb-0">Our <strong>Services</strong></h1>
                    {{-- <p class="custom-font-secondary custom-font-size-1 mb-0 pb-0 text-white">Selection of Packaging Product</p> --}}

                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="#">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-1">
        <section class="section mb-0 pb-0 border-0 pt-3 bg-white">
            <div class="container border-0 pt-md-4 pt-xl-0 p-0">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
                        <div class="overflow-hidden">
                            <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2">OUR SERVICE</h2>
                            <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">Seventeen Years of Top Experience</h2>
                        </div>
                        <div class="custom-divider divider divider-primary divider-small my-3">
                            <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                        </div>
                        <p class="font-weight-light text-3-5 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450" style="animation-delay: 450ms;">
                            Exelpack is committed to offering fundamental products, including
                            Corrugated Boxes, Paper Pallets, fabricated cartons, and foam inserts.
                            Our company provides a diverse range of services, from Product
                            Development and Box Assembly to encompass Shipping/Loading
                            for our customers. Working closely with our dedicated workforce,
                            we are enthusiastic about fulfilling your requirements and nurturing
                            a mutually beneficial business relationship with you, as your valued
                            customer.

                        </p>
                    </div>
                </div>
                <div class="row pt-2 pb-5 row-gutter-sm">
                    <div class="col-md-6 col-lg-4 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" style="animation-delay: 900ms;">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <div class="card custom-card-style-1">
                                <div class="card-body text-center py-5">
                                    <div class="custom-card-style-1-image-wrapper bg-primary rounded-circle d-inline-block mb-3">
                                        <img src="img/demos/cleaning-services/services/services-small-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <h4 class="custom-card-style-1-title text-color-secondary font-weight-bold mb-2">Product Development</h4>
                                    <p class="custom-card-style-1-description">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. </p>
                                    {{-- <span class="custom-card-style-1-link font-weight-bold">VIEW MORE</span> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <div class="card custom-card-style-1">
                                <div class="card-body text-center py-5">
                                    <div class="custom-card-style-1-image-wrapper bg-primary rounded-circle d-inline-block mb-3">
                                        <img src="img/demos/cleaning-services/services/services-small-2.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <h4 class="custom-card-style-1-title text-color-secondary font-weight-bold mb-2">Box Assembly</h4>
                                    <p class="custom-card-style-1-description">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. </p>
                                    {{-- <span class="custom-card-style-1-link font-weight-bold">VIEW MORE</span> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300" style="animation-delay: 1300ms;">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <div class="card custom-card-style-1">
                                <div class="card-body text-center py-5">
                                    <div class="custom-card-style-1-image-wrapper bg-primary rounded-circle d-inline-block mb-3">
                                        <img src="img/demos/cleaning-services/services/services-small-3.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <h4 class="custom-card-style-1-title text-color-secondary font-weight-bold mb-2">Shipping & Loading</h4>
                                    <p class="custom-card-style-1-description">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. </p>
                                    {{-- <span class="custom-card-style-1-link font-weight-bold">VIEW MORE</span> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <div class="card custom-card-style-1">
                                <div class="card-body text-center py-5">
                                    <div class="custom-card-style-1-image-wrapper bg-primary rounded-circle d-inline-block mb-3">
                                        <img src="img/demos/cleaning-services/services/services-small-2.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <h4 class="custom-card-style-1-title text-color-secondary font-weight-bold mb-2">Post Construction</h4>
                                    <p class="custom-card-style-1-description">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. </p>
                                    {{-- <span class="custom-card-style-1-link font-weight-bold">VIEW MORE</span> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <div class="card custom-card-style-1">
                                <div class="card-body text-center py-5">
                                    <div class="custom-card-style-1-image-wrapper bg-primary rounded-circle d-inline-block mb-3">
                                        <img src="img/demos/cleaning-services/services/services-small-3.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <h4 class="custom-card-style-1-title text-color-secondary font-weight-bold mb-2">Office Cleaning</h4>
                                    <p class="custom-card-style-1-description">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. </p>
                                    {{-- <span class="custom-card-style-1-link font-weight-bold">VIEW MORE</span> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <div class="card custom-card-style-1">
                                <div class="card-body text-center py-5">
                                    <div class="custom-card-style-1-image-wrapper bg-primary rounded-circle d-inline-block mb-3">
                                        <img src="img/demos/cleaning-services/services/services-small-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <h4 class="custom-card-style-1-title text-color-secondary font-weight-bold mb-2">Building Services</h4>
                                    <p class="custom-card-style-1-description">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. </p>
                                    {{-- <span class="custom-card-style-1-link font-weight-bold">VIEW MORE</span> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="section section-footer border-1 pt-0 mt-0">
        <div class="container pt-4">
            <div class="row py-5">
                <div class="col-lg-6">
                    <h4 class="text-primary text-3 font-weight-bold mb-2">CONTACT US</h4>
                    <h3 class="mb-3 font-weight-semibold">Learn More About Our Services</h3>
                    <div class="custom-divider divider divider-primary divider-small my-3 ">
                        <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                    </div>
                    <p class="mb-4 pb-2">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>

                    <p class="mb-4 pb-2">Eo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula.</p>

                    <div class="hstack gap-4 pt-3">
                        <div>
                            <a href="tel:0123456789" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold ms-1">
                                <i class="icon icon-phone text-color-primary text-4-5 me-2"></i>
                                lvibora@exelpackcorp.com
                            </a>
                        </div>
                        <div class="vr"></div>
                        <div>
                            <a href="tel:0123456789" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold ms-1">
                                <i class="icon icon-phone text-color-primary text-4-5 me-2"></i>
                                (049) 502-0295
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">

                    <form class="contact-form" action="https://www.okler.net/previews/porto/9.9.3/php/contact-form.php" method="POST" novalidate="novalidate">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Full Name</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Email Address</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Message</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid gap-1">
                                <button type="button" class="btn btn-primary btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary btn-request-quotation">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
