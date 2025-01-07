@extends('customer.layout.app')

@section('title', 'Exelpack - Careers')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5 p-4" style="background-image: url(customer/page-header/background-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="fs-5 mb-0 pb-0">Our <strong>Careers</strong></h1>
                    {{-- <p class="custom-font-secondary custom-font-size-1 mb-0 pb-0 text-white">Selection of Packaging Product</p> --}}

                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="#">Home</a></li>
                        <li class="active">Careers</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container py-3">

    <div class="row">
        <div class="col-lg-12">
            <div class="overflow-hidden mb-2">
                <h2 class="font-weight-normal text-7 mb-2 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">Find Your <strong class="font-weight-extra-bold">Opportunity</strong></h2>
            </div>
            <div class="overflow-hidden mb-4">
                <p class="lead mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    Discover exciting career opportunities with us.
                    Explore a variety of roles that match your skills and aspirations. Join our team and take the next step in your professional journey.</p>
            </div>
        </div>
    </div>

</div>

<section class="section section-footer border-1 pt-0 mt-0">
    <div class="container py-4">

        <div class="row pb-4">
            <div class="col-md-8">
                <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <h4 class="mt-2 mb-2">Current <strong>Openings</strong></h4>

                    <div class="accordion accordion-modern accordion-modern-grey-scale-1 without-bg mt-4" id="accordion11">
                        <div class="card card-default mb-2">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11One">
                                        Senior Software Developer - Web Development
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse11One" class="collapse show">
                                <div class="card-body mt-3">
                                    <p>Suspendisse potenti. Curabitur euismod facilisis neque, eu malesuada diam finibus non. Nullam nec vehicula leo. Morbi porta ante eu feugiat mollis ellus blandit massa enim. Nullam id varius nunc ellus blandit massa enim. Nullam id varius nunc.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>

                                    <ul class="list list-inline mt-4 mb-3 text-2">
                                        <li class="list-inline-item">
                                            <strong>LOCATION:</strong>
                                            NEW YORK
                                        </li>
                                        <li class="list-inline-item ms-md-3">
                                            <strong>QUALIFICATION:</strong>
                                            3+ YEARS EXPERIENCE, GRADUATION
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-modern btn-dark">Apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default mb-2">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11Two">
                                        Infrastructure Monitoring - Software Developer
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse11Two" class="collapse">
                                <div class="card-body mt-3">
                                    <p>Suspendisse potenti. Curabitur euismod facilisis neque, eu malesuada diam finibus non. Nullam nec vehicula leo. Morbi porta ante eu feugiat mollis ellus blandit massa enim. Nullam id varius nunc ellus blandit massa enim. Nullam id varius nunc.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>

                                    <ul class="list list-inline mt-4 mb-3 text-2">
                                        <li class="list-inline-item">
                                            <strong>LOCATION:</strong>
                                            NEW YORK
                                        </li>
                                        <li class="list-inline-item ms-md-3">
                                            <strong>QUALIFICATION:</strong>
                                            3+ YEARS EXPERIENCE, GRADUATION
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-modern btn-dark">Apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default mb-2">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11Three">
                                        Main Developer - Software Developer
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse11Three" class="collapse">
                                <div class="card-body mt-3">
                                    <p>Suspendisse potenti. Curabitur euismod facilisis neque, eu malesuada diam finibus non. Nullam nec vehicula leo. Morbi porta ante eu feugiat mollis ellus blandit massa enim. Nullam id varius nunc ellus blandit massa enim. Nullam id varius nunc.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>

                                    <ul class="list list-inline mt-4 mb-3 text-2">
                                        <li class="list-inline-item">
                                            <strong>LOCATION:</strong>
                                            NEW YORK
                                        </li>
                                        <li class="list-inline-item ms-md-3">
                                            <strong>QUALIFICATION:</strong>
                                            3+ YEARS EXPERIENCE, GRADUATION
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-modern btn-dark">Apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default mb-2">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11Four">
                                        Front-End Developer - Software Developer
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse11Four" class="collapse">
                                <div class="card-body mt-3">
                                    <p>Suspendisse potenti. Curabitur euismod facilisis neque, eu malesuada diam finibus non. Nullam nec vehicula leo. Morbi porta ante eu feugiat mollis ellus blandit massa enim. Nullam id varius nunc ellus blandit massa enim. Nullam id varius nunc.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>

                                    <ul class="list list-inline mt-4 mb-3 text-2">
                                        <li class="list-inline-item">
                                            <strong>LOCATION:</strong>
                                            NEW YORK
                                        </li>
                                        <li class="list-inline-item ms-md-3">
                                            <strong>QUALIFICATION:</strong>
                                            3+ YEARS EXPERIENCE, GRADUATION
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-modern btn-dark">Apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default mb-2">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11Five">
                                        Lead Designer - Design
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse11Five" class="collapse">
                                <div class="card-body mt-3">
                                    <p>Suspendisse potenti. Curabitur euismod facilisis neque, eu malesuada diam finibus non. Nullam nec vehicula leo. Morbi porta ante eu feugiat mollis ellus blandit massa enim. Nullam id varius nunc ellus blandit massa enim. Nullam id varius nunc.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>

                                    <ul class="list list-inline mt-4 mb-3 text-2">
                                        <li class="list-inline-item">
                                            <strong>LOCATION:</strong>
                                            NEW YORK
                                        </li>
                                        <li class="list-inline-item ms-md-3">
                                            <strong>QUALIFICATION:</strong>
                                            3+ YEARS EXPERIENCE, GRADUATION
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-modern btn-dark">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <div class="owl-carousel owl-theme dots-inside mb-0 pb-0 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'animateOut': 'fadeOut', 'dots': false}" style="height: auto;">

                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1098px, 0px, 0px); transition: all 0s ease 0s; width: 2196px;"><div class="owl-item cloned" style="width: 356px; margin-right: 10px;"><div class="pb-5">
                            <img alt="" class="img-fluid rounded" src="{{ asset('customer/web_img/generic-2.jpg') }}">
                        </div></div><div class="owl-item cloned" style="width: 356px; margin-right: 10px;"><div class="pb-5">
                            <img alt="" class="img-fluid rounded" src="{{ asset('customer/web_img/generic-2.jpg') }}">
                        </div></div><div class="owl-item" style="width: 356px; margin-right: 10px;"><div class="pb-5">
                            <img alt="" class="img-fluid rounded" src="{{ asset('customer/web_img/generic-2.jpg') }}">
                        </div></div><div class="owl-item active" style="width: 356px; margin-right: 10px;"><div class="pb-5">
                            <img alt="" class="img-fluid rounded" src="{{ asset('customer/web_img/generic-2.jpg') }}">
                        </div></div><div class="owl-item cloned" style="width: 356px; margin-right: 10px;"><div class="pb-5">
                            <img alt="" class="img-fluid rounded" src="{{ asset('customer/web_img/generic-2.jpg') }}">
                        </div></div><div class="owl-item cloned" style="width: 356px; margin-right: 10px;"><div class="pb-5">
                            <img alt="" class="img-fluid rounded" src="{{ asset('customer/web_img/generic-2.jpg') }}">
                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                    <div class="toggle toggle-primary toggle-simple" data-plugin-toggle="">
                        <section class="toggle active">
                            <a class="toggle-title">Our Benefits</a>
                            <div class="toggle-content" style="display: block;">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p>
                            </div>
                        </section>
                        <section class="toggle">
                            <a class="toggle-title">Our Culture</a>
                            <div class="toggle-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.</p>
                            </div>
                        </section>
                        <section class="toggle">
                            <a class="toggle-title">Join Our Team</a>
                            <div class="toggle-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
