@extends('layouts.master')

@section('title')
    Dokumen dan Regulasi Mutu
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Dokumen</li>
@endsection

@section('content')
	<div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <button onclick="addForm('{{ route('dokumen.store') }}')" class="btn btn-success btn-xs btn-flat"><i
                            class="fa fa-plus-circle"></i> Tambah Dokumen</button>
                </div>
            </div>
      <div class="row"> 
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>No</th>
                      	<th>Kode</th>
                        <th>Nama Dokumen</th>
                        <th>Dokumen</th>
                        <th><i class="fa fa-cog"></i></th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
   
    @includeIf('dokumen.form')
@endsection

@push('scripts')
    <script>
        let table;
      
        $(function() {
            table = $('.table').DataTable({
                "iDisplayLength": 10,
                processing: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('dokumen.data') }}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                  		width: '1%',
                        class: 'text-center',
                        searchable: false,
                        sortable: false
                    },
                    {data: 'id_dokumen', name: 'id_dokumen' , width: '20%', class: 'text-left' },
                    {data: 'nama_dokumen', name: 'nama_dokumen' , width: '20%', class: 'text-left' },
                    {data: 'dokumen', name: 'dokumen' , width: '10%', class: 'text-center' },
                    {
                        data: 'aksi',
                        class: 'text-center',
                        searchable: false,
                        sortable: false
                    },
                ]
            });
          
            $('#modal-form').validator().on('submit', function(e) {
                if (!e.preventDefault()) {
                    $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                        .done((response) => {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                        })
                        .fail((errors) => {
                            alert('Tidak dapat menyimpan data');
                            return;
                        });
                }
            });
        });

        function addForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Tambah Dokumen');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama_dokumen]').focus();
        }

        function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit Dokumen');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=nama_dokumen]').focus();

            $.get(url)
                .done((response) => {
                    $('#modal-form [name=id_dokumen]').val(response.id_dokumen);
                    $('#modal-form [name=nama_dokumen]').val(response.nama_dokumen);
                    $('#modal-form [name=dokumen]').val(response.dokumen);
                })
                .fail((errors) => {
                    alert('Tidak dapat menampilkan data');
                    return;
                });
        }

        function deleteData(url) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                        '_token': $('[name=csrf-token]').attr('content'),
                        '_method': 'delete'
                    })
                    .done((response) => {
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menghapus data');
                        return;
                    });
            }
        }
    </script>
@endpush
