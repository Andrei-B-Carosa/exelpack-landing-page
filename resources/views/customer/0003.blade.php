@extends('customer.layout.app')

@section('title', 'Exelpack - Products')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5 p-4" style="background-image: url(customer/page-header/background-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="fs-5 mb-0 pb-0">Our <strong>Products</strong></h1>
                    {{-- <p class="custom-font-secondary custom-font-size-1 mb-0 pb-0 text-white">Selection of Packaging Product</p> --}}

                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="#">Home</a></li>
                        <li class="active">Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-4">
                <div class="col-md-auto mb-3 mb-md-0 order-md-2">
                    <div class="d-flex align-items-center">
                        <span>Showing  <span id="span-product-count"></span> Products</span>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="custom-select-1" style="max-width: 280px;">
                        <select class="form-select form-control border px-3 py-2 h-auto" id="select-view-product">
                            <option value="0" selected="selected">View All Products</option>
                            <option value="1">Corrugated Cartons</option>
                            <option value="2">EPE Foam</option>
                            <option value="3">Plastic Bubble Sheet</option>
                            <option value="4">Danpla</option>
                            <option value="5">Other Products</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="div-product" class="row row-gutter-sm mb-4">
            </div>
        </div>
    </section>

</div>
@endsection
