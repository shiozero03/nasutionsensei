@extends('theme.layout')
@section('tittle', 'Profile')
@section('content')
<script type="text/javascript">
  document.getElementById('profile').classList.add('active');
</script>
<div class="container">
    <button class="btn btn-primary" id="general-info">General Info</button>
    <button class="btn btn-light" id="organization-info">Organization Info</button>
    <button class="btn btn-light" id="skill-info">Skill Info</button>
    <button class="btn btn-light" id="job-info">Job Experience</button>
    <button class="btn btn-light" id="education-info">Education</button>
    <button class="btn btn-light" id="language-info">Language</button>

    <div class="row animate__animated animate__fadeInDown" id="info-umum">
        <div class="col-lg-3 col-md-4 col-12">
            <form class="text-center" action="{{ route('update.profilpicture') }}" accept="image/png, image/jpg, image/jpeg, image/svg" method="post" enctype="multipart/form-data">
                @csrf
                <img id="imagefet" src="{{ asset('assets/images/landing-page/'.$profil->profile_picture) }}" width="100%" class="border border-dark border-5">
                <input type="file" name="profile_picture" id="profile_picture" class="form-control my-2" required>
                <button class="btn btn-primary">Change Profile Picture</button>
            </form>
            <div class="border-5 border border-dark w-100 my-2"></div>
            <form  method="post" action="{{ route('update.login') }}">
                @csrf
                <label><h6>Username</h6></label>
                <input type="text" name="username" value="{{ $profil->username }}" class="form-control mb-2" required>
                <label><h6>Password</h6></label>
                <input type="password" name="password" value="{{ $profil->password }}" class="form-control mb-2" required>
                <div class="text-center">
                    <button class="btn btn-primary">Change User Login</button>
                </div>
            </form>
        </div>
        <div class="col-lg-9 col-md-8 col-12">
            <form class="bg-white p-2 rounded" action="{{ route('update.userinfo') }}" method="post">
                @csrf
                <label><h6>Name &nbsp; :</h6></label>
                <input type="text" name="name" value="{{ $profil->name }}" class="form-control mb-2" required>
                <label><h6>About &nbsp; :</h6></label>
                <textarea name="about" class="form-control mb-2" required rows="5">{{ $profil->about }}</textarea>
                <label><h6>Address &nbsp; :</h6></label>
                <input type="text" name="address" value="{{ $profil->address }}" class="form-control mb-2" required>
                <label><h6>Phone Number &nbsp; :</h6></label>
                <input type="number" name="phone" value="{{ $profil->phone }}" class="form-control mb-2" required>
                <label><h6>Email &nbsp; :</h6></label>
                <input type="email" name="email" value="{{ $profil->email }}" class="form-control mb-2" required>
                <label><h6>URL &nbsp; :</h6></label>
                <input type="text" name="url" value="{{ $profil->url }}" class="form-control mb-2" required>
                <label><h6>Whatsapp Link &nbsp; :</h6></label>
                <input type="text" name="whatsapp" value="{{ $profil->whatsapp }}" class="form-control mb-2">
                <label><h6>Github Link &nbsp; :</h6></label>
                <input type="text" name="github" value="{{ $profil->github }}" class="form-control mb-2">
                <label><h6>Instagram Link &nbsp; :</h6></label>
                <input type="text" name="instagram" value="{{ $profil->instagram }}" class="form-control mb-2">
                <label><h6>Facebook Link &nbsp; :</h6></label>
                <input type="text" name="facebook" value="{{ $profil->facebook }}" class="form-control mb-2">
                <label><h6>Youtube Link &nbsp; :</h6></label>
                <input type="text" name="youtube" value="{{ $profil->youtube }}" class="form-control mb-2">
                <button class="btn btn-primary">Change User Info</button>
            </form>
        </div>
    </div>
    <div class="container animate__animated animate__fadeInDown d-none bg-white p-2 rounded" id="info-organization">
        <div class="row">
            <div class="col-lg-4 col-12">
                <h5 class="float-start text-start">Organization</h5>
                <h5 class="float-end text-end"><i class="fas fa-plus-square" id="call-organization" style="cursor: pointer;"></i></h5>
                <div class="clearfix"></div>
                <form id="form-organization" class="d-none" method="post" action="{{ route('add.userorganization') }}">
                    @csrf
                    <input required type="text" name="name" class="form-control mb-2">
                    <button class="btn btn-primary">Send <i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="border-2 border border-dark w-100 mb-2"></div>
                <table>
                    <tbody>
                        @foreach($organisasi as $org)

                        @if($org->category == 'Organization')
                        <tr>
                            <td><a style="font-size:75%" href="{{ URL('admin/delete/profil/user-organization/'.$org->id_organization) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                            <td>{{ $org->name }}</td>
                        </tr>
                        @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 col-12">
                <h5 class="float-start text-start">Achievement</h5>
                <h5 class="float-end text-end"><i class="fas fa-plus-square" id="call-achievement" style="cursor: pointer;"></i></h5>
                <div class="clearfix"></div>
                <form id="form-achievement" class="d-none" method="post" action="{{ route('add.userachievement') }}">
                    @csrf
                    <input required type="text" name="name" class="form-control mb-2">
                    <button class="btn btn-primary">Send <i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="border-2 border border-dark w-100 mb-2"></div>
                <table>
                    <tbody>
                        @foreach($organisasi as $org)

                        @if($org->category == 'Achievement')
                        <tr>
                            <td><a style="font-size:75%" href="{{ URL('admin/delete/profil/user-organization/'.$org->id_organization) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                            <td>{{ $org->name }}</td>
                        </tr>
                        @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 col-12">
                <h5 class="float-start text-start">Sertification</h5>
                <h5 class="float-end text-end"><i class="fas fa-plus-square" id="call-sertification" style="cursor: pointer;"></i></h5>
                <div class="clearfix"></div>
                <form id="form-sertification" class="d-none" method="post" action="{{ route('add.usersertification') }}">
                    @csrf
                    <input type="text" name="name" class="form-control mb-2">
                    <button class="btn btn-primary">Send <i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="border-2 border border-dark w-100 mb-2"></div>
                <table>
                    <tbody>
                        @foreach($organisasi as $org)

                        @if($org->category == 'Sertification')
                        <tr>
                            <td><a style="font-size:75%" href="{{ URL('admin/delete/profil/user-organization/'.$org->id_organization) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                            <td>{{ $org->name }}</td>
                        </tr>
                        @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container animate__animated animate__fadeInDown d-none bg-white p-2 rounded" id="info-skill">
        <div class="row">
            <div class="col-lg-4 col-12">
                <h5 class="float-start text-start">Soft Skill</h5>
                <h5 class="float-end text-end"><i class="fas fa-plus-square" id="call-softskill" style="cursor: pointer;"></i></h5>
                <div class="clearfix"></div>
                <form id="form-softskill" class="d-none" method="post" action="{{ route('add.usersoftskill') }}">
                    @csrf
                    <input type="text" name="name" class="form-control mb-2">
                    <button class="btn btn-primary">Send <i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="border-2 border border-dark w-100 mb-2"></div>
                <table>
                    <tbody>
                        @foreach($skill as $sk)

                        @if($sk->category == 'Soft Skill' && $sk->category_hardskill == null)
                        <tr>
                            <td><a style="font-size:75%" href="{{ URL('admin/delete/profil/user-skill/'.$sk->id_skill) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                            <td>{{ $sk->name }}</td>
                        </tr>
                        @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 col-12">
                <h5 class="float-start text-start">Hard Skill</h5>
                <h5 class="float-end text-end"><i class="fas fa-plus-square" id="call-hardskill" style="cursor: pointer;"></i></h5>
                <div class="clearfix"></div>
                <form id="form-hardskill" class="d-none" method="post" action="{{ route('add.userhardskill') }}">
                    @csrf
                    <input type="text" name="name" class="form-control mb-2">
                    <button class="btn btn-primary">Send <i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="border-2 border border-dark w-100 mb-2"></div>
                <table>
                    <tbody>
                        @foreach($skill as $sk)

                        @if($sk->category == 'Hard Skill' && $sk->category_hardskill == null)
                        <tr>
                            <td><a style="font-size:75%" href="{{ URL('admin/delete/profil/user-skill/'.$sk->id_skill) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                            <td>{{ $sk->name }}</td>
                        </tr>
                        @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 col-12">
                <h5 class="float-start text-start">Programming</h5>
                <h5 class="float-end text-end"><i class="fas fa-plus-square" id="call-programming" style="cursor: pointer;"></i></h5>
                <div class="clearfix"></div>
                <form id="form-programming" class="d-none" method="post" action="{{ route('add.userhardskillprogramming') }}">
                    @csrf
                    <input type="text" name="name" class="form-control mb-2">
                    <button class="btn btn-primary">Send <i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="border-2 border border-dark w-100 mb-2"></div>
                <table>
                    <tbody>
                        @foreach($skill as $sk)

                        @if($sk->category == 'Hard Skill' && $sk->category_hardskill == 'Programming')
                        <tr>
                            <td><a style="font-size:75%" href="{{ URL('admin/delete/profil/user-skill/'.$sk->id_skill) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                            <td>{{ $sk->name }}</td>
                        </tr>
                        @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container animate__animated animate__fadeInDown d-none bg-dark p-2 rounded" id="info-job">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jobmodaladd"><i class="fas fa-plus-circle me-3"></i>Add Data</button>
        <div class="data-cover position-relative">
            <table id="datatable" class="table-bordered bg-white text-dark w-100">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="px-3 py-3">Id</th>
                        <th class="px-3 py-3">Location</th>
                        <th class="px-3 py-3">Position</th>
                        <th class="px-3 py-3">About</th>
                        <th class="px-3 py-3">Date</th>
                        <th class="px-3 py-3">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <br>
    </div>

    <div class="container animate__animated animate__fadeInDown d-none bg-dark p-2 rounded" id="info-education">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#educationmodaladd"><i class="fas fa-plus-circle me-3"></i>Add Data</button>
        <div class="data-cover position-relative">
            <table id="datatableeducation" class="table-bordered bg-light text-dark w-100">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="px-3 py-3">Id</th>
                        <th class="px-3 py-3" width="25%">Logo</th>
                        <th class="px-3 py-3">Name</th>
                        <th class="px-3 py-3">Afillation</th>
                        <th class="px-3 py-3">Year</th>
                        <th class="px-3 py-3">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <br>
    </div>

    <div class="container animate__animated animate__fadeInDown d-none bg-dark p-2 rounded" id="info-language">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#languagemodaladd"><i class="fas fa-plus-circle me-3"></i>Add Data</button>
        <div class="data-cover position-relative">
            <table id="datatablelanguage" class="table-bordered bg-light text-dark w-100">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="px-3 py-3">Id</th>
                        <th class="px-3 py-3" width="25%">Picture</th>
                        <th class="px-3 py-3">Name</th>
                        <th class="px-3 py-3">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <br>
    </div>
