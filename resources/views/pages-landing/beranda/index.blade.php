@extends('theme-landing.layout')
@section('tittle', 'Home')
@section('content')

<section class="text-white top-beranda mb-3">
	<br class="d-lg-block d-none"><br class="d-lg-block d-none">
	<div class="container">
		<div class="m-md-5">
			<div class="d-md-flex align-items-center">
				<div class="d-md-none text-center mb-3">
					<div class="owl-carousel logo-profil-resp owl-theme">
            			<div class="item p-4">
							<img src="{{ asset('assets/images/logo_white-2.png') }}" class="image-homepage" width="75%">
						</div>
						<div class="item p-4">
							<img src="{{ asset('assets/images/landing-page/pas foto.jpg') }}" class="image-homepage rounded-circle" width="75%">
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-8">
					<div class="border border-white col-lg-8 col-11 p-3" style="box-shadow: 5px 5px 2px white; border-radius: 20px;">
						<h1 class="nama font-1">SHIOTA ZERO</h1>
						<h5 class="first-job font-2-400">Robotic Specialist</h5>
						<span class="side-job font-3"><em>AI Developer, VR Developer, Web Developer, IOT Developer, <br class="d-lg-block d-none">Math & Computer Teacher (Lessons and Olympic)</em></span><br><br>
						<a href="#contact" class="btn button-gradient-green-3">Contact Me <i class="fas fa-arrow-right ms-3"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 d-md-block d-none">
					<div class="">
	            		<div class="owl-carousel logo-profil owl-theme">
	            			<div class="item p-4">
								<img src="{{ asset('assets/images/logo_white-2.png') }}" class="image-homepage" width="75%">
							</div>
							<div class="item p-4">
								<img src="{{ asset('assets/images/landing-page/pas foto.jpg') }}" class="image-homepage rounded-circle" width="75%">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="overflow-hidden position-relative" style="border-radius: 20px;">
	<div class="bg-white position-absolute" style="width: 100%; height: 500vh; z-index: -3;"></div>
	<div class="container py-4">
		<div class="d-md-flex align-items-center my-4 animate__animated animate__fadeInUp">
            <div class="col-md-4 col-12 text-center">
                <div class="container">
            		<div class="owl-carousel logo-profil owl-theme">
            			<div class="item p-4">
							<img src="{{ asset('assets/images/logo.png') }}" class="image-homepage" width="75%">
						</div>
						<div class="item p-4">
							<img src="{{ asset('assets/images/landing-page/pas foto.jpg') }}" class="image-homepage rounded-circle" width="75%">
						</div>
					</div>
				</div>
            </div>
            <div class="col-md-8 col-12">
                <div class="container ms-lg-5">
                	<h4>WELCOME</h4>
                   	<h2>Let's Make Better World With Technology</h2>
                   	<small><em>I am from Information System and Technology Education major and have an interest in mathematics education, web developer, application developer, iot developer, vr and robotics. So far I often win math competitions and once made a web. My dream is to build a robot that can understand human feelings.</em></small>
                   	<div class="my-lg-4 my-3">
						<a href="{{ route('about') }}" class="btn button-gradient-green-3">About Me <i class="fas fa-arrow-right ms-3"></i></a>
					</div>
                </div>
            </div>
        </div>
	</div>
