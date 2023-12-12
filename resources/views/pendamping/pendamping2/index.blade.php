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
                <div class="box-body table-responsive">
                    <form action="" method="post" class="form-pendamping">
                        @csrf
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th width="1%">No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan Akreditasi</th>
                                <th>Pangkat</th>
                                <th>Telepon</th>
                                <th>Email</th>
                            </thead>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                    url: '{{ route('pendamping2.data') }}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                        class:'text-center',
                        searchable: false,
                        sortable: false
                    },
                    {data: 'nama_pendamping', name: 'nama_pendamping' , width: '15%', class: 'text-left' },
                    {data: 'nip', name: 'nip' , width: '10%', class: 'text-center' },
                    {data: 'jabatan_akre', name: 'jabatan_akre' , width: '10%', class: 'text-left' },
                    {data: 'pangkat', name: 'pangkat' , width: '10%', class: 'text-left' },
                    {data: 'telepon', name: 'telepon' , width: '5%', class: 'text-center' },
                    {data: 'email', name: 'email' , width: '15%', class: 'text-left' },
                ]
            });
        });
    </script>
@endpush
