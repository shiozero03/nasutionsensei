<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="the page portfolio of shiota zero that an artificial inteligence and virtual reality developer">
	<meta name="keywords" content="shiota zero, zero, zero03, portfolio, artificial inteligence developer, virtual reality developer">
	<link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
	<title>Shiota Zero | Login</title>
	<link href="{{ asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/landing-page/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/landing-page/animate.min.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('assets/css/landing-page/iziToast.min.css') }}" />
	<link href="{{ asset('assets/css/landing-page/style.min.css') }}" rel="stylesheet" />
</head>
<body class="bg-light">
	<div class="d-flex align-items-center justify-content-center " style="min-height: 100vh; width: 80%; margin-left: 10%;">
		<div class="button-gradient-green w-100 px-3 py-5 rounded">
			<form class="text-start" method="post" action="{{ route('process.login') }}">
				@csrf
				<h2>LOGIN</h2>
				<hr class="border border-white" style="margin: 0;">
				<label>Username/Email</label>
				<input required type="text" name="user" class="mb-2 form-control">
				<label>Password</label>
				<input required type="password" name="password" class="mb-4 form-control">
				<input type="submit" name="login" value="Login" class="form-control btn btn-dark btn-outline-light">
			</form>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('assets/js/landing-page/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/landing-page/bootstrap/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/landing-page/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/landing-page/iziToast.min.js') }}"></script>

	@if (session('failedLogin'))
		<script type="text/javascript">
		iziToast.error({
			position: "topCenter",
			title: 'Login Failed',
			message: 'Your credentials are incorrect'
		});
		</script>
	@endif

	@if (session('failedSession'))
		<script type="text/javascript">
		iziToast.error({
			position: "topCenter",
			title: 'Login Failed',
			message: 'Your must login first'
		});
		</script>
	@endif
</body>
</html>