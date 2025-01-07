@extends('customer.layout.app')

@section('title', 'Exelpack - Products')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5 p-4" style="background-image: url(/customer/page-header/background-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="fs-5 mb-0 pb-0">Product <strong>Info</strong></h1>
                    {{-- <p class="custom-font-secondary custom-font-size-1 mb-0 pb-0 text-white">Selection of Packaging Product</p> --}}

                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="active">Product Info</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-lg-12 shop">

            <div class="row">

                <div class="col-lg-6">

                    <div class="thumb-gallery-wrapper">
                        <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3 owl-loaded owl-drag">

                            <div class="owl-stage-outer owl-height" style="height: 403.5px;">
                                <div class="owl-stage div-carousel-big" style="transform: translate3d(-1654px, 0px, 0px); transition: all 0.6s ease 0s; width: 2068px;">
                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button
                                    type="button" role="presentation" class="owl-next disabled"></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage div-carousel-small" style="transform: translate3d(-104px, 0px, 0px); transition: all 0.3s ease 0s; width: 524px;">
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev">
                                    <span aria-label="Previous">‹</span>
                                </button>
                                <button type="button" role="presentation" class="owl-next">
                                    <span aria-label="Next">›</span>
                                </button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="summary entry-summary position-relative">
                        <div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2 mt-0">
                            <h1 class="mb-0 font-weight-bold text-9 product-name">--</h1>
                            <div class="pb-0 clearfix d-flex align-items-center">
                                <span class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 product-type">--</span>
                            </div>
                            <p class="text-3-5 mb-3 mt-4 product-description">--</p>
                            <div class="mt-4 div-spec-info">
                                <span class="div-product-specification d-none">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <strong class="d-block text-color-dark line-height-1 mb-1 div-spec-title">--</strong>
                                            <p class="font-weight-light mb-0">Available</p>
                                        </div>
                                        <div class="col-lg-8 div-spec-list">
                                            --
                                        </div>
                                    </div>
                                    <hr class="bg-color-grey-scale-1 my-1-1">
                                </span>
                            </div>
                            <div class="cart">
                                <div class="d-grid gap-1">
                                <button type="button" class="btn btn-primary btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary btn-request-quotation">Request Quotation</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="solid my-5">
                <h1 class="mb-0">Related <strong>Products</strong></h1>
                <div class="pb-0 clearfix d-flex align-items-center">
                    <span class="d-block text-color-grey positive-ls-3 font-weight-medium text-2">You May Also Like</span>
                </div>

                <div class="justify-content-start">
                    <div class="container">
                        <div class="row div-related-products">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('customer.create.modal-insert')
@endsection
