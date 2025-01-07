<!--begin::Entry-->
@extends('customer_service.app')

@section('title', 'Exelpack - Request Info')

@section('content')

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold my-1 mr-5">Request Information</h5>
                <!--end::Page Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item text-muted">
                        <a href="javascript:;" class="text-muted">Main</a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('request_quotation_list') }}" class="text-muted">Request Quotation List</a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="javascript:;" class="text-muted">Request Information</a>
                    </li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
    </div>
</div>
<!--end::Subheader-->

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <span class="span-alert">
        </span>
        {{-- <div class="card card-custom gutter-b">
            <div class="card-body">
                <div class="">
                    <!--begin::Message Heading-->
                    <div class="d-flex card-spacer-x py-6 flex-column flex-md-row flex-lg-column flex-xxl-row justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-lg-50 symbol-primary mr-4">
                                <span class="symbol-label font-size-h3 font-weight-boldest">AK</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 flex-wrap mr-2">
                                <div class="d-flex">
                                    <a href="javascript:;" class="font-size-lg font-weight-bolder text-dark-75 text-hover-primary mr-2 requestor-name">--</a>
                                    <div class="font-weight-bold text-muted">
                                        <span class="label label-light-success label-inline font-weight-bolder mr-1">Customer</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                     <!--begin::Contacts-->
                                <div class="d-flex flex-wrap my-2">
                                    <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                        <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"></path>
                                                    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    <span class="requestor-email">
                                        david.s@loop.com
                                    </span>
                                    </a>
                                    <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                    <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" fill="#000000"/>
                                                <rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
                                                <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="requestor-company">Samsung Electronic</span> ( <span class="company-accreditation"> </span>)
                                </a>
                                    <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                    <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000"/>
                                                <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="requestor-telephone">
                                        --
                                    </span>
                                </a>
                                </div>
                                <!--end::Contacts-->
                                </div>
                            </div>
                        </div>
                        <div class="d-flex my-2 my-xxl-0 align-items-md-center align-items-lg-start align-items-xxl-center flex-column flex-md-row flex-lg-column flex-xxl-row">
                            <div class="d-flex align-items-center flex-wrap flex-xxl-nowrap div-alert-manage" data-inbox="toolbar">
                            </div>
                        </div>
                    </div>
                    <!--end::Message Heading-->
                    <div class="card-spacer-x py-3 toggle-off-item">
                        <p>Hi Bob,</p>
                        <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.</p>
                        <p>Jornalists call this critical, introductory section the "Lede," and when bridge properly executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang</p>
                        <p>Best regards,</p>
                        <p>Jason Muller</p>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--begin::Page Layout-->
        <div class="row">
            <!--begin::Layout-->
            <div class="col-xl-12">
                <!--begin::Card-->

                <div class="card card-custom gutter-b">
                    <div class="card-body p-0">
                        <!-- begin: Invoice-->
                        <!-- begin: Invoice header-->
                        <div class="row justify-content-center pt-12 pb-6 px-8 px-md-0">
                            <div class="col-md-10">
                                <div class="d-flex justify-content-between pb-5 flex-column flex-md-row">
                                    <h3 class="font-weight-boldest">Request Information</h3>

                                </div>
                                <div class="d-flex align-items-center mb-8">
                                    <!--begin::Symbol-->
                                    <div class="symbol mr-5 pt-1">
                                        <div class="symbol-label min-w-140px min-h-130px"
                                            style="background-image: url('{{ asset('employee/assets/product-carousel/rsc_box.png') }}')">
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Title-->
                                        <a href="javascript:;"
                                            class="text-dark-75 font-weight-bolder text-hover-primary display-4 product-name">--</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <span
                                            class="text-muted font-weight-bold font-size-sm pb-4 product-type text-uppercase">--</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Info-->
                                </div>

                                <span class="pl-0 font-weight-bold text-muted text-uppercase">Request Details</span>
                                <div class="border-bottom w-100"></div>
                                <div class="d-flex justify-content-between pt-6">
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">REQUEST NO.</span>
                                        <span class="opacity-70">64616-103</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">REQUEST DATE</span>
                                        <span class="opacity-70">Jan 07, 2020</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">DELIVERY LOCATION.</span>
                                        <span class="opacity-70">Iris Watson, P.O. Box 283 8562 Fusce RD.
                                            <br />Fredrick Nebraska 20620</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: Invoice header-->
                        <div class="row justify-content-center py-8 px-8 py-md-30 px-md-0">
                            <div class="col-md-9">
                                <!--begin::Invoice body-->
                                <div class="row pb-26">
                                    <div class="col-md-3 border-right-md pr-md-10 py-md-10">
                                        <!--begin::Invoice To-->
                                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">INVOICE TO.</div>
                                        <div class="font-size-lg font-weight-bold mb-10">Iris Watson.
                                        <br>Fredrick Nebraska 20620</div>
                                        <!--end::Invoice To-->
                                        <!--begin::Invoice No-->
                                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">INVOICE NO.</div>
                                        <div class="font-size-lg font-weight-bold mb-10">56758</div>
                                        <!--end::Invoice No-->
                                        <!--begin::Invoice Date-->
                                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">DATE</div>
                                        <div class="font-size-lg font-weight-bold">12 May, 2020</div>
                                        <!--end::Invoice Date-->
                                    </div>
                                    <div class="col-md-9 py-10 pl-md-10">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="pt-1 pb-9 pl-0 pl-md-5 font-weight-bolder text-muted font-size-lg text-uppercase">Description</th>
                                                        <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">Hours</th>
                                                        <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">Rate</th>
                                                        <th class="pt-1 pb-9 text-right pr-0 font-weight-bolder text-muted font-size-lg text-uppercase">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="font-weight-bolder font-size-lg">
                                                        <td class="border-top-0 pl-0 pl-md-5 pt-7 d-flex align-items-center">
                                                        <span class="navi-icon mr-2">
                                                            <i class="fa fa-genderless text-danger font-size-h2"></i>
                                                        </span>Creative Design</td>
                                                        <td class="text-right pt-7">80</td>
                                                        <td class="text-right pt-7">$40.00</td>
                                                        <td class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right">$3200.00</td>
                                                    </tr>
                                                    <tr class="font-weight-bolder border-bottom-0 font-size-lg">
                                                        <td class="border-top-0 pl-0 pl-md-5 py-4 d-flex align-items-center">
                                                        <span class="navi-icon mr-2">
                                                            <i class="fa fa-genderless text-success font-size-h2"></i>
                                                        </span>Front-End Development</td>
                                                        <td class="border-top-0 text-right py-4">120</td>
                                                        <td class="border-top-0 text-right py-4">$40.00</td>
                                                        <td class="border-top-0 pr-0 py-4 font-size-h6 font-weight-boldest text-right">$4800.00</td>
                                                    </tr>
                                                    <tr class="font-weight-bolder border-bottom-0 font-size-lg">
                                                        <td class="border-top-0 pl-0 pl-md-5 py-4 d-flex align-items-center">
                                                        <span class="navi-icon mr-2">
                                                            <i class="fa fa-genderless text-primary font-size-h2"></i>
                                                        </span>Back-End Development</td>
                                                        <td class="border-top-0 text-right py-4">210</td>
                                                        <td class="border-top-0 text-right py-4">$60.00</td>
                                                        <td class="border-top-0 pr-0 py-4 font-size-h6 font-weight-boldest text-right">$12600.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Invoice body-->
                                <!--begin::Invoice footer-->
                                <div class="row">
                                    <div class="col-md-5 border-top pt-14 pb-10 pb-md-18">
                                        <div class="d-flex flex-column flex-md-row">
                                            <div class="d-flex flex-column">
                                                <div class="font-weight-bold font-size-h6 mb-3">BANK TRANSFER</div>
                                                <div class="d-flex justify-content-between font-size-lg mb-3">
                                                    <span class="font-weight-bold mr-15">Account Name:</span>
                                                    <span class="text-right">Barclays UK</span>
                                                </div>
                                                <div class="d-flex justify-content-between font-size-lg mb-3">
                                                    <span class="font-weight-bold mr-15">Account Number:</span>
                                                    <span class="text-right">1234567890934</span>
                                                </div>
                                                <div class="d-flex justify-content-between font-size-lg">
                                                    <span class="font-weight-bold mr-15">Code:</span>
                                                    <span class="text-right">BARC0032UK</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 pt-md-25">
                                        <div class="bg-primary rounded d-flex align-items-center justify-content-between text-white max-w-350px position-relative ml-auto p-7">
                                            <!--begin::Shape-->
                                            <div class="position-absolute opacity-30 top-0 right-0">
                                                <span class="svg-icon svg-icon-2x svg-logo-white svg-icon-flip">
                                                    <!--begin::Svg Icon | path:assets/media/svg/shapes/abstract-8.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="176" height="165" viewBox="0 0 176 165" fill="none">
                                                        <g clip-path="url(#clip0)">
                                                            <path d="M-10.001 135.168C-10.001 151.643 3.87924 165.001 20.9985 165.001C38.1196 165.001 51.998 151.643 51.998 135.168C51.998 118.691 38.1196 105.335 20.9985 105.335C3.87924 105.335 -10.001 118.691 -10.001 135.168Z" fill="#AD84FF"></path>
                                                            <path d="M28.749 64.3117C28.749 78.7296 40.8927 90.4163 55.8745 90.4163C70.8563 90.4163 83 78.7296 83 64.3117C83 49.8954 70.8563 38.207 55.8745 38.207C40.8927 38.207 28.749 49.8954 28.749 64.3117Z" fill="#AD84FF"></path>
                                                            <path d="M82.9996 120.249C82.9996 144.964 103.819 165 129.501 165C155.181 165 176 144.964 176 120.249C176 95.5342 155.181 75.5 129.501 75.5C103.819 75.5 82.9996 95.5342 82.9996 120.249Z" fill="#AD84FF"></path>
                                                            <path d="M98.4976 23.2928C98.4976 43.8887 115.848 60.5856 137.249 60.5856C158.65 60.5856 176 43.8887 176 23.2928C176 2.69692 158.65 -14 137.249 -14C115.848 -14 98.4976 2.69692 98.4976 23.2928Z" fill="#AD84FF"></path>
                                                            <path d="M-10.0011 8.37466C-10.0011 20.7322 0.409554 30.7493 13.2503 30.7493C26.0911 30.7493 36.5 20.7322 36.5 8.37466C36.5 -3.98287 26.0911 -14 13.2503 -14C0.409554 -14 -10.0011 -3.98287 -10.0011 8.37466Z" fill="#AD84FF"></path>
                                                            <path d="M-2.24881 82.9565C-2.24881 87.0757 1.22081 90.4147 5.50108 90.4147C9.78135 90.4147 13.251 87.0757 13.251 82.9565C13.251 78.839 9.78135 75.5 5.50108 75.5C1.22081 75.5 -2.24881 78.839 -2.24881 82.9565Z" fill="#AD84FF"></path>
                                                            <path d="M55.8744 12.1044C55.8744 18.2841 61.0788 23.2926 67.5001 23.2926C73.9196 23.2926 79.124 18.2841 79.124 12.1044C79.124 5.92653 73.9196 0.917969 67.5001 0.917969C61.0788 0.917969 55.8744 5.92653 55.8744 12.1044Z" fill="#AD84FF"></path>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <!--end::Shape-->
                                            <div class="font-weight-boldest font-size-h5">TOTAL AMOUNT</div>
                                            <div class="text-right d-flex flex-column">
                                                <span class="font-weight-boldest font-size-h3 line-height-sm">$20,600.00</span>
                                                <span class="font-size-sm">Taxes included</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Invoice footer-->
                            </div>
                        </div>
                        <!-- end: Invoice-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Page Layout-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

@endsection