</section>
<section class="overflow-hidden position-relative" style="border-radius: 20px;">
	<div class="container py-4">
		<h2 class="text-white text-center font-1">SKILL</h2>
		<hr class="border border-white">
	    <div class="container animate__animated animate__fadeInLeft">
	    	<h3 class="text-white font-3">Programming Languange</h3>
	    	<hr class="border border-white w-25">
	        <div class="columns">
	            <div class="owl-carousel owl-1 owl-theme">
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/php.svg') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">PHP</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/java.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">JAVA</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/pascal.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">PASCAL</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/javascript.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">JAVASCRIPT</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/python.webp') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">PYTHON</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/c.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">C/C#</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/cpp.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">C++</h5>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <br>
	    <div class="container animate__animated animate__fadeInRight">
	    	<h3 class="text-white font-3">Web Languange</h3>
	    	<hr class="border border-white w-25">
	        <div class="columns">
	            <div class="owl-carousel owl-2 owl-theme">
	                <div class="item">
	                    <div style="border-radius: 10px;" class="border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/html.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="mt-1 text-white ms-3">HTML</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style="border-radius: 10px;" class="border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/css.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="mt-1 text-white ms-3">CSS</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style="border-radius: 10px;" class="border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/bootstrap.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="mt-1 text-white ms-3">Bootstrap</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style="border-radius: 10px;" class="border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/tailwind.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="mt-1 text-white ms-3">Tailwind CSS</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style="border-radius: 10px;" class="border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/laravel.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="mt-1 text-white ms-3">Laravel</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style="border-radius: 10px;" class="border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/ci.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="mt-1 text-white ms-3">Codeigniter</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style="border-radius: 10px;" class="border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/wordpress.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="mt-1 text-white ms-3">Wordpress</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style="border-radius: 10px;" class="border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/next.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="mt-1 text-white ms-3">Next.JS</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style="border-radius: 10px;" class="border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/react.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="mt-1 text-white ms-3">React.JS</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style="border-radius: 10px;" class="border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/vue.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="mt-1 text-white ms-3">Vue.JS</h5>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <br>
	    <div class="container animate__animated animate__fadeInLeft">
	    	<h3 class="text-white font-3">Others</h3>
	    	<hr class="border border-white w-25">
	        <div class="columns">
	            <div class="owl-carousel owl-3 owl-theme">
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/office.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">Ms. Office</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/figma.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">Design</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/writing.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">Copywriter</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-1">
	                        	<img src="{{ asset('assets/images/landing-page/chemistry.webp') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">Research</h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white d-flex align-items-center p-2">
	                    	<div class="col-2">
	                        	<img src="{{ asset('assets/images/landing-page/teach.png') }}" >
	                        </div>
	                        <div class="col-10">
	                        	<h5 class="text-white font-2-400 mt-1 ms-3">Teaching</h5>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<section class="overflow-hidden position-relative" style="border-radius: 20px;">
	<div class="button-gradient-green position-absolute" style="width: 100%; height: 500vh; z-index: -3;"></div>
	<div class="container py-4">
		<div class="row text-center text-white my-4 animate__animated animate__fadeInUp">
            <div class="col-md-6 col-12">
                <div class="container">
                    <h1 style="font-size:4rem"><strong class="num" data-val="50">0</strong>+</h1>
                    <h4 class="text-white">Project Finished</h4>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="container">
                    <h1 style="font-size:4rem"><strong class="num" data-val="5">0</strong></h1>
                    <h4 class="text-white">My Team</h4>
                </div>
            </div>
        </div>
	</div>
</section>
<section class="mt-3">
	<div class="container">
		<h2 class="text-white text-center font-1 animate__animated animate__fadeInLeft">Article</h2>
		<hr class="border border-white">
		<section>
			<div class="row">
				@foreach($artikel as $article)
				<div class="col-lg-3 col-md-6 col-12 animate__animated animate__fadeInUp">
					<div class="blog-cover m-2 border border-white overflow-hidden">
						<a href="{{ URL('article/'.$article->id_article.'/'.$article->title) }}	" class="text-decoration-none blog-column">
							<div class="image-blog-cover overflow-hidden position-relative">
								<img src="{{ asset('assets/images/landing-page/article/'.$article->feature_image) }}" width="100%" >
								<div class="position-absolute button-gradient-green px-2 py-1 rounded" style="top:10px; right: 10px">
									<small>{{ $article->category }}</small>
								</div>
							</div>
							<div class="container my-2">
								<h5>{{ $article->title }}</h5>
								<em><small>{{ $article->created_at }}</small></em>
							</div>
						</a>
					</div>
				</div>
				@endforeach
			</div>
		</section>
		<div class="text-center my-lg-4 my-3">
			<a href="{{ route('article') }}" class="btn button-gradient-green-3">Other Article <i class="fas fa-arrow-right ms-3"></i></a>
		</div>
	</div>
