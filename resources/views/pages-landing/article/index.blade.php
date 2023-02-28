@extends('theme-landing.layout')
@section('tittle', 'Article')
@section('content')

<section class="top-article">
	<br class="d-lg-block d-none"><br class="d-lg-block d-none">
	<div class="container">
		<div class="mt-md-3 mt-5 mb-5">
			<section>
				<h1 class="text-white" >Article</h1>
				<div class="border border-white border-1 my-2"></div>
			</section>
			<section>
				<div class="row">
					@foreach($artikel as $article)
					<div class="col-lg-3 col-md-4 col-12 animate__animated animate__fadeInUp">
						<div class="blog-cover m-2 border border-white overflow-hidden">
							<a href="{{ URL('article/'.$article->id_article.'/'.$article->title) }}" class="text-decoration-none blog-column">
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
				{{ $artikel->links('vendor.pagination.custom') }}
			</section>
		</div>
	</div>
</section>

@endsection
@section('script')

@endsection