<footer class="position-relative overflow-hidden">
	<div class="button-gradient-green position-absolute" style="width: 100%; height: 120vh; z-index: -3; border-top-left-radius: 20px; border-top-right-radius: 20px;"></div>
	<div class="text-white">
		<div class="menu-bottom container p-lg-4 pt-4">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<img src="{{asset('assets/images/logo_white-2.png')}}" width="75%">
				</div>
				<div class="col-lg-4 col-md-3">
					<div class="ms-lg-5">
						<div class="ms-lg-5">
							<h6>Menus</h6>
							<hr class="w-25 my-1">
							<ul>
								<li class="d-block"><a href="{{ route('beranda') }}" class="text-white text-decoration-none">Beranda</a></li>
								<li class="d-block"><a href="{{ route('about') }}" class="text-white text-decoration-none">About</a></li>
								<li class="d-block"><a href="{{ route('article') }}" class="text-white text-decoration-none">Article</a></li>
								<li class="d-block"><a href="{{ route('portfolio') }}" class="text-white text-decoration-none">Portfolio</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="ms-lg-5">
						<h6>Social Media</h6>
						<hr class="w-25 my-1">
						<ul>
							<li class="d-inline-block mx-1"><a target="__blank" href="{{ $profil->github }}" class="text-white text-decoration-none"><h5><i class="fab fa-github"></i></h5></a></li>
							<li class="d-inline-block mx-1"><a target="__blank" href="{{ $profil->instagram }}" class="text-warning text-decoration-none"><h5><i class="fab fa-instagram"></i></h5></a></li>
							<li class="d-inline-block mx-1"><a target="__blank" href="{{ $profil->facebook }}" class="text-primary text-decoration-none"><h5><i class="fab fa-facebook"></i></h5></a></li>
							<li class="d-inline-block mx-1"><a target="__blank" href="{{ $profil->youtube }}" class="text-danger text-decoration-none"><h5><i class="fab fa-youtube"></i></h5></a></li>
							<li class="d-inline-block mx-1"><a target="__blank" href="{{ $profil->whatsapp }}" class="text-success text-decoration-none"><h5><i class="fab fa-whatsapp"></i></h5></a></li>
						</ul>
						<h6>Subscribe Us</h6>
						<hr class="w-25 my-1">
						<form method="post" action="{{ route('add.subscribe') }}">
							@csrf
      						<div class="input-group mb-3">
								<input type="email" name="email" class="form-control" placeholder="youremail@example.com" aria-describedby="basic-addon2" required />
								<button id="basic-addon2" class="input-group-text bg-warning" style="border: none;"><i class="fas fa-envelope"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<hr class="border border-white my-1">
		<div class="copyright text-center">
			&copy; shiota zero - <span id="tahun"></span>
		</div>
	</div>
</footer>
<script type="text/javascript" src="{{ asset('assets/js/landing-page/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/landing-page/bootstrap/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/landing-page/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/landing-page/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/landing-page/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/landing-page/iziToast.min.js') }}"></script>

@if (session('successSendSubscribe'))
	<script type="text/javascript">
	iziToast.success({
		position: "topCenter",
		title: 'Success',
		message: 'Subscribe Succesfully'
	});
	</script>
@endif
