@extends('theme-landing.layout')
@section('tittle', 'Portfolio')
@section('content')

<section class="top-article">
	<br class="d-lg-block d-none"><br class="d-lg-block d-none">
	<div class="container">
		<div class="mt-md-3 mt-5 mb-5">
			<section>
				<h1 class="text-white" >Portfolio</h1>
				<div class="border border-white border-1 my-2"></div>
			</section>
			<section>
				<div class="row">
					@foreach($portfolio as $port)
					<div class="col-lg-3 col-md-4 col-12 animate__animated animate__fadeInUp">
						<div class="porto-cover m-2 border border-white overflow-hidden">
							@if($port->category == 'Website')
							<a target="__blank" href="{{ $port->link }}" class="text-decoration-none porto-column">
							@elseif($port->category == 'Journal')
							<a target="__blank" href="{{ URL('assets/pdf/landing-page/portfolio/journal/'.$port->link) }}" class="text-decoration-none porto-column">
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
				{{ $portfolio->links('vendor.pagination.custom') }}
			</section>
		</div>
	</div>
</section>

@endsection
@section('script')

@endsection
