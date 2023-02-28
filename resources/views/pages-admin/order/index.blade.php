@extends('theme.layout')
@section('tittle', 'Order')
@section('content')
<script type="text/javascript">
  document.getElementById('order').classList.add('active');
</script>
<div class="data-cover position-relative">
    <table id="datatable" class="table-bordered bg-white text-dark w-100">
            <thead class="bg-dark text-white">
                <tr>
                    <th class="px-3 py-3">Id</th>
                    <th class="px-3 py-3">Email</th>
                    <th class="px-3 py-3">Phone</th>
                    <th class="px-3 py-3">Order Category</th>
                    <th class="px-3 py-3">Information</th>
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
        ajax: "{{ route('json.order') }}",
        columns: [
            {data: 'id_order', name: 'id_order'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'order_category', name: 'order_category'},
            {data: 'information', name: 'information'},
            {data: 'action', name: 'action'},
        ]
    });
});
$(document).on('click', '.hapus', function(){
    let id_order = $(this).attr('id_order');
    $.ajax({
      url : "{{ route('delete.order') }}",
      type : 'post',
      data : {
        id_order : id_order,
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
