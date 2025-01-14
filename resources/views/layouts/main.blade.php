<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/dropify/dist/dropify.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/prismjs/themes/prism.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/flatpickr/flatpickr.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/easymde/easymde.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</script>
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
    @include('layouts.sidebar')
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
      @include('layouts.navar')
			<!-- partial -->

			<div class="page-content">

        

        @yield('section')

			</div>

			<!-- partial:partials/_footer.html -->
      @include('layouts.footer')
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
  <script src="{{asset('assets/vendors/dropify/dist/dropify.min.js')}}"></script>
  <script src="{{asset('assets/vendors/prismjs/prism.js')}}"></script>
  <script src="{{asset('assets/vendors/clipboard/clipboard.min.js')}}"></script>
  <script src="{{asset('assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendors/tinymce/tinymce.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{asset('assets/js/dashboard-light.js')}}"></script>
  <script src="{{asset('assets/js/data-table.js')}}"></script>
  <script src="{{asset('assets/js/dropify.js')}}"></script>
  <script src="{{asset('assets/js/flatpickr.js')}}"></script>
  <script src="{{asset('assets/js/tinymce.js')}}"></script>
	<!-- End custom js for this page -->

  @if (session('swal'))
  <script>
    Swal.fire(@json(session('swal')))
  </script>
@endif

  

@stack('js')

</body>
</html>    