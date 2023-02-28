@extends('theme-landing.layout')
@section('tittle', 'About')
@section('content')

<section class="top-about">
	<br class="d-lg-block d-none"><br class="d-lg-block d-none">
	<div class="container position-relative" style="z-index: -3;">
		<div class="mx-md-5 my-5">
			<div class="bg-white p-4 top-cv animate__animated animate__fadeInLeft">
				<div class="d-md-flex align-items-center">
					<div class="col-md-3">
						<img src="{{ asset('assets/images/landing-page/'.$profil->profile_picture) }}" width="90%" class="rounded-circle">
					</div>
					<div class="col-md-9 col-lg-8 ms-lg-5">
						<h1 class="text-center">{{ $profil->name }}</h1>
						<div class="border border-dark border-1 mb-2"></div>
						<p>{{ $profil->about }}</p>
					</div>
				</div>
			</div>
			<div class="button-gradient-green p-4 section-cv animate__animated animate__fadeInRight">
				<div class="row">
					<div class="col-md-6 left-content-about">
						<div>
							<h1 class="text-center"><strong>Contact</strong></h1>
							<div class="border border-white border-1 mb-2"></div>
							<table>
								<tbody>
									<tr>
										<td><i class="fas fa-user-circle text-white me-2"></i></td>
										<td>{{ $profil->name }}</td>
									</tr>
									<tr>
										<td><i class="fas fa-location-dot text-danger me-2"></i></td>
										<td>{{ $profil->address }}</td>
									</tr>
									<tr>
										<td><i class="fas fa-phone text-success me-2"></i></td>
										<td>{{ $profil->phone }}</td>
									</tr>
									<tr>
										<td><i class="fas fa-envelope text-warning me-2"></i></td>
										<td>{{ $profil->email }}</td>
									</tr>
									<tr>
										<td><i class="fas fa-globe text-info me-2"></i></td>
										<td>{{ $profil->url }}</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="border border-white border-1 my-2"></div>
						<div>
							<h3><strong>Organization</strong></h3>
							<ul>
								@foreach($organization as $org)
								<li>{{ $org->name }}</li>
								@endforeach
							</ul>
						</div>
						<div class="border border-white border-1 my-2"></div>
						<div>
							<h3><strong>Achievement</strong></h3>
							<ul>
								@foreach($achievement as $ach)
								<li>{{ $ach->name }}</li>
								@endforeach
							</ul>
						</div>
						<div class="border border-white border-1 my-2"></div>
						<div>
							<h3><strong>Certification</strong></h3>
							<ul>
								@foreach($sertification as $sertif)
								<li>{{ $sertif->name }}</li>
								@endforeach
							</ul>
						</div>
						<div class="border border-white border-1 my-2"></div>
						<div>
							<h3><strong>Job Experience</strong></h3>
							<hr class="d-md-none">
							@foreach($job as $jb)
							<div class="jexp ms-lg-4 ms-md-3">
								<strong>{{ $jb->location }}</strong><br>
								<em>{{ $jb->position }}</em>
								<br><br>
								<span>{{ $jb->about }}</span><br>
								<em>{{ $jb->date }}</em>
							</div>
							<hr>
							@endforeach
						</div>
					</div>
					<div class="col-md-6">
						<div>
							<h1 class="text-center"><strong>Education</strong></h1>
							<div class="border border-white border-1 mb-4"></div>
							@foreach($edu as $education)
							<div class="d-flex align-items-center">
								<div class="col-3 text-center">
									<img src="{{ asset('assets/images/landing-page/'.$education->school_logo) }}" width="75%">
								</div>
								<div class="col-9">
									<div class="jexp ms-lg-4 ms-md-3">
										<strong>{{ $education->school_name }}</strong><br>
										<em>{{ $education->afillate }}</em>
										<br><br>
										<em>{{ $education->year }}</em>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<br>
						<div>
							<h1 class="text-center"><strong>Language</strong></h1>
							<div class="border border-white border-1 mb-4"></div>
							<div class="row">
								@foreach($lang as $ln)
								<div class="col-4 text-center">
									<img src="{{ asset('assets/images/landing-page/'.$ln->picture) }}" width="75%">
								</div>
								@endforeach
							</div>
						</div>
						<br>
						<div>
							<h1 class="text-center"><strong>Soft Skill</strong></h1>
							<div class="border border-white border-1 mb-2"></div>
							<div>
								<ul>
									@foreach($softskill as $ss)
									<li class="float-start col-6">{{ $ss->name }}</li>
									@endforeach
								</ul>
								<div class="clearfix"></div>
							</div>
						</div>
						<br>
						<div>
							<h1 class="text-center"><strong>Hard Skill</strong></h1>
							<div class="border border-white border-1 mb-2"></div>
							<div>
								<ul class="float-start col-md-4 col-12">
									@foreach($hardskill as $hs)
									<li>{{ $hs->name }}</li>
									@endforeach
								</ul>
								<div class="float-start col-md-8 col-12">
									<h5 class="text-center col-8">Programming</h5>	
									<ul>
										@foreach($programming as $program)
										<li class="float-start col-6">{{$program->name}}</li>
										@endforeach
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
@section('script')

@endsection