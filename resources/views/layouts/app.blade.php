
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/ventura/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 17:25:22 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Ventura - Dashboard</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">

		<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            @include('layouts.header')
			<!-- /Header -->

			<!-- Sidebar -->
            @include('layouts.menu')
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">

                <div class="content container-fluid">
                    @yield('content')
				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

		<!-- Slimscroll JS -->
        <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

		<script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ asset('assets/js/chart.morris.js') }}"></script>

		<!-- Custom JS -->
		<script  src="{{ asset('assets/js/script.js') }}"></script>

    </body>

<!-- Mirrored from dreamguys.co.in/demo/ventura/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 17:26:05 GMT -->
</html>
