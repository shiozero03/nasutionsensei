@extends('theme-landing.layout')
@section('tittle', $artikel->title)
@section('content')

<section class="top-article">
	<br class="d-lg-block d-none"><br class="d-lg-block d-none">
	<div class="container">
		<div class="mt-md-3 mt-5 mb-5">
			<section>
				<h1 class="text-white text-center " >{{ $artikel->title }}</h1>
				<div class="border border-white border-1 my-2"></div>
			</section>
			<section>
				<div class="row text-white">
					<div class="col-lg-9 col-md-8 col-12 my-md-3">
						<div class="artikel-view-blog px-md-4">
							<div class="position-relative">
								<img src="{{ asset('assets/images/landing-page/article/'.$artikel->feature_image) }}" width="100%" class="my-2">
								<div class="position-absolute button-gradient-green px-3 py-2 rounded" style="top:10px; right: 10px">{{ $artikel->category }}</div>
							</div>
							<span class="me-md-4"><i class="fas fa-eye me-2"></i><em>{{ $artikel->view }}</em></span>
							<span><i class="fas fa-calendar-days me-2"></i><em>{{ date('F, d Y H:i:s', strtotime($artikel->created_at) ) }}</em></span>
							<div class="content mt-3">
								<?= $artikel->content ?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-12 my-md-3">
						<div class="other-artikel">
							<h3>Other {{ $artikel->category }}</h3>
							<div class="border border-white border-1 my-2"></div>
							@foreach($other as $oth)
							<a href="{{ URL('article/'.$oth->id_article.'/'.$oth->title) }}}" class="blog-view-column text-decoration-none">
								<div class="d-flex align-items-center my-2">
									<div class="col-4">
										<img src="{{ asset('assets/images/landing-page/article/'.$oth->feature_image) }}" width="80%">
									</div>
									<div class="col-8">
										<h6 class="mb-2"><strong>{{ $oth->title }}</strong></h6>
										<small><em>{{ date('F, d Y', strtotime($oth->created_at) ) }}</em></small>
									</div>
								</div>
							</a>
							<div class="border border-white border-1 my-2"></div>
							@endforeach
							<div class="mt-md-5 mt-3 text-center button-gradient-green py-4" style="border-radius: 20px">
								<i class="fas fa-phone-volume" style="font-size:4rem"></i>
								<h2 class="mt-4">{{$profil->phone}}</h2>
							</div>
							<section class="text-white mt-md-5 mt-3">
								<form action="{{ route('add.comment') }}" method="post">
									@csrf
									<h5><em>Give Your Feedback Here</em></h5>
									<input type="hidden" name="id_article" value="{{ $artikel->id_article }}">
									<input type="text" name="name" class="form-control mb-2" id="name" value="Anonymous" placeholder="Your Name Here">
									<textarea class="form-control mb-2" placeholder="Your Comment Here" name="comment"></textarea>
									<button class="btn btn-light btn-outline-success">Submit</button>
								</form>
							</section>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>

@endsection
@section('script')

	@if (session('successSendFeedback'))
		<script type="text/javascript">
		iziToast.success({
			position: "topCenter",
			title: 'Success',
			message: 'Feedback Send Succesfully'
		});
		</script>
	@endif
	
@endsection