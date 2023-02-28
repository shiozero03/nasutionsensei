@extends('theme.layout')
@section('tittle', 'Article')
@section('content')
<script type="text/javascript">
  document.getElementById('article').classList.add('active');
</script>
<a href="{{ route('admin.article') }}" class="btn btn-primary"><i class="fas fa-arrow-left me-2"></i>Back</a>
<br>

<form method="post" enctype="multipart/form-data" action="{{ route('update.article') }}">
    @csrf
    <div class="form-group">
        <input type="hidden" name="id_article" value="{{ $artikel->id_article }}">
        <div class="w-100 text-center">
            <img id="imagefet" src="{{ asset('assets/images/landing-page/article/'.$artikel->feature_image) }}" width="50%">
        </div>
        <br>
        <label>Featured Image</label>
        <input id="feature" type="file" name="featured_image" accept="image/jpg, image/png, image/jpeg, image/svg" class="form-control mb-1">
    </div>
    <div class="form-group">
        <label>Title</label>
        <input required type="text" name="title" class="form-control mb-1" value="{{ $artikel->title }}">
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea required name="content" class="form-control mb-1 ckeditor" id="ckeditor">{{ $artikel->content }}</textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <input required type="text" name="category" class="form-control mb-1" value="{{ $artikel->category }}">
    </div>
    <div class="form-group">
        <label>Created At</label>
        <input required type="datetime-local" name="created_at" class="form-control mb-1" value="{{ $artikel->created_at }}">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>
@endsection 
@section('script')

    @if (session('successAddArticle'))
        <script type="text/javascript">
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: 'Article add succesfully'
        });
        </script>
    @endif

    <script type="text/javascript">
        CKEDITOR.config.height="100vh";
        let icon = document.getElementById('feature');
        let imagefet = document.getElementById('imagefet');
        icon.addEventListener('change', function () {
            gambar(this);
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
    </script>
@endsection
