@extends('customer.layout.app')

@section('title', 'Exelpack - About Us')

@section('content')

<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5 p-4" style="background-image: url(customer/page-header/background-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="fs-5 mb-0 pb-0">About <strong>Us</strong></h1>
                    {{-- <p class="custom-font-secondary custom-font-size-1 mb-0 pb-0 text-white">We are Exelpack Corporation</p> --}}
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section custom-section-shape-background bg-white border-0 m-0 pt-4">
        <div class="container position-relative z-index-3 my-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                    <img src="{{ asset('customer/web_img/buildings/building_1.png') }}" class="img-fluid box-shadow-3">
                </div>
                <div class="col-lg-6">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">EXELPACK CORPORATION</h2>
                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Company Overview</h3>
                    <p class="mb-5">
                        Exelpack Corporation is a Filipino-established packaging company that excels in fabricating and converting foams and corrugated boxes.
                        Founded in September 2005 by a visionary Filipino entrepreneur, our unwavering commitment to excellence and customer satisfaction has been the cornerstone of our success.
                        <br><br>
                        We are also proud to be ISO 9001:2015 certified. This certification is a testament to our unwavering commitment to quality, continuous improvement, and adherence to international standards.
                        <br><br>
                        Whether you require foam fabrication, box conversion, or any other packaging solution, Exelpack Corporation is here to meet your needs, combining our expertise.
                    </p>

                    <div class="row align-items-center pb-2 mb-4 mb-lg-1 mb-xl-4">
                        <div class="col-5">
                            <div class="d-flex">
                                <img width="63" height="63" src="{{ asset('customer/icons/label.svg') }}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}" class="d-lg-none d-xl-block" style="opacity: 1; width: 63px;">
                                <span class="text-3 font-weight-bold text-color-dark pt-2 ms-2">
                                    <strong class="d-block font-weight-bold text-9 mb-2">240+</strong>
                                    Satisfied Clients
                                </span>
                            </div>
                        </div>
                        <div class="col-7">
                            <blockquote class="custom-blockquote-style-1 m-0 pt-1 pb-0">
                                <p class="mb-0">
                                    <div class="row g-0">
                                        <div class="col-12 px-4">
                                            <img class="img-fluid" src="{{ asset('customer/logo/certification.png') }}" alt="">
                                        </div>
                                    </div>

                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section section class="section custom-section-shape-background custom-section-shape-background-reverse border-0 m-0">
        <div class="container position-relative z-index-3 my-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">OUR VALUES</h2>
                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Our Mission</h3>
                    <p class="mb-3">
                        At Exelpack Corporation, our mission is to achieve complete customer satisfaction through continuous improvement efforts, driven by collaboration with our employees, suppliers, and shareholders.
                        We are dedicated to being a leading packaging company, offering innovative and high-quality solutions to meet the diverse needs of our valued clients.
                    </p>

                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Our Vision</h3>
                    <p class="mb-3">
                        Our vision is to be among the leading companies in the country by consistently achieving global quality standards. We strive to be a trusted name in the packaging industry, known for delivering remarkable solutions that consistently meet and exceed customer needs and expectations.
                        Through continuous improvement and unwavering dedication, we aim to build a reputation for excellence that drives our growth and success.
                    </p>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 ps-lg-5 mb-4 mb-lg-0">
                    <img src="{{ asset('customer/web_img/buildings/building_2.png') }}" class="img-fluid box-shadow-3">
                </div>
            </div>
        </div>
    </section>
    <section section class="section custom-section-shape-background bg-white custom-section-shape-background-reverse border-0 m-0">
        <div class="container position-relative z-index-3 my-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 order-2 order-lg-2">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">OUR OBJECTIVES</h2>
                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Company Policy</h3>
                    <p class="mb-3">
                        At Exelpack Corporation, we are committed to delivering high-quality, professional, and efficient services to meet and exceed the requirements of our valued clients.
                        Our focus on quality and customer satisfaction is central to our success and drives our long-term sustainability and profitability as an organization.
                        To achieve our commitment, we have established a robust Quality Management System (QMS) aligned with the ISO 9001:2015 Standards.
                        We firmly believe that the pursuit of excellence, consistently delivering exceptional quality, understanding our customers’ needs, and fostering a culture of continual
                        improvement is key to maintaining the most trusted and preferred packaging partner for our clients.
                    </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-1 ps-lg-5 mb-4 mb-lg-0">
                    <img src="{{ asset('customer/web_img/buildings/building_3.png') }}" class="img-fluid box-shadow-3">
                </div>
            </div>
        </div>
    </section>

    <section section class="section section-footer mb-0  pt-5 pb-1">
        <div class="container-fluid">
            <div class="row text-center pt-0 mt-0 pb-3">
                <div class="col">
                    <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2">
                        WHO ARE WITH US
                    </h2>
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                        <span>Our</span>
                        <span class="word-rotator-words" style="width: 118.609px;">
                            <b class="is-hidden">Valued</b>
                            <b class="is-visible">Amazing</b>
                        </span>
                        <span>Clients</span>
                    </h2>
                    <h4 class="text-muted lead tall text-4">Client Satisfaction Based On Our Survey.</h4>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col">

                    <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-8.png') }}" alt="" style="max-width: 90px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-9.png') }}" alt="" style="max-width: 140px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-10.png') }}" alt="" style="max-width: 140px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-11.png') }}" alt="" style="max-width: 140px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-12.png') }}" alt="" style="max-width: 100px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-13.png') }}" alt="" style="max-width: 100px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-14.png') }}" alt="" style="max-width: 140px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-15.png') }}" alt="" style="max-width: 110px;" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="section section-footer border-1 bg-white pt-0 mt-0">
        <div class="container pt-4 pb-5">
            <div class="row py-5">
                <div class="col-lg-6">
                    <h4 class="text-primary text-3 font-weight-bold mb-2">FREQUENTLY ASKED QUESTIONS</h4>
                    <h3 class="mb-3 font-weight-semibold">Learn More About Us</h3>
                    <div class="custom-divider divider divider-primary divider-small my-3 ">
                        <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                    </div>
                    <p class="mb-4 pb-2">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>

                    <p class="mb-4 pb-2">Eo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula.</p>

                    <div class="hstack gap-4 pt-3">
                        <div>
                            <a href="#" class="btn btn-modern btn-primary font-weight-bold border-0 py-3 px-5 btn-arrow-effect-1 ws-nowrap">CONTACT US <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                        <div class="vr"></div>
                        <div>
                            <a href="tel:0123456789" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold ms-1">
                                <i class="icon icon-phone text-color-primary text-4-5 me-2"></i>
                                800-123-4567
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordion100">
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingOne">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold border-radius text-3-5 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100One" aria-expanded="false" aria-controls="collapse100One">
                                        1 - Tristique sit amet condim vel?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100One" class="collapse" aria-labelledby="collapse100HeadingOne" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingTwo">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold border-radius text-3-5 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Two" aria-expanded="false" aria-controls="collapse100Two">
                                        2 - Cras a elit sit amet leo accumsan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Two" class="collapse" aria-labelledby="collapse100HeadingTwo" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingThree">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold border-radius text-3-5 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Three" aria-expanded="false" aria-controls="collapse100Three">
                                        3 - Hel officitur felis ultricis nan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Three" class="collapse" aria-labelledby="collapse100HeadingThree" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingFour">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold border-radius text-3-5 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Four" aria-expanded="false" aria-controls="collapse100Four">
                                        4 - Wuspaisse hendreirit vehicula leo?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Four" class="collapse" aria-labelledby="collapse100HeadingFour" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingFive">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold border-radius text-3-5 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Five" aria-expanded="false" aria-controls="collapse100Five">
                                        5 - Lintegers aliquet ullamcorper dollor, quis sollic tudin?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