</section>
<section class="overflow-hidden position-relative mt-3" style="border-radius: 20px;">
	<div class="button-gradient-green position-absolute" style="width: 100%; height: 500vh; z-index: -3;"></div>
	<div class="py-3 container">
		<h2 class="text-white text-center font-1 animate__animated animate__fadeInLeft">Portfolio</h2>
		<hr class="border border-white">
		<section>
			<div class="row">
				@foreach($portfolio as $port)
				<div class="col-lg-3 col-md-6 col-12 animate__animated animate__fadeInUp">
					<div class="porto-cover m-2 border border-white overflow-hidden">
						@if($port->category == 'Website')
						<a target="__blank" href="{{ $port->link }}" class="text-decoration-none porto-column">
						@elseif($port->category == 'Journal')
						<a target="__blank" href="{{ URL('assets/pdf/landing-page/portfolio/Journal/'.$port->link) }}" class="text-decoration-none porto-column">
                        @elseif($port->category == 'Skripsi')
						<a target="__blank" href="{{ URL('assets/pdf/landing-page/portfolio/skripsi/'.$port->link) }}" class="text-decoration-none porto-column">
                        @elseif($port->category == 'Design')
                        <a target="__blank" href="{{ URL('assets/images/landing-page/portfolio/design/'.$port->link) }}" class="text-decoration-none porto-column">
						@else
						<a href="" class="text-decoration-none porto-column">
						@endif
							<div class="image-porto-cover overflow-hidden position-relative">
								<img src="{{ asset('assets/images/landing-page/portfolio/thumbnail/'.$port->thumbnail) }}" width="100%" >
								<div class="position-absolute button-gradient-green px-2 py-1 rounded" style="top:10px; right: 10px">
									<small>{{ $port->category }}</small>
								</div>
							</div>
							<div class="container my-lg-2 my-md-1 my-2">
								<h5>{{ $port->title }}</h5>
								<em><small><?= date('Y', strtotime($port->created_at)) ?> ({{ $port->category }})</small></em>
							</div>
						</a>
					</div>
				</div>
				@endforeach
			</div>
		</section>
		<div class="text-center my-lg-4 my-3">
			<a href="{{ route('portfolio') }}" class="btn button-gradient-green-2">Other Portfolio <i class="fas fa-arrow-right ms-3"></i></a>
		</div>
	</div>
