<section class="navbar-content m-md-3 m-2">
	<div class="d-flex align-items-center">
		<div class="col-lg-3 col-6">
			<a href="{{ route('beranda') }}"><img src="{{ asset('assets/images/logo_white-2.png') }}" class="logo-top"></a>
		</div>
		<nav id="navbar-top" class="menu-header nonactive col-lg-9 d-lg-block">
			<div>
				<ul>
					<li class="d-lg-none d-block text-end mx-4 my-3" id="toggle-close"><i class="fas fa-close text-white toggle-button"></i></li>
					<li class="d-lg-inline-block d-block"><a class="menu-top text-decoration-none mx-lg-2" href="{{ route('beranda') }}">Beranda</a></li>
					<li class="d-lg-inline-block d-block"><a class="menu-top text-decoration-none mx-lg-2" href="{{ route('about') }}">About</a></li>
					<li class="d-lg-inline-block d-block"><a class="menu-top text-decoration-none mx-lg-2" href="{{ route('article') }}">Article</a></li>
					<li class="d-lg-inline-block d-block"><a class="menu-top text-decoration-none mx-lg-2" href="{{ route('portfolio') }}">Portfolio</a></li>
					<li class="d-lg-inline-block d-none"><a class="btn button-gradient-green menu-top whatsapp text-decoration-none mx-lg-2" href="https://wa.me/6282275713049" target="__blank"><i class="fab fa-whatsapp"></i> {{ $profil->phone }}</a></li>
				</ul>
			</div>
		</nav>
		<div class="col-6 d-lg-none text-end">
			<i class="fas fa-bars text-white toggle-button me-md-4 me-3" id="toggle-open"></i>
		</div>
	</div>
</section>
<div class="menu-side nonactive" id="navbar-side">
	<div class="d-flex align-items-center">
		<div class="navbar-side bg-white pe-2 rounded-end">
			<ul>
				<li class="d-block ps-1"><a target="__blank" href="{{ $profil->github }}"><i class="fab fa-github text-dark"></i></a></li>
				<li class="d-block ps-1"><a target="__blank" href="{{ $profil->instagram }}"><i class="fab fa-instagram text-warning"></i></a></li>
				<li class="d-block ps-1"><a target="__blank" href="{{ $profil->facebook }}"><i class="fab fa-facebook text-primary"></i></a></li>
				<li class="d-block ps-1"><a target="__blank" href="{{ $profil->youtube }}"><i class="fab fa-youtube text-danger"></i></a></li>
				<li class="d-block ps-1"><a target="__blank" href="{{ $profil->whatsapp }}"><i class="fab fa-whatsapp text-success"></i></a></li>
			</ul>
		</div>
		<i class="fas fa-caret-right text-dark bg-white p-1 rounded-end" id="caret-active"></i>
	</div>
</div>
<i class="fas fa-star text-warning star-lightning-1"></i>
<i class="fas fa-star text-warning star-light-1"></i>
<i class="fas fa-star text-warning star-light-2"></i>
<i class="fas fa-star text-warning star-light-3"></i>
<i class="fas fa-star text-warning star-light-4"></i>
<i class="fas fa-star text-warning star-light-5"></i>
<i class="fas fa-star text-warning star-lightning-2"></i>