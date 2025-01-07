<!DOCTYPE html>
<html lang="en">
<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        <meta content="{{ csrf_token() }}" name="csrf-token" id="csrf-token">

		<title>@yield('title')</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&amp;display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('customer/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/magnific-popup/magnific-popup.min.css') }}">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('customer/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/css/theme-shop.css') }}">

		<!-- Revolution Slider CSS -->
		<link rel="stylesheet" href="{{ asset('customer/vendor/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/rs-plugin/css/layers.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/rs-plugin/css/navigation.css') }}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{ asset('customer/vendor/circle-flip-slideshow/css/component.css') }}">
		<link id="skinCSS" rel="stylesheet" href="{{ asset('customer/css/default.css') }}">
        <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css " rel="stylesheet">

		<script src="{{ asset('customer/vendor/modernizr/modernizr.min.js') }}"></script>


	</head>
	<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 300, 'effect': 'default'}">
		<div class="loading-overlay">
            <div class="bounce-loader">
                <div class="cssload-speeding-wheel-container">
                    <div class="cssload-speeding-wheel"></div>
                </div>
            </div>
        </div>
		<div class="body">

            @include('customer.layout.header')

            @yield('content')

            @include('customer.layout.footer')

		</div>

		<!-- Vendor -->
		<script src="{{ asset('customer/vendor/plugins/js/plugins.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('customer/js/theme.js') }}"></script>

		<!-- Revolution Slider Scripts -->
		<script src="{{ asset('customer/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('customer/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		<!-- Circle Flip Slideshow Script -->
		<script src="{{ asset('customer/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
		<!-- Current Page Views -->
		<script src="{{ asset('customer/js/view.home.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('customer/js/theme.init.js') }}"></script>

		<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <script type="text/javascript">$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});</script>
        <script>var assetUrl = "{{ asset('') }}";</script>
        <script src="{{ asset('customer/js/main.js') }}" type="module"></script>


        <script src="{{ asset('customer/js/view.shop.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		{{-- <script  async src="{{ asset('customer/js/gallery.js') }}"></script> --}}

	</body>
</html>