</div>
<div class="modal fade" id="jobmodaladd" tabindex="-1" aria-labelledby="jobmodaladdLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="jobmodaladdLabel">Add Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('add.userjob') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" class="form-control mb-3" required>
            </div>
            <div class="form-group">
                <label>Position</label>
                <input type="text" name="position" class="form-control mb-3" required>
            </div>
            <div class="form-group">
                <label>About</label>
                <textarea rows="5" class="form-control" name="about"></textarea>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="text" name="date" class="form-control mb-3" required>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="updateJob" tabindex="-1" aria-labelledby="updateJobLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateJobLabel">Update Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('update.userjob') }}" method="post">
            @csrf
            <input type="hidden" name="id_job" id="id_job">
            <div class="form-group">
                <label>Location</label>
                <input id="location" type="text" name="location" class="form-control mb-3" required>
            </div>
            <div class="form-group">
                <label>Position</label>
                <input id="position" type="text" name="position" class="form-control mb-3" required>
            </div>
            <div class="form-group">
                <label>About</label>
                <textarea id="about" rows="5" class="form-control" name="about"></textarea>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input id="date" type="text" name="date" class="form-control mb-3" required>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="languagemodaladd" tabindex="-1" aria-labelledby="languagemodaladdLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="languagemodaladdLabel">Add Language</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('add.userlanguage') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="text-center">
                    <img src="" id="pictureskillshow" class="w-50">
                </div>
                <label>Picture</label>
                <input type="file" name="picture" class="form-control mb-3" required id="picture-change" accept="image/png, image/jpg, image/jpeg, image/svg">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control mb-3" required>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="educationmodaladd" tabindex="-1" aria-labelledby="educationmodaladdLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="educationmodaladdLabel">Add Education</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('add.usereducation') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="text-center">
                    <img src="" id="school_logo" class="w-50">
                </div>
                <label>School Logo</label>
                <input type="file" name="school_logo" class="form-control mb-3" required id="logo-change" accept="image/png, image/jpg, image/jpeg, image/svg">
            </div>
            <div class="form-group">
                <label>School Name</label>
                <input type="text" name="school_name" class="form-control mb-3" required>
            </div>
            <div class="form-group">
                <label>Afillate</label>
                <input type="text" name="afillate" class="form-control mb-3" required>
            </div>
            <div class="form-group">
                <label>Start Year</label>
                <input type="number" name="startyear" class="form-control mb-3" required>
            </div>
            <label><input type="checkbox" name="still" id="still"> I am still here</label><br>
            <div class="form-group" id="endyear">
                <label>End Year</label>
                <input type="number" name="endyear" class="form-control mb-3">
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="updateEducation" tabindex="-1" aria-labelledby="updateEducationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateEducationLabel">Update Education</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('update.usereducation') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="" name="id_education" id="id_education">
                <div class="text-center">
                    <img src="" id="school_logo_2" class="w-50">
                </div>
                <label>School Logo</label>
                <input type="file" name="school_logo" class="form-control mb-3" id="logo-change-2" accept="image/png, image/jpg, image/jpeg, image/svg">
            </div>
            <div class="form-group">
                <label>School Name</label>
                <input type="text" name="school_name" class="form-control mb-3" required id="school_name">
            </div>
            <div class="form-group">
                <label>Afillate</label>
                <input type="text" name="afillate" class="form-control mb-3" required id="afillate">
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="text" name="startyear" class="form-control mb-3" required id="year">
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
@section('script')

    @if (session('successUpdateProfile'))
        <script type="text/javascript">
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: 'Profile update succesfully'
        });
        </script>
    @endif
    @if (session('successAddProfile'))
        <script type="text/javascript">
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: 'Profile info add succesfully'
        });
        </script>
    @endif
    @if (session('successDeleteOrganization'))
        <script type="text/javascript">
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: 'Organization info delete succesfully'
        });
        </script>
    @endif
    @if (session('successDeleteSkill'))
        <script type="text/javascript">
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: 'Skill delete succesfully'
        });
        </script>
    @endif
    @if (session('successDeleteJob'))
        <script type="text/javascript">
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: 'Job Experience delete succesfully'
        });
        </script>
    @endif
    @if (session('successDeleteEducation'))
        <script type="text/javascript">
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: 'Education delete succesfully'
        });
        </script>
    @endif

    <script>
        let icon = document.getElementById('profile_picture');
        let imagefet = document.getElementById('imagefet');
        icon.addEventListener('change', function () {
            gambar(this);
        })
        let pictureskillfile = document.getElementById('picture-change');
        let pictureskillshow = document.getElementById('pictureskillshow');
        pictureskillfile.addEventListener('change', function () {
            gambar2(this);
        })
        let logochange = document.getElementById('logo-change');
        let school_logo = document.getElementById('school_logo');
        logochange.addEventListener('change', function () {
            gambar3(this);
        })
        let logochange_2 = document.getElementById('logo-change-2');
        let school_logo_2 = document.getElementById('school_logo_2');
        logochange_2.addEventListener('change', function () {
            gambar4(this);
        })
        function gambar(a) {
            if (a.files && a.files[0]) {     
                var reader = new FileReader();    
                reader.onload = function (e) {
                    imagefet.src=e.target.result;
                }    
                reader.readAsDataURL(a.files[0]);
            }
        }
        function gambar2(a) {
            if (a.files && a.files[0]) {     
                var reader = new FileReader();    
                reader.onload = function (e) {
                    pictureskillshow.src=e.target.result;
                }    
                reader.readAsDataURL(a.files[0]);
            }
        }
        function gambar3(a) {
            if (a.files && a.files[0]) {     
                var reader = new FileReader();    
                reader.onload = function (e) {
                    school_logo.src=e.target.result;
                }    
                reader.readAsDataURL(a.files[0]);
            }
        }
        function gambar4(a) {
            if (a.files && a.files[0]) {     
                var reader = new FileReader();    
                reader.onload = function (e) {
                    school_logo_2.src=e.target.result;
                }    
                reader.readAsDataURL(a.files[0]);
            }
        }
        $(document).on('change', '#still', function(){
            if($('#still').val() == 'on'){
                $('#endyear').addClass('d-none')
            } else{
                $('#endyear').removeClass('d-none')
            }

        })
    </script>
    <script>
        $(document).on('click', '#general-info', function(){
            $('#info-umum').removeClass('d-none')
            $('#info-organization').addClass('d-none')
            $('#info-skill').addClass('d-none')
            $('#general-info').addClass('btn-primary')
            $('#general-info').removeClass('btn-light')
            $('#organization-info').addClass('btn-light')
            $('#organization-info').removeClass('btn-primary')
            $('#skill-info').removeClass('btn-primary')
            $('#skill-info').addClass('btn-light')
            $('#info-job').addClass('d-none')
            $('#info-education').addClass('d-none')
            $('#info-language').addClass('d-none')
            $('#job-info').removeClass('btn-primary')
            $('#job-info').addClass('btn-light')
            $('#education-info').removeClass('btn-primary')
            $('#education-info').addClass('btn-light')
            $('#language-info').removeClass('btn-primary')
            $('#language-info').addClass('btn-light')
        })
        $(document).on('click', '#organization-info', function(){
            $('#info-umum').addClass('d-none')
            $('#info-organization').removeClass('d-none')
            $('#info-skill').addClass('d-none')
            $('#general-info').removeClass('btn-primary')
            $('#general-info').addClass('btn-light')
            $('#organization-info').removeClass('btn-light')
            $('#organization-info').addClass('btn-primary')
            $('#skill-info').removeClass('btn-primary')
            $('#skill-info').addClass('btn-light')
            $('#info-job').addClass('d-none')
            $('#info-education').addClass('d-none')
            $('#info-language').addClass('d-none')
            $('#job-info').removeClass('btn-primary')
            $('#job-info').addClass('btn-light')
            $('#education-info').removeClass('btn-primary')
            $('#education-info').addClass('btn-light')
            $('#language-info').removeClass('btn-primary')
            $('#language-info').addClass('btn-light')
        })
        $(document).on('click', '#skill-info', function(){
            $('#info-umum').addClass('d-none')
            $('#info-organization').addClass('d-none')
            $('#info-skill').removeClass('d-none')
            $('#general-info').removeClass('btn-primary')
            $('#general-info').addClass('btn-light')
            $('#organization-info').addClass('btn-light')
            $('#organization-info').removeClass('btn-primary')
            $('#skill-info').addClass('btn-primary')
            $('#skill-info').removeClass('btn-light')
            $('#info-job').addClass('d-none')
            $('#info-education').addClass('d-none')
            $('#info-language').addClass('d-none')
            $('#job-info').removeClass('btn-primary')
            $('#job-info').addClass('btn-light')
            $('#education-info').removeClass('btn-primary')
            $('#education-info').addClass('btn-light')
            $('#language-info').removeClass('btn-primary')
            $('#language-info').addClass('btn-light')
        })
        $(document).on('click', '#job-info', function(){
            $('#info-umum').addClass('d-none')
            $('#info-organization').addClass('d-none')
            $('#info-skill').addClass('d-none')
            $('#general-info').removeClass('btn-primary')
            $('#general-info').addClass('btn-light')
            $('#organization-info').addClass('btn-light')
            $('#organization-info').removeClass('btn-primary')
            $('#skill-info').removeClass('btn-primary')
            $('#skill-info').addClass('btn-light')
            $('#info-job').removeClass('d-none')
            $('#info-education').addClass('d-none')
            $('#info-language').addClass('d-none')
            $('#job-info').addClass('btn-primary')
            $('#job-info').removeClass('btn-light')
            $('#education-info').removeClass('btn-primary')
            $('#education-info').addClass('btn-light')
            $('#language-info').removeClass('btn-primary')
            $('#language-info').addClass('btn-light')
        })
        $(document).on('click', '#education-info', function(){
            $('#info-umum').addClass('d-none')
            $('#info-organization').addClass('d-none')
            $('#info-skill').addClass('d-none')
            $('#general-info').removeClass('btn-primary')
            $('#general-info').addClass('btn-light')
            $('#organization-info').addClass('btn-light')
            $('#organization-info').removeClass('btn-primary')
            $('#skill-info').removeClass('btn-primary')
            $('#skill-info').addClass('btn-light')
            $('#info-job').addClass('d-none')
            $('#info-education').removeClass('d-none')
            $('#info-language').addClass('d-none')
            $('#job-info').removeClass('btn-primary')
            $('#job-info').addClass('btn-light')
            $('#education-info').addClass('btn-primary')
            $('#education-info').removeClass('btn-light')
            $('#language-info').removeClass('btn-primary')
            $('#language-info').addClass('btn-light')
        })
        $(document).on('click', '#language-info', function(){
            $('#info-umum').addClass('d-none')
            $('#info-organization').addClass('d-none')
            $('#info-skill').addClass('d-none')
            $('#general-info').removeClass('btn-primary')
            $('#general-info').addClass('btn-light')
            $('#organization-info').addClass('btn-light')
            $('#organization-info').removeClass('btn-primary')
            $('#skill-info').removeClass('btn-primary')
            $('#skill-info').addClass('btn-light')
            $('#info-job').addClass('d-none')
            $('#info-education').addClass('d-none')
            $('#info-language').removeClass('d-none')
            $('#job-info').removeClass('btn-primary')
            $('#job-info').addClass('btn-light')
            $('#education-info').removeClass('btn-primary')
            $('#education-info').addClass('btn-light')
            $('#language-info').addClass('btn-primary')
            $('#language-info').removeClass('btn-light')
        })
    </script>
    <script>

        $(document).on('click', '#call-organization', function(){
            $('#form-organization').toggleClass('d-none')
        })
        $(document).on('click', '#call-achievement', function(){
            $('#form-achievement').toggleClass('d-none')
        })
        $(document).on('click', '#call-sertification', function(){
            $('#form-sertification').toggleClass('d-none')
        })
        $(document).on('click', '#call-softskill', function(){
            $('#form-softskill').toggleClass('d-none')
        })
        $(document).on('click', '#call-hardskill', function(){
            $('#form-hardskill').toggleClass('d-none')
        })
        $(document).on('click', '#call-programming', function(){
            $('#form-programming').toggleClass('d-none')
        })
    </script>
    <script>
        $(function () {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                responsive : true,
                pagingType: 'numbers',
                ajax: "{{ route('json.job') }}",
                columns: [
                    {data: 'id_job', name: 'id_job'},
                    {data: 'location', name: 'location'},
                    {data: 'position', name: 'position'},
                    {data: 'about', name: 'about'},
                    {data: 'date', name: 'date'},
                    {data: 'action', name: 'action'},
                ]
            });
        });
        $(document).on('click', '.update', function(){
            let id_job = $(this).attr('id_job')
            $('#updateJob').modal('show')

            $('#id_job').val(null)
            $('#location').val(null)
            $('#position').val(null)
            $('#about').html('')
            $('#date').val(null)

            $.ajax({
              url : "{{ route('edit.job') }}",
              type : 'post',
              data : {
                id_job : id_job,
                "_token" : "{{ csrf_token()}}"
              },
              success : function(cek){
                $('#id_job').val(cek.data.id_job)
                $('#location').val(cek.data.location)
                $('#position').val(cek.data.position)
                $('#about').html(cek.data.about)
                $('#date').val(cek.data.date)

              },
              error : function(xhr){
                alert(xhr.text)
              }
            });
        })
    </script>
    <script>
        $(function () {
            $('#datatablelanguage').DataTable({
                processing: true,
                serverSide: true,
                responsive : true,
                pagingType: 'numbers',
                ajax: "{{ route('json.language') }}",
                columns: [
                    {data: 'id_skill', name: 'id_skill'},
                    {data: 'image', name: 'image'},
                    {data: 'name', name: 'name'},
                    {data: 'action', name: 'action'},
                ]
            });
        });
    </script>
    <script>
        let urlsrcedu = "{{ asset('assets/images/landing-page') }}"
        $(function () {
            $('#datatableeducation').DataTable({
                processing: true,
                serverSide: true,
                responsive : true,
                pagingType: 'numbers',
                ajax: "{{ route('json.education') }}",
                columns: [
                    {data: 'id_education', name: 'id_education'},
                    {data: 'image', name: 'image'},
                    {data: 'school_name', name: 'school_name'},
                    {data: 'afillate', name: 'afillate'},
                    {data: 'year', name: 'year'},
                    {data: 'action', name: 'action'},
                ]
            });
        });
        $(document).on('click', '.updateeducation', function(){
            let id_education = $(this).attr('id_education')
            $('#updateEducation').modal('show')

            $('#id_education').val(null)
            $('#school_logo_2').attr('src', '')
            $('#school_name').val(null)
            $('#afillate').val(null)
            $('#year').val(null)

            $.ajax({
              url : "{{ route('edit.education') }}",
              type : 'post',
              data : {
                id_education : id_education,
                "_token" : "{{ csrf_token()}}"
              },
              success : function(cek){
                $('#id_education').val(cek.data.id_education)
                $('#school_logo_2').attr('src', urlsrcedu+'/'+cek.data.school_logo)
                $('#school_name').val(cek.data.school_name)
                $('#afillate').val(cek.data.afillate)
                $('#year').val(cek.data.year)

              },
              error : function(xhr){
                alert(xhr.text)
              }
            });
        })
    </script>
@endsection
