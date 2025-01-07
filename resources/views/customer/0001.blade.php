@extends('customer.layout.app')

@section('title', 'Exelpack - Home')

@section('content')

    <div role="main" class="main">

        {{-- START SLIDER --}}
        <div class="slider-container rev_slider_wrapper" style="height: 670px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li data-transition="fade">
                        <img src="{{ asset('customer/web_img/slide-bg.jpg') }}"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="tp-caption tp-resizeme"
                            data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-type="image"
                            data-x="left"
                            data-y="center"
                            data-width="['auto']"
                            data-height="['auto']"
                            data-basealign="slide"><img src="{{ asset('customer/web_img/exelpack-slider.png') }}" alt=""></div>

                        <div class="tp-caption tp-resizeme rs-parallaxlevel-7"
                            data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-type="image"
                            data-x="-500"
                            data-y="-700"
                            data-width="['auto']"
                            data-height="['auto']"
                            data-basealign="slide"><img src="{{ ('customer/web_img/slide-parallax-porto-symbol.png')  }}" alt=""></div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-150','-150','-150','-240']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="700"
                            data-fontsize="['22','22','22','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">WELCOME TO</div>

                        <div class="tp-caption d-none d-md-block"
                            data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-hoffset="['80','80','80','135']"
                            data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="{{ asset('customer/web_img/slide-blue-line.png') }}" alt=""></div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['150','150','150','240']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                            data-x="center"
                            data-y="center"
                            data-start="700"
                            data-fontsize="['50','50','50','90']"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-lineheight="['55','55','55','95']">Exelpack Corporation</div>

                            <div class="tp-caption font-weight-light ws-normal text-center"
                            data-x="center"
                            data-y="center" data-voffset="['60','60','60','105']"
                            data-width="['530','530','530','1100']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-start="700"
                            style="color: #b5b5b5;">ISO certified for specialized design, fabrication of Polymer Foams, and Box Conversion.</div>

                    </li>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="{{ asset('customer/web_img/exelpack-slide-bg-2.png') }}"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-170','-170','-170','-350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="700"
                            data-fontsize="['16','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">WE PROTECT WHAT YOU CARE</div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['170','170','170','350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                            data-x="center"
                            data-y="center"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-start="700"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">PACKAGING SOLUTION</div>

                        <div class="tp-caption font-weight-light ws-normal text-center"
                            data-x="center"
                            data-y="center" data-voffset="['60','60','60','105']"
                            data-width="['530','530','530','1100']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-start="700"
                            style="color: #b5b5b5;">
                            We are devoted to customer satisfaction through on-time delivery,
                            quality products, competitive pricing, and eco-friendly packaging solutions.
                        </div>

                    </li>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="{{ asset('customer/web_img/slide-bg-6.jpg') }}"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-200','-200','-200','-520']"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="700"
                            data-fontsize="['16','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">PACKAGING FOR EXELLENCE, WE ARE</div>


                        <div class="tp-caption"
                            data-x="center" data-hoffset="['200','200','200','320']"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                            data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center"
                            data-fontsize="['125','125','125','200']"
                            data-lineheight="['150','150','150','260']">EXELPACK</div>

                        <div class="tp-caption font-weight-light text-color-light"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['85','85','85','140']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']">The best choice for your business</div>

                    </li>
                </ul>
            </div>
        </div>

        <div class="home-intro bg-primary py-4" id="home-intro">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p class="mb-2">
                            Offering innovative and high-quality packaging solutions
                            <span>Check out our services and products.</span>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="get-started text-start text-lg-end">
                            <a href="{{ route('products') }}" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">OUR PRODUCTS</a>
                            <div class="learn-more">or <a href="{{ route('about_us') }}">learn more.</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- END SLIDER --}}

        {{-- START ABOUT US --}}
        <div class="container">
            <div class="text-center">
                <div id="aboutus" class="row align-items-xl-center">
                    <div class="col-md-12 col-lg-6 mb-5 mb-lg-0">
                        <div class="row row-gutter-sm">
                            <div class="col-6">
                                <img src="{{ asset('customer/web_img/generic-1.jpg') }}" class="img-fluid box-shadow-5" alt="">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid box-shadow-5 mb-lg-4 mb-3" alt="">
                                <img src="{{ asset('customer/web_img/generic-3.jpg') }}" class="img-fluid box-shadow-5" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-4 ps-xl-5 text-center">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2">ABOUT US</h2>
                        <h3 class="text-8 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-0 mb-lg-1 mb-xl-1">We Protect What You Care</h3>
                        <div class="custom-divider divider divider-primary divider-small divider-small-center mb-4 mt-0 ">
                            <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible " data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                        </div>
                        <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 px-1 ">
                            Exelpack Corporation stands out with its expertise in custom designing and fabricating Polyethylene Foams, as well as its proficiency in corrugated box conversion.
                            Additionally, we boast manufacturing capabilities for Polyethylene Foams.
                            Holding the esteemed ISO 9001:2015 certification, our primary commitment remains to ensure the protection of your valuable products.
                        </p>
                        <div class="row align-items-center pb-0 mb-0 mb-lg-1 mb-xl-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" style="animation-delay: 750ms;">
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
                                            {{-- <div class="col-6">
                                                <img class="img-fluid" width="120" height="90" src="{{ asset('customer/logo/peza.jpg') }}" alt="">

                                            </div> --}}
                                        </div>
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                        {{-- <div class="row align-items-center pb-2 mb-4 mb-lg-1 mb-xl-4">
                            <div class="col-7">
                                <span class=" m-0 pt-1 pb-2">
                                    <a href="{{ route('about_us') }}" class="btn btn-modern btn-primary h4 font-weight-bold border-0 py-3 px-5 btn-arrow-effect-1 ws-nowrap mt-3 text-3"><span>ABOUT US</span> <i class="fas fa-arrow-right ms-2"></i></a>
                                </span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- END ABOUT US --}}

        {{-- START SLIDER CUSTOMER LOGO --}}
        <div class="container-fluid pt-5 mt-5">
            <div class="row">
                <div>
                    <div class="owl-carousel owl-theme carousel-center-active-item custom-carousel-vertical-center-items custom-dots-style-1 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 3}, '768': {'items': 3}, '992': {'items': 5}, '1200': {'items': 5}, '1600': {'items': 7}}, 'autoplay': false, 'autoplayTimeout': 3000, 'dots': true}">
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
        {{-- END SLIDER CUSTOMER LOGO --}}

        {{-- START OUR SERVICE --}}
        <section class="section mb-0 pb-0 pt-5 ">
            <div class="container border-1 pt-md-4 pt-xl-0 text-start">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 pb-sm-4 pb-lg-0 mb-5 mb-lg-0 px-4 px-lg-0">
                        <div class="overflow-hidden">
                            <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2">OUR SERVICE</h2>
                            <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">Seventeen Years of Top Experience</h2>
                        </div>
                        <div class="custom-divider divider divider-primary divider-small-start divider-small mb-4 mt-2">
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
                        <div class="d-flex align-items-start align-items-sm-center flex-column flex-sm-row">
                            <a href="{{ route('services') }}" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="950" style="animation-delay: 950ms;">OUR SERVICE</a>

                        </div>
                    </div>
                    <div class="col-10 col-md-9 col-lg-6 ps-lg-5 pe-5 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1450" data-plugin-options="{'accY': -200}" style="animation-delay: 1450ms;">
                        <div class="position-relative">
                            <div style="top: 0px; transition: transform 1000ms ease-out 0ms; transform: translate3d(0px, 1.65623%, 0px);">
                                <span class="thumb-info thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{ asset('customer/web_img/product-carousel/rsc_box.png') }}" class="img-fluid" alt="">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <div class="custom-icon-box-style-1 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250" data-plugin-options="{'accY': -200}" style="animation-delay: 250ms;">
                                <div class="custom-icon-style-1 mb-4">
                                    <img width="50" src="{{ asset('customer/icons/service-1.svg') }}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" class="svg-fill-color-primary" style="opacity: 1; width: 50px;">
                                </div>
                                <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-3 px-xl-1 my-2">Product Development</h3>
                                <p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <div class="custom-icon-box-style-1 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'accY': -200}" style="animation-delay: 500ms;">
                                <div class="custom-icon-style-1 mb-4">
                                    <img width="50" src=" {{ asset('customer/icons/service-1.svg') }}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" class="svg-fill-color-primary" style="opacity: 1; width: 50px;">
                                </div>
                                <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-xl-1 my-2 mx-4">Box &amp; Assembly</h3>
                                <p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 text-center px-lg-5">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <div class="custom-icon-box-style-1 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750" data-plugin-options="{'accY': -200}" style="animation-delay: 750ms;">
                                <div class="custom-icon-style-1 mb-4">
                                    <img width="50" src="{{ asset('customer/icons/service-1.svg') }}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" class="svg-fill-color-primary" style="opacity: 1; width: 50px;">
                                </div>
                                <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-4 px-xl-1 my-2">Shipping &amp; Loading</h3>
                                <p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- END OUR SERVICE --}}

        {{-- START PRODUCTS --}}
        <section class="section bg-white pt-0 mt-0 pb-0">
            <div class="container pt-5 px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-xl-10 text-center">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2">OUR PRODUCTS</h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1">A Selection Of Packaging Products</h3>
                        <p class="text-3-5 pb-3 mb-4">
                            Exelpack is dedicated to providing essential products, which include
                            Corrugated Boxes, Paper Pallets, fabricated cartons, and foam inserts.

                        </p>
                    </div>
                </div>
                <div class="row row-gutter-sm mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <article>
                            <div class="card border-0 border-radius-0 box-shadow-1">
                                <div class="card-body p-4 z-index-1">
                                    <a href="javascript:void(0)">
                                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper">
                                                <img class="card-img-top border-radius-0 mb-4 img-fluid" src="{{ asset('customer/web_img/products/rsc_box.png') }}" alt="Corrugated Cartons">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-semibold">
                                            <a class="text-color-dark text-color-hover-primary text-decoration-none" href="javascript:void(0)">
                                                Corrugated Cartons
                                            </a>
                                        </h4>
                                        <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lo...</p>
                                        <a href="javascript:void(0)" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                                            VIEW MORE
                                            <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <article>
                            <div class="card border-0 border-radius-0 box-shadow-1">
                                <div class="card-body p-4 z-index-1">
                                    <a href="javascript:void(0)">
                                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper">
                                                <img class="card-img-top border-radius-0 mb-4 img-fluid" src="{{ asset('customer/web_img/products/PE_Foams.png') }}" alt="Corrugated Cartons">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-semibold">
                                            <a class="text-color-dark text-color-hover-primary text-decoration-none" href="javascript:void(0)">
                                                EPE Foams
                                            </a>
                                        </h4>
                                        <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lo...</p>
                                        <a href="javascript:void(0)" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                                            VIEW MORE
                                            <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <article>
                            <div class="card border-0 border-radius-0 box-shadow-1">
                                <div class="card-body p-4 z-index-1">
                                    <a href="javascript:void(0)">
                                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper">
                                                <img class="card-img-top border-radius-0 mb-4 img-fluid" src="{{ asset('customer/web_img/products/corrugated_plastic.png') }}" alt="Corrugated Cartons">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-semibold">
                                            <a class="text-color-dark text-color-hover-primary text-decoration-none" href="javascript:void(0)">
                                                Corrugated Plastic
                                            </a>
                                        </h4>
                                        <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lo...</p>
                                        <a href="javascript:void(0)" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                                            VIEW MORE
                                            <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <article>
                            <div class="card border-0 border-radius-0 box-shadow-1">
                                <div class="card-body p-4 z-index-1">
                                    <a href="javascript:void(0)">
                                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper">
                                                <img class="card-img-top border-radius-0 mb-4 img-fluid" src="{{ asset('customer/web_img/products/colored_box.png') }}" alt="Corrugated Cartons">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-semibold">
                                            <a class="text-color-dark text-color-hover-primary text-decoration-none" href="javascript:void(0)">
                                            Colored Boxes
                                            </a>
                                        </h4>
                                        <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lo...</p>
                                        <a href="javascript:void(0)" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                                            VIEW MORE
                                            <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <article>
                            <div class="card border-0 border-radius-0 box-shadow-1">
                                <div class="card-body p-4 z-index-1">
                                    <a href="javascript:void(0)">
                                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper">
                                                <img class="card-img-top border-radius-0 mb-4 img-fluid" src="{{ asset('customer/web_img/products/paper_wood_pallet.png') }}" alt="Corrugated Cartons">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-semibold">
                                            <a class="text-color-dark text-color-hover-primary text-decoration-none" href="javascript:void(0)">
                                                Paper & Wood Pallet
                                            </a>
                                        </h4>
                                        <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lo...</p>
                                        <a href="javascript:void(0)" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                                            VIEW MORE
                                            <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article>
                            <div class="card border-0 border-radius-0 box-shadow-1">
                                <div class="card-body p-4 z-index-1">
                                    <a href="javascript:void(0)">
                                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper">
                                                <img class="card-img-top border-radius-0 mb-4 img-fluid" src="{{ asset('customer/web_img/products/pvc_insulator.png') }}" alt="Corrugated Cartons">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-semibold">
                                            <a class="text-color-dark text-color-hover-primary text-decoration-none" href="javascript:void(0)">
                                                PVC Insulator
                                            </a>
                                        </h4>
                                        <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lo...</p>
                                        <a href="javascript:void(0)" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                                            VIEW MORE
                                            <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('products') }}" class="btn btn-modern btn-primary h4 font-weight-bold border-0 py-3 px-5 btn-arrow-effect-1 ws-nowrap mt-3 text-3"><span>ALL PRODUCTS</span> <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

            </div>

        </section>
        {{-- END PRODUCTS --}}

        {{-- START FAQ --}}
        <section class="section section-footer border-1 pt-0 mt-0 px-3">
            <div class="container pt-4 pb-5">
                <div class="row py-4">
                    <div class="col-lg-6">
                        <h4 class="text-primary text-3 font-weight-bold mb-2">FREQUENTLY ASKED QUESTIONS</h4>
                        <h3 class="mb-3 font-weight-semibold mb-0">Learn More About Our Company and Services</h3>
                        <div class="custom-divider divider divider-primary divider-small mb-4 mt-2">
                            <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                        </div>
                        <p class="mb-4 pb-2">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>

                        <p class="mb-4 pb-2">Eo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula.</p>

                        <div class="hstack gap-3 pt-3">
                            <div>
                                <a href="{{ route('contact_us') }}" class="btn btn-modern btn-primary font-weight-bold border-0 py-3 px-5 btn-arrow-effect-1 ws-nowrap">CONTACT US <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                            <div class="vr"></div>
                            <div>
                                <a href="tel:0495020295" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold ms-1">
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
        {{-- END FAQ --}}

    </div>

@endsection
