@extends('theme.layout')
@section('tittle', 'Article Comment')
@section('content')
<script type="text/javascript">
  document.getElementById('article').classList.add('active');
</script>
<a href="{{ route('admin.article') }}" class="btn btn-primary"><i class="fas fa-arrow-left me-2"></i>Back</a>
<br>
<input type="hidden" name="id_article" value="{{ $id }}" id="id_article">
<div class="data-cover position-relative">
    <table id="datatable" class="table-bordered bg-white text-dark w-100">
            <thead class="bg-dark text-white">
                <tr>
                    <th class="px-3 py-3">Id</th>
                    <th class="px-3 py-3">Name</th>
                    <th class="px-3 py-3">Feedback</th>
                    <th class="px-3 py-3">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
    </table>
</div>
@endsection
@section('script')
<script>
$(function () {
    var id_article = document.getElementById('id_article').value;
    var url = '/admin/json/articlecomment/'+id_article
    var urlajax = '{{ URL("") }}'+url
    console.log(urlajax)
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive : true,
        pagingType: 'numbers',
        ajax: urlajax,
        columns: [
            {data: 'id_comments', name: 'id_comments'},
            {data: 'name', name: 'name'},
            {data: 'feedback', name: 'feedback'},
            {data: 'action', name: 'action'},
        ]
    });
});
$(document).on('click', '.hapus', function(){
    let id_comments = $(this).attr('id_comments');
    $.ajax({
      url : "{{ route('delete.comment') }}",
      type : 'post',
      data : {
        id_comments : id_comments,
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