</section>
<section class="mt-3">
	<div class="py-3 container">
		<h2 class="text-white text-center font-1 animate__animated animate__fadeInLeft">Testimonial</h2>
		<hr class="border border-white">
		<section>
			<div class="columns">
	            <div class="owl-carousel testimonial-owl owl-theme text-white">
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white p-2">
	                    	<div class="px-4">
		                    	@for($i = 1; $i <6; $i++)
		                    	<i class="fas fa-star text-warning"></i>
		                    	@endfor
		                    	<br><br>
		                    	<p><em>I have ordered many times here, never been disappointed, especially the support which is very fast and friendly</em></p>
		                    </div>
		                    <div class="d-flex align-items-center">
		                    	<div class="col-2">
		                        	<img src="{{ asset('assets/images/landing-page/avatar.webp') }}" >
		                        </div>
		                        <div class="col-10">
		                        	<h5 class="text-white font-2-400 mt-1 ms-3">Anonymous</h5>
		                        </div>
		                    </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white p-2">
	                    	<div class="px-4">
		                    	@for($i = 1; $i <6; $i++)
		                    	<i class="fas fa-star text-warning"></i>
		                    	@endfor
		                    	<br><br>
		                    	<p><em>The product is very good, really worth the price. Even though I asked a lot of questions, CS was patient with my questions.</em></p>
		                    </div>
		                    <div class="d-flex align-items-center">
		                    	<div class="col-2">
		                        	<img src="{{ asset('assets/images/landing-page/avatar.webp') }}" >
		                        </div>
		                        <div class="col-10">
		                        	<h5 class="text-white font-2-400 mt-1 ms-3">Anonymous</h5>
		                        </div>
		                    </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white p-2">
	                    	<div class="px-4">
		                    	@for($i = 1; $i <5; $i++)
		                    	<i class="fas fa-star text-warning"></i>
		                    	@endfor
		                    	<i class="far fa-star text-warning"></i>
		                    	<br><br>
		                    	<p><em>The item arrived as expected, but there was a slight revision. Next time want to order again.</em></p>
		                    </div>
		                    <div class="d-flex align-items-center">
		                    	<div class="col-2">
		                        	<img src="{{ asset('assets/images/landing-page/avatar.webp') }}" >
		                        </div>
		                        <div class="col-10">
		                        	<h5 class="text-white font-2-400 mt-1 ms-3">Anonymous</h5>
		                        </div>
		                    </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div style=" border-radius: 10px;" class="button-gradient-blue border border-white p-2">
	                    	<div class="px-4">
		                    	@for($i = 1; $i <6; $i++)
		                    	<i class="fas fa-star text-warning"></i>
		                    	@endfor
		                    	<br><br>
		                    	<p><em>Procurement Complete items and prices according to the market, the order process is very helpful and can claim a tax invoice. Thank you</em></p>
		                    </div>
		                    <div class="d-flex align-items-center">
		                    	<div class="col-2">
		                        	<img src="{{ asset('assets/images/landing-page/avatar.webp') }}" >
		                        </div>
		                        <div class="col-10">
		                        	<h5 class="text-white font-2-400 mt-1 ms-3">Anonymous</h5>
		                        </div>
		                    </div>
	                    </div>
	                </div>
	            </div>
	        </div>
		</section>
	</div>
</section>
<section id="contact" class="mt-3 overflow-hidden position-relative" style="border-radius: 20px;">
	<div class="button-gradient-green position-absolute" style="width: 100%; height: 500vh; z-index: -3;"></div>
	<div class="py-3 container">
		<h2 class="text-white text-center font-1 animate__animated animate__fadeInLeft">Contact Me</h2>
		<hr class="border border-white">
		<section>
			<div class="row">
				<div class="col-lg-4 mb-2">
					<a target="__blank" href="{{ $profil->whatsapp }}" class="w-100 text-decoration-none btn button-gradient-green-3" style="border-radius: 20px">
						<div class="mt-md-5 mt-3 text-center" >
							<i class="fab fa-whatsapp" style="font-size:4rem"></i>
							<h4 class="mt-5">{{$profil->phone}}</h4>
						</div>
					</a>
				</div>
				<div class="col-lg-4 mb-2">
					<a target="__blank" href="mailto:{{ $profil->email }}" class="w-100 text-decoration-none btn button-gradient-green-3" style="border-radius: 20px">
						<div class="mt-md-5 mt-3 text-center" >
							<i class="far fa-envelope" style="font-size:4rem"></i>
							<h4 class="mt-5">{{$profil->email}}</h4>
						</div>
					</a>
				</div>
				<div class="col-lg-4 mb-2">
					<a href="#" class="w-100 text-decoration-none btn button-gradient-green-3" style="border-radius: 20px">
						<div class="mt-md-5 mt-3 text-center" >
							<i class="fas fa-map-location-dot mb-1" style="font-size:4rem"></i>
							<h4 class="mt-3">{{$profil->address}}</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="row mt-3 text-white">
				<div class="col-md-6">
					<h4 class="font-1">Send Me a Message</h4>
					<form method="post" action="{{ route('add.message') }}">
						@csrf
						<input type="text" required name="name" class="form-control mb-3" placeholder="Your Name">
						<input type="email" required name="email" class="form-control mb-3" placeholder="Your Email">
						<input type="number" required name="phone" class="form-control mb-3" placeholder="Your Phone Number">
						<textarea class="form-control mb-3" required name="message" placeholder="Your Message"></textarea>
						<button type="submit" class="btn button-gradient-green-2">Send<i class="fas fa-arrow-right ms-3"></i></button>
					</form>
				</div>
				<div class="col-md-6">
					<h4 class="font-1">Make an Order</h4>
					<form method="post" action="{{ route('add.order') }}">
						@csrf
						<input type="text" required name="email" class="form-control mb-3" placeholder="Your Email">
						<input type="number" required name="phone" class="form-control mb-3" placeholder="Your Phone Number">
						<select required name="order_category" class="form-control mb-3" placeholder="Your Order Category">
							<option disabled selected value="0">-- Your Order Category --</option>
							<option value="Website">Website</option>
							<option value="Game">Game</option>
							<option value="Application">Application</option>
							<option value="Design">Design</option>
							<option value="Article">Article</option>
							<option value="Journal">Journal</option>
							<option value="Skripsi">Skripsi</option>
							<option value="Task Eksecution">Task Eksecution</option>
						</select>
						<textarea required class="form-control mb-3" name="information" placeholder="Your Order Information"></textarea>
						<button type="submit" class="btn button-gradient-green-2">Order<i class="fas fa-arrow-right ms-3"></i></button>
					</form>
				</div>
			</div>
		</section>
	</div>
