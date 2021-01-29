@extends('layouts.admin')

@section('title', 'SABHA | Hasil Kuesioner')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Hasil Kuesioner</h1>
                </div>
                <div class="col-sm-6">
                    <a type="button" href="{{ route('result.export') }}" class="float-sm-right btn btn-primary btn-sm" name="Export Excel"><i class="nav-icon fas fa-file-export"></i> Export Excel</a>
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
  var detail = $('#table').DataTable({
    responsive: true,
    serverSide: true,
    scrollX: true,
    ajax: "{{ route('result.data') }}",
    order: [[ 0, "asc" ]],
    columns: [
      {title: 'ID', data: 'DT_RowIndex', name: 'DT_RowIndex', width: '7.5%', className: 'dt-center'},
      {title: 'Name', data: 'name', name: 'name', width: '20%', className: 'dt-head-center'},
      {title: 'Email', data: 'email', name: 'email', width: '25%', className: 'dt-center'},
      {title: 'Hasil', data: 'result', name: 'result', width: '25%', className: 'dt-center'},
      {title: 'Opsi', data: 'action', name: 'action', width: '10%', className: 'dt-center'},
    ],
  });

  function format (d) {
    var question = [],
        answer = [],
        many,
        table;
    table = '<table><tr><td>Pertanyaan</td><td>Jawaban</td></tr>';
    d.question.forEach(function(val, i){
      question[i] = val;
    });
    d.answer.forEach(function(val, i){
      answer[i] = val;
      many = i;
    });
    for(i=0;i<=many;i++){
      table = table+'<tr><td>'+question[i]+'</td><td>'+answer[i]+'</td></tr>';
    }
    table = table+'</table>';
    return table;
    return '<table>'+
      '<tr >'+
            '<td>Pertanyaan</td>'+
            '<td>Jawaban</td>'+
        '</tr>'+
        '<tr >'+
          '<td>'+many+'</td>'+
        '</tr>'+
    '</table>';
  };

  $('#table tbody').on('click', '.detail', function () {
    event.preventDefault();
    console.log(this);
    var tr = $(this).closest('tr');
    var row = detail.row( tr );
    if ( row.child.isShown() ) {
        row.child.hide();
        tr.removeClass('shown');
    }
    else {
        row.child( format(row.data()) ).show();
        tr.addClass('shown');
    }
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