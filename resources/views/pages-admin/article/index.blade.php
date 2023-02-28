@extends('theme.layout')
@section('tittle', 'Article')
@section('content')
<script type="text/javascript">
  document.getElementById('article').classList.add('active');
</script>
<a href="{{ route('admin.articleadd') }}" class="btn btn-primary"><i class="fas fa-plus-circle me-2"></i>Add Data</a>
<br>
<div class="data-cover position-relative">
    <table id="datatable" class="table-bordered bg-white text-dark w-100">
            <thead class="bg-dark text-white">
                <tr>
                    <th class="px-3 py-3">Id</th>
                    <th class="px-3 py-3" style="width:25%">Featured Image</th>
                    <th class="px-3 py-3">Title</th>
                    <th class="px-3 py-3">View/Comment</th>
                    <th class="px-3 py-3">Last Update</th>
                    <th class="px-3 py-3">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
    </table>
</div>
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

    @if (session('successUpdateArticle'))
        <script type="text/javascript">
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: 'Article update succesfully'
        });
        </script>
    @endif

<script>
$(function () {
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive : true,
        pagingType: 'numbers',
        ajax: "{{ route('json.article') }}",
        columns: [
            {data: 'id_article', name: 'id_article'},
            {data: 'image', name: 'image'},
            {data: 'title', name: 'title'},
            {data: 'view', name: 'view'},
            {data: 'last_update', name: 'last_update'},
            {data: 'action', name: 'action'},
        ]
    });
});
$(document).on('click', '.hapus', function(){
    let id_article = $(this).attr('id_article');
    $.ajax({
      url : "{{ route('delete.article') }}",
      type : 'post',
      data : {
        id_article : id_article,
        '_token' : "{{ csrf_token() }}"
      },
      success: function(params){
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: params.text
        });
        $('#datatable').DataTable().ajax.reload();
      },
      error: function(xhr){
        alert(xhr)
      }
    });
  });
</script>
@endsection
