@extends('layouts.master')

@section('title')
    Daftar Pendamping
@endsection

@section('breadcrumb')
    @parent
    <li class="alert bg-primary text-center">Daftar Pendamping</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="btn-group">
                        <button onclick="addForm('{{ route('pendamping.store') }}')"
                            class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i>Tambah
                            Pendamping</button>
                        <button onclick="deleteSelected('{{ route('pendamping.delete_selected') }}')"
                            class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i> Hapus Pendamping</button>
                    </div>

                </div>
                <div class="box-body table-responsive">
                    <form action="" method="post" class="form-pendamping">
                        @csrf
                        <table class="table table-striped table-bordered">
                            <thead class=>
                                <th width="1%">
                                    <input type="checkbox" name="select_all" id="select_all">
                                </th>
                                <th width="1%">No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan Akreditasi</th>
                                <th>Pangkat/Golongan</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th width="4%"><i class="fa fa-cog"></i></th>
                            </thead> 
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @includeIf('pendamping.form')
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
                    url: '{{ route('pendamping.data') }}',
                },
                columns: [{
                        data: 'select_all',
                        class:'text-center',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'DT_RowIndex',
                        class:'text-center',
                        searchable: false,
                        sortable: false
                    },
                    {data: 'nama_pendamping', name: 'nama_pendamping' , width: '15%', class: 'text-left' },
                    {data: 'nip', name: 'nip' , width: '10%', class: 'text-center' },
                    {data: 'jabatan_akre', name: 'jabatan_akre' , width: '10%', class: 'text-center' },
                    {data: 'pangkat', name: 'pangkat' , width: '10%', class: 'text-left' },
                    {data: 'telepon', name: 'telepon' , width: '5%', class: 'text-center' },
                    {data: 'email', name: 'email' , width: '15%', class: 'text-left' },
                    {
                        data: 'aksi',
                        class:'text-center',
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

            $('[name=select_all]').on('click', function() {
                $(':checkbox').prop('checked', this.checked);
            });
        });

        function addForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Tambah Pendamping');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama_pendamping]').focus();
        }

        function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit Pendamping');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=nama_pendamping]').focus();

            $.get(url)
                .done((response) => {
                    $('#modal-form [name=id_kategori]').val(response.id_kategori);
                    $('#modal-form [name=nama_pendamping]').val(response.nama_pendamping);
                    $('#modal-form [name=nip]').val(response.nip);
                    $('#modal-form [name=jabatan_akre]').val(response.jabatan_akre);
                    $('#modal-form [name=pangkat]').val(response.pangkat);
                    $('#modal-form [name=telepon]').val(response.telepon);
                    $('#modal-form [name=email]').val(response.email);
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

        function deleteSelected(url) {
            if ($('input:checked').length > 1) {
                if (confirm('Yakin ingin menghapus data terpilih?')) {
                    $.post(url, $('.form-pendamping').serialize())
                        .done((response) => {
                            table.ajax.reload();
                        })
                        .fail((errors) => {
                            alert('Tidak dapat menghapus data');
                            return;
                        });
                }
            } else {
                alert('Pilih data yang akan dihapus');
                return;
            }
        }
    </script>
@endpush
