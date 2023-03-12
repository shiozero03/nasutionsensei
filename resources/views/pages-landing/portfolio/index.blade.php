@extends('theme-landing.layout')
@section('tittle', 'Portfolio')
@section('content')

<section class="top-article">
	<br class="d-lg-block d-none"><br class="d-lg-block d-none">
	<div class="container">
		<div class="mt-md-3 mt-5 mb-5">
			<section>
                <div class="d-md-flex align-items-center">
				    <h1 class="text-white col-md-8" >Portfolio</h1>
                    <div class="col-md-4 text-md-end">
                        <select id="change-porto" class="form-control">
                            <option value="Website">Website</option>
                            <option value="Journal">Journal</option>
                            <option value="Skripsi">Skripsi</option>
                            <option value="Design">Design</option>
                        </select>
                    </div>
                </div>
				<div class="border border-white border-1 my-2"></div>
			</section>
			<section>
                <div id="Website">
				    <div class="row">
                        @foreach($portfolio as $port)
                            @if($port->category == 'Website')
                            <div class="col-lg-3 col-md-4 col-12 animate__animated animate__fadeInUp">
                                <div class="porto-cover m-2 border border-white overflow-hidden">
                                    <a target="__blank" href="{{ $port->link }}" class="text-decoration-none porto-column">
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
                            @endif
                        @endforeach
                    </div>
                    {{ $portfolio->links('vendor.pagination.custom') }}
                </div>
                <div id="Journal">
                    <div class="row">
                        @foreach($portfolio as $port)
                            @if($port->category == 'Journal')
                            <div class="col-lg-3 col-md-4 col-12 animate__animated animate__fadeInUp">
                                <div class="porto-cover m-2 border border-white overflow-hidden">
                                    <a target="__blank" href="{{ URL('assets/pdf/landing-page/portfolio/journal/'.$port->link) }}" class="text-decoration-none porto-column">
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
                            @endif
                        @endforeach
                    </div>
                    {{ $portfolio->links('vendor.pagination.custom') }}
                </div>
                <div id="Skripsi">
                    <div class="row">
                        @foreach($portfolio as $port)
                            @if($port->category == 'Skripsi')
                            <div id="Skripsi" class="col-lg-3 col-md-4 col-12 animate__animated animate__fadeInUp">
                                <div class="porto-cover m-2 border border-white overflow-hidden">
                                    <a target="__blank" href="{{ URL('assets/pdf/landing-page/portfolio/skripsi/'.$port->link) }}" class="text-decoration-none porto-column">
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
                            @endif
                        @endforeach
                    </div>
                    {{ $portfolio->links('vendor.pagination.custom') }}
                </div>
                <div id="Design">
                    <div class="row">
                        @foreach($portfolio as $port)
                            @if($port->category == 'Design')
                            <div class="col-lg-3 col-md-4 col-12 animate__animated animate__fadeInUp" id="Design">
                                <div class="porto-cover m-2 border border-white overflow-hidden">
                                    <a target="__blank" href="{{ URL('assets/images/landing-page/portfolio/design/'.$port->link) }}" class="text-decoration-none porto-column">
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
                            @endif
                        @endforeach
                    </div>
                    {{ $portfolio->links('vendor.pagination.custom') }}
                </div>
			</section>
		</div>
	</div>
</section>

@endsection
@section('script')
    <script>
    $(document).ready(function(){
        $('#Journal').slideUp('d-none')
        $('#Skripsi').slideUp('d-none')
        $('#Design').slideUp('d-none')
    })
        $(document).on('change', '#change-porto', function(){
            if($('#change-porto').val() == 'Journal'){
                $('#Website').slideUp('d-none')
                $('#Skripsi').slideUp('d-none')
                $('#Design').slideUp('d-none')
                $('#Journal').slideDown('d-none')
            } else if($('#change-porto').val() == 'Skripsi'){
                $('#Website').slideUp('d-none')
                $('#Journal').slideUp('d-none')
                $('#Design').slideUp('d-none')
                $('#Skripsi').slideDown('d-none')
            } else if($('#change-porto').val() == 'Design'){
                $('#Website').slideUp('d-none')
                $('#Journal').slideUp('d-none')
                $('#Skripsi').slideUp('d-none')
                $('#Design').slideDown('d-none')
            } if($('#change-porto').val() == 'Website'){
                $('#Skripsi').slideUp('d-none')
                $('#Journal').slideUp('d-none')
                $('#Design').slideUp('d-none')
                $('#Website').slideDown('d-none')
            }
        })
    </script>
@endsection
