@extends('layouts.admin')

@section('title', 'SABHA | Pertanyaan')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Pertanyaan</h1>
                </div>
                <div class="col-sm-6">
                    <button type="button" href="{{ route('question.create') }}" class="float-sm-right btn btn-primary btn-sm modal-show" name="Tambah Data"><i class="nav-icon fas fa-plus"></i> Add New</button>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="table" class="table table-striped table-bordered text-sm" style="width:100%"></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
  $('#table').DataTable({
    responsive: true,
    serverSide: true,
    scrollX: true,
    ajax: "{{ route('question.data') }}",
    order: [[ 0, "asc" ]],
    columns: [
      {title: 'ID', data: 'id', name: 'id', width: '7.5%', className: 'dt-center'},
      {title: 'Pertanyaan', data: 'question', name: 'question', width: '40%', className: 'dt-head-center'},
      {title: 'Yes', data: 'yes', name: 'yes', width: '17.5%', className: 'dt-center'},
      {title: 'No', data: 'no', name: 'no', width: '17.5%', className: 'dt-center'},
      {title: 'Opsi', data: 'action', name: 'action', width: '17.5%', className: 'dt-center'},
    ],
  });

  $('body').on('click', '.modal-show', function(event){
    event.preventDefault();
    var me = $(this),
        url = me.attr('href'),
        title = me.attr('name');
    $.ajax({
      url: url,
      dataType: 'html',
      success: function (response) {
        $('#modal-body').html(response);
        $('#modal-title').text(title);
        $('#modal-close').text(me.hasClass('edit') ? 'Cancel' : 'Close');
        $('#modal-save').text(me.hasClass('edit') ? 'Update' : 'Create');
        $('#modal').modal('show');
      }
    });
  });

  $('body').on('submit','.form', function(event){
    event.preventDefault();
    var form = $('.form'),
        url = form.attr('action');
    $.ajax({
      url : url,
      type : "POST",
      data: new FormData(this),
      dataType: 'JSON',
      contentType: false,
      processData: false,
      success: function(data){
        $('#modal').modal('hide');
        $('#table').DataTable().ajax.reload();
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          background: '#28a745',
          onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        Toast.fire({
          type: 'success',
          title: 'Data has been saved!'
        })
        $('#modal-body').trigger('reset');
      },
      error: function(xhr){
        var res = xhr.responseJSON;
        if ($.isEmptyObject(res) == false) {
          form.find('.invalid-feedback').remove();
          form.find('.is-invalid').removeClass('is-invalid');
          $.each(res.errors, function (key, value) {
            $('#' + key)
              .addClass('is-invalid')
              .after('<div class="invalid-feedback d-block">'+value+'</div>');
          });
        };
      }
    });
  });

  $('body').on('click', '.delete', function (event) {
    event.preventDefault();
    var me = $(this),
        url = me.attr('href');
    swal({
      title: "Are you sure want to delete it?",
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result)=>{
      if(result.value){
        $.ajax({
          url: url,
          type: "POST",
          data: {
            '_method': 'DELETE',
            '_token': '{{ csrf_token() }}'
          },
          success: function(response){
            $('#table').DataTable().ajax.reload();
            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              background: '#BD362F',
              onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })
            Toast.fire({
              type: 'success',
              text: 'Data has been deleted'
            })
          },
          error: function(xhr){
            swal({
              type: 'error',
              title: 'Oops...',
              text: 'Something went wrong!'
            });
          }
        });
      }
    });
  });
</script>
@endpush