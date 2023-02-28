@extends('theme.layout')
@section('tittle', 'Portfolio')
@section('content')
<script type="text/javascript">
  document.getElementById('portfolio').classList.add('active');
</script>
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus-circle me-2"></i>Add Data</button>
<br>
<div class="data-cover position-relative">
    <table id="datatable" class="table-bordered bg-white text-dark w-100">
            <thead class="bg-dark text-white">
                <tr>
                    <th class="px-3 py-3">Id</th>
                    <th class="px-3 py-3" style="width:25%">Thumbnail</th>
                    <th class="px-3 py-3">Category</th>
                    <th class="px-3 py-3">Title</th>
                    <th class="px-3 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
    </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Portfolio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('add.portfolio') }}">
            @csrf
            <div class="form-group">
                <label>Thumbnail</label>
                <input required type="file" name="thumbnail" accept="image/jpg, image/png, image/jpeg, image/svg" class="form-control mb-1">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input required type="text" name="title" class="form-control mb-1">
            </div>
            <div class="form-group">
                <label>Category</label>
                <input required type="text" name="category" class="form-control mb-1">
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="text" name="link" class="form-control mb-1">
            </div>
            <div class="form-group">
                <label>File</label>
                <input type="file" name="file" class="form-control mb-1">
            </div>
            <div class="form-group">
                <label>Created At</label>
                <input required type="datetime-local" name="created_at" class="form-control mb-1">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="updateDataTipe" tabindex="-1" aria-labelledby="updateDataTipeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="updateDataTipeLabel">Update Portfolio</h1>
        <button id="close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="formUpdateType">
            <form action="{{ route('update.portfolio') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_portfolio" id="id_port">
                <div class="form-group">
                    <div class="w-100 text-center">
                        <img id="imagefet" src="" width="50%">
                    </div>
                    <label>Thumbnail</label>
                    <input type="file" name="thumbnail" accept="image/jpg, image/png, image/jpeg, image/svg" class="form-control mb-1">
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input required type="text" name="title" class="form-control mb-1" id="title">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input required type="text" name="category" class="form-control mb-1" id="category">
                </div>
                <div class="form-group">
                    <label class="link">Link</label>
                    <input type="text" name="link" class="form-control mb-1 link" id="link">
                </div>
                <div class="form-group">
                    <label class="filebefore">File Link Before</label>
                    <input type="text" name="filebefore" class="form-control mb-1 filebefore" readonly disabled id="filebefore">
                    <label>File</label>
                    <input type="file" name="file" class="form-control mb-1">
                </div>
                <div class="form-group">
                    <label>Created At</label>
                    <input type="datetime-local" name="created_at" class="form-control mb-1" id="created">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')

    @if (session('successAddPorfolio'))
        <script type="text/javascript">
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: 'Portfolio add succesfully'
        });
        </script>
    @endif
    @if (session('successUpdatePortfolio'))
        <script type="text/javascript">
        iziToast.success({
            position: "topCenter",
            title: 'Success',
            message: 'Portfolio update succesfully'
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
        ajax: "{{ route('json.portfolio') }}",
        columns: [
            {data: 'id_portfolio', name: 'id_portfolio'},
            {data: 'image', name: 'image'},
            {data: 'category', name: 'category'},
            {data: 'title', name: 'title'},
            {data: 'action', name: 'action'},
        ]
    });
});
$(document).on('click', '.hapus', function(){
    let id_portfolio = $(this).attr('id_portfolio');
    $.ajax({
      url : "{{ route('delete.portfolio') }}",
      type : 'post',
      data : {
        id_portfolio : id_portfolio,
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
let urlsrc = "{{ asset('assets/images/landing-page/portfolio/thumbnail/') }}"
$(document).on('click', '.update', function(){
    let id_portfolio = $(this).attr('id_portfolio')
    $('#updateDataTipe').modal('show')
    
    $('#id_port').val(null)
    $('#title').val(null)
    $('#imagefet').attr("src", "");
    $('#category').val(null)
    $('#link').val(null)
    $('#filebefore').val(null)
    $('#created').val(null)

    $.ajax({
      url : "{{ route('edit.portfolio') }}",
      type : 'post',
      data : {
        id_portfolio : id_portfolio,
        "_token" : "{{ csrf_token()}}"
      },
      success : function(cek){
        $('#id_port').val(cek.data.id_portfolio)
        $('#imagefet').attr("src", urlsrc+"/"+cek.data.thumbnail);
        $('#title').val(cek.data.title)
        $('#category').val(cek.data.category)

        if(cek.data.category == 'Website'){
            $('.link').removeClass('d-none')
            $('#link').val(cek.data.link)
            $('.filebefore').addClass('d-none')
        } else{
            $('#filebefore').val(cek.data.link)
            $('.filebefore').removeClass('d-none')
            $('.link').addClass('d-none')
        }
      },
      error : function(xhr){
        alert(xhr.text)
      }
    });
})
</script>
@endsection
