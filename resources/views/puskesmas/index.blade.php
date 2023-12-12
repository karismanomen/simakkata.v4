@extends('layouts.master')

@section('title')
    Daftar Puskesmas
@endsection

@section('breadcrumb')
    @parent
    <li class="alert bg-primary text-center">Daftar Puskesmas</li>
@endsection

@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <button onclick="addForm('{{ route('puskesmas.store') }}')" class="btn btn-success btn-xs btn-flat"><i
                            class="fa fa-plus-circle"></i> Tambah Puskesmas</button>
                </div>
            </div>
      <div class="row"> 
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Puskesmas</th>
                        <th>Alamat</th>
                        <th>Hasil Akre</th>
                        <th>Tahun Akre</th>
						<th>No Izin Puskesmas</th>
						<th>Kepala Puskesmas</th>
						<th>PJ Mutu</th>
                        <th><i class="fa fa-cog"></i></th>                     
                    </thead>
                </table>
            </div>
        </div>
    </div>
   
    @includeIf('puskesmas.form')
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
                    url: '{{ route('puskesmas.data')}}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                  		width: '1%',
                        class: 'text-center',
                        searchable: false,
                        sortable: false
                    },
                    {data: 'nama', name: 'nama' , width: '5%', class: 'text-left' },
                    {data: 'alamat', name: 'alamat' , width: '20%', class: 'text-justify' },
                    {data: 'nilai_akre', name: 'nilai_akre' , width: '5%', class: 'text-center' },
                    {data: 'tahun_akre', name: 'tahun_akre' , width: '5%', class: 'text-center' },
                    {data: 'noizin', name: 'noizin' , width: '10%', class: 'text-center' },
                    {data: 'kapus', name: 'kapus' , width: '10%', class: 'text-left' },
                    {data: 'pjmutu', name: 'pjmutu' , width: '10%', class: 'text-left' },
                    {
                        data: 'aksi',
                        width: '5%',
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
            $('#modal-form .modal-title').text('Tambah Puskesmas');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama]').focus();
        }

        function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit Puskesmas');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=nama]').focus();

            $.get(url)
                .done((response) => {
                    $('#modal-form [name=nama]').val(response.nama);
                    $('#modal-form [name=alamat]').val(response.alamat);
                    $('#modal-form [name=nilai_akre]').val(response.nilai_akre);              
                    $('#modal-form [name=tahun_akre]').val(response.tahun_akre);
                    $('#modal-form [name=noizin]').val(response.noizin);
                    $('#modal-form [name=kapus]').val(response.kapus);
                    $('#modal-form [name=pjmutu]').val(response.pjmutu);
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