</section>
<section class="mt-3 mb-4">
	<div class="py-4 container my-3">
		<div class="overflow-hidden position-relative" style="border-radius:20px">
			<div class="button-gradient-green position-absolute" style="width: 100%; height: 500vh; z-index: -3;"></div>
			<div class="text-center text-white py-3">
				<h2 class="font-1">Ready For Awesome Project With Me?</h2>
				<h4 class="font-3">Let's Talk About Your Project.</h4>
				<br>
				<a href="{{ $profil->whatsapp }}" class="btn button-gradient-green-2">Whatsapp Us <i class="fas fa-arrow-right ms-3"></i></a>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
@endsection
@section('script')
	<script>
        $(document).ready(function() {
        	var profilresp = $('.logo-profil-resp');
            profilresp.owlCarousel({
                margin: 50,
                nav: false,
                dots: false,
                loop: true,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                items: 1
            })
        	var profil = $('.logo-profil');
            profil.owlCarousel({
            	animateOut: 'fadeOut',
                margin: 50,
                nav: false,
                dots: false,
                loop: true,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                items: 1
            })
            var owl = $('.owl-1');
            owl.owlCarousel({
                margin: 50,
                nav: false,
                dots: false,
                loop: true,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })
            var owl2 = $('.owl-2');
            owl2.owlCarousel({
                margin: 50,
                nav: false,
                dots: false,
                loop: true,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })
            var owl3 = $('.owl-3');
            owl3.owlCarousel({
                margin: 50,
                nav: false,
                dots: false,
                loop: true,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })
            var testimonial = $('.testimonial-owl');
            testimonial.owlCarousel({
                margin: 50,
                nav: false,
                dots: false,
                loop: true,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    }
                }
            })
        })

	    let valueDisplay = document.querySelectorAll(".num");
	    let interval = 5000;

	    valueDisplay.forEach((valueDisplay) => {
	        let startValue = 0;
	        let endValue = parseInt(valueDisplay.getAttribute("data-val"))

	        let duration = Math.floor(interval / endValue);
	        let counter = setInterval(function(){
	            startValue += 1;
	            valueDisplay.textContent = startValue;
	            if(startValue == endValue){
	                clearInterval(counter)
	            }
	        }, duration)
	    })
	</script>

	@if (session('successSendMessage'))
		<script type="text/javascript">
		iziToast.success({
			position: "topCenter",
			title: 'Success',
			message: 'Message Send Succesfully'
		});
		</script>
	@endif

	@if (session('successSendOrder'))
		<script type="text/javascript">
		iziToast.success({
			position: "topCenter",
			title: 'Success',
			message: 'Order Send Succesfully'
		});
		</script>
	@endif

@endsection
