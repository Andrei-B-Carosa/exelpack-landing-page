{{-- <header id="header"data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
    <div class="header-body shadow-sm">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                                <img alt="Porto" width="215" height="50" data-sticky-width="215" data-sticky-height="50" data-sticky-top="20" src="{{ asset('customer/logo/EC_LOGO.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                    <span class="ws-nowrap"><i class="fas fa-envelope"></i> lvibora@exelpackcorp.com</span>
                                </li>
                                <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                    <span class="ws-nowrap"><i class="fas fa-phone"></i> (049) 502-0295</span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="#">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#">
                                                Products
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#">
                                                Services
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#">
                                                Careers
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#">
                                                Support Group
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}

<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}" style="height: 155px;">
    <div class="header-body border-top-0  shadow-sm" style="position: fixed;">
        <div class="header-top" style="height: 54px;">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                        <span class="ws-nowrap"><i class="fas fa-phone"></i> (049) 502-0295</span>
                                    </li>
                                    <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                        <span class="ws-nowrap"><i class="fas fa-envelope"></i> lvibora@exelpackcorp.com</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 100px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo" style="width: 100px; height: 48px;">
                            <a href="index.html">
                                <img alt="Porto" width="210" height="50" data-sticky-width="210" data-sticky-height="50" src="{{ asset('customer/logo/EC_LOGO.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-dark header-nav-bottom-line-effect-1 order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-text-size-3 header-nav-main-text-weight-600 header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link nav-home" href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link nav-about-us" href="{{ route('about_us') }}">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link nav-products" href="{{ route('products') }}">
                                                Products
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link nav-services" href="{{ route('services') }}">
                                                Services
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link nav-careers" href="{{ route('careers') }}">
                                                Careers
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('activities') }}">
                                                Activities
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link nav-contact-us" href="{{ route('contact_us') }}">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
