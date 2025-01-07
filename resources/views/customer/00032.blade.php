@extends('customer.layout.app')

@section('title', 'Exelpack - Request Quotation')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5 p-4" style="background-image: url(/customer/page-header/background-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="fs-5 mb-0 pb-0">Request <strong>Quotation</strong></h1>
                    {{-- <p class="custom-font-secondary custom-font-size-1 mb-0 pb-0 text-white text-2">We are happy to assist you</p> --}}

                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="active">Request Quotation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-2">

        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0" id="formsStyleWithIcons">

                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="mb-0 card-title">
                            Contact Information
                        </h4>
                        <span class="d-block text-color-grey positive-ls-3 font-weight-medium text-2">Get in touch with us</span>
                    </div>
                    <div class="card-body mx-0 px-3">
                        <div class="row">
                            <div class="col">
                                <form class="contact-form form-with-icons" id="form-contact-info" data-url="create" action="request-quotation" method="POST" novalidate="novalidate">
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
                                            <div class="position-relative">
                                                <i class="fa-solid fa-user text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                                                <input type="text" value="" class="form-control validate-form-input text-3 h-auto py-2" validation-msg="Enter your Fullname" placeholder="Fullname" name="fullname" required>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="form-label mb-1 text-2">Business Email</label>
                                            <div class="position-relative">
                                                <i class="fa-solid fa-envelope text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                                                <input type="email" value="" maxlength="100" class="form-control validate-form-input text-3 h-auto py-2 email" validation-msg="Enter the Company Email" placeholder="Business Email" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-lg-7">
                                            <label class="form-label mb-1 text-2">Company</label>
                                            <div class="position-relative">
                                                <i class="fa-solid fa-building text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                                                <input type="text" value="" class="form-control validate-form-input text-3 h-auto py-2" validation-msg="Enter the Company Name" placeholder="Company" name="company" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-5">
                                            <label class="form-label mb-1 text-2">Phone Number</label>
                                            <div class="position-relative">
                                                <i class="fa-solid fa-phone text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                                                <input type="text" value=""  class="form-control validate-form-input text-3 h-auto py-2 phone" validation-msg="Enter the Company Phone Number" placeholder="Phone Number" name="phone" required>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-4">
                                            <label class="form-label mb-1 text-2">Accreditation</label>
                                            <div class="position-relative">
                                                <i class="fa-solid fa-pen-to-square text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50 z-index-1"></i>
                                                <div class="custom-select-1">
                                                    <select class="form-select validate-form-input form-control h-auto" validation-msg="Enter Company Accreditation" placeholder="Type of Accreditation" name="accreditation_type" required>
                                                        <option value="">Select Accreditation</option>
                                                        <option value="PEZA">PEZA</option>
                                                        <option value="NON-PEZA">NON-PEZA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-8">
                                            <label class="form-label mb-1 text-2">Address</label>
                                            <div class="position-relative">
                                                <i class=" fa-solid fa-location-dot text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                                                <input type="text" value="" class="form-control validate-form-input text-3 h-auto py-2" validation-msg="Enter the Company Address" placeholder="Address" name="address" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label class="form-label mb-1 text-2">Delivery Location </label>
                                            <div class="position-relative">
                                                <i class="fa-solid fa-truck text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                                                <input type="text" value="" class="form-control validate-form-input text-3 h-auto py-2" validation-msg="Enter the Delivery Location" placeholder="Delivery Location" name="delivery_location" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Request Type</label>
                                            <div class="position-relative">
                                                <i class="fa-solid fa-pen-to-square text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50 z-index-1"></i>
                                                <div class="custom-select-1">
                                                    <select class="form-select validate-form-input form-control h-auto" validation-msg="Enter the Request Type" placeholder="Request Type" name="request_type" required>
                                                        <option value="">How can we help you</option>
                                                        <option value="Partnership Opportunities">Partnership Opportunities</option>
                                                        <option value="General/Other">General/Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Tell us about your request so we can better assist you</label>
                                            <div class="position-relative">
                                                <i class="fa-solid fa-comment text-color-primary text-3 position-absolute left-15 top-15"></i>
                                                <textarea maxlength="5000" data-msg-required="Please enter your message." validation-msg="Enter Your Message For the Request" placeholder ="Message" rows="8" class="form-control validate-form-input text-3 h-auto py-2" name="message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <div class="form-check">
                                                <input class="form-check-input validate-form-input" placeholder ="Terms and Condition" validation-msg="Agree to our Terms and Condition" type="checkbox" name="agree" id="tabContent13Checkbox" data-msg-required="You must agree before submiting." required>
                                                <label class="form-check-label fst-italic text-muted text-2" for="tabContent13Checkbox">
                                                    By clicking here, I state that I have read and understood the terms and conditions.”
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group col-12">
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary">REQUEST QUOTATION</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 position-relative">
                <div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                    <div class="card-body">
                        <h4 class="font-weight-bold text-uppercase text-4 mb-3">Request Product</h4>
                        <table class="shop_table cart-totals mb-3">
                            <tbody class="tbody-spec-list">

                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3 btn-request-quotation">EDIT SPECIFICATION <i class="fa-solid fa-pen-to-square ms-2"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('customer.create.modal-insert')
@endsection
