@extends('theme.layout')
@section('tittle', 'Subscribe')
@section('content')
<script type="text/javascript">
  document.getElementById('subscribe').classList.add('active');
</script>
<div class="data-cover position-relative">
    <table id="datatable" class="table-bordered bg-white text-dark w-100">
            <thead class="bg-dark text-white">
                <tr>
                    <th class="px-3 py-3">Id</th>
                    <th class="px-3 py-3">Email</th>
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
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive : true,
        pagingType: 'numbers',
        ajax: "{{ route('json.subscribe') }}",
        columns: [
            {data: 'id_subscribe', name: 'id_subscribe'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action'},
        ]
    });
});
$(document).on('click', '.hapus', function(){
    let id_subscribe = $(this).attr('id_subscribe');
    $.ajax({
      url : "{{ route('delete.subscribe') }}",
      type : 'post',
      data : {
        id_subscribe : id_subscribe,
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
