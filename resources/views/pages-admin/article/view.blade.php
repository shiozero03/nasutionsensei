@extends('theme.layout')
@section('tittle', 'Article')
@section('content')
<script type="text/javascript">
  document.getElementById('article').classList.add('active');
</script>
<a href="{{ route('admin.article') }}" class="btn btn-primary"><i class="fas fa-arrow-left me-2"></i>Back</a>
<br>
<section class="top-article">
	<br class="d-lg-block d-none"><br class="d-lg-block d-none">
	<div class="container">
		<div class="mb-5">
			<section>
				<h1 class="text-white text-center " >{{ $artikel->title }}</h1>
				<div class="border border-white border-1 my-2"></div>
			</section>
			<section>
				<div class="row text-white">
					<div class="col-12 my-md-3">
						<div class="artikel-view-blog px-md-4 text-dark">
							<div class="position-relative">
								<img src="{{ asset('assets/images/landing-page/article/'.$artikel->feature_image) }}" width="100%" class="my-2">
								<div class="position-absolute bg-primary px-3 py-2 rounded text-white" style="top:10px; right: 10px">{{ $artikel->category }}</div>
							</div>
							<span class="me-md-4"><i class="fas fa-eye me-2"></i><em>{{ $artikel->view }}</em></span>
							<span><i class="fas fa-calendar-days me-2"></i><em>{{ date('F, d Y H:i:s', strtotime($artikel->created_at) ) }}</em></span>
							<div class="content mt-3 text-dark">
								<?= $artikel->content ?>
							</div>
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