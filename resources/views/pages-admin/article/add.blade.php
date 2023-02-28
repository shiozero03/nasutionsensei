@extends('theme.layout')
@section('tittle', 'Article')
@section('content')
<script type="text/javascript">
  document.getElementById('article').classList.add('active');
</script>
<a href="{{ route('admin.article') }}" class="btn btn-primary"><i class="fas fa-arrow-left me-2"></i>Back</a>
<br>

<form method="post" enctype="multipart/form-data" action="{{ route('add.article') }}">
    @csrf
    <div class="form-group">
        <label>Featured Image</label>
        <input required type="file" name="featured_image" accept="image/jpg, image/png, image/jpeg, image/svg" class="form-control mb-1">
    </div>
    <div class="form-group">
        <label>Title</label>
        <input required type="text" name="title" class="form-control mb-1">
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea required name="content" class="form-control mb-1 ckeditor" id="ckeditor"></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <input required type="text" name="category" class="form-control mb-1">
    </div>
    <div class="form-group">
        <label>Created At</label>
        <input required type="datetime-local" name="created_at" class="form-control mb-1">
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

@endsection
