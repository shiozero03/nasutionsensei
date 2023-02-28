<!DOCTYPE html>
<html>
<head>
	@include('theme-landing.metadata')
</head>
<body>
	@include('theme-landing.nav-menu')

	@yield('content')
	
	@include('theme-landing.footer')

	@yield('script')
	
	@if (session('endSession'))
		<script type="text/javascript">
		iziToast.success({
			position: "topCenter",
			title: 'Success',
			message: 'Logout Success'
		});
		</script>
	@endif

</body>
</html>