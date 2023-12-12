@extends('layouts.master')

@section('title')
    Daftar TPCB
@endsection

@section('breadcrumb')
    @parent
    <li class="alert bg-primary text-center">Daftar TPCB</li>
@endsection

@section('content')
Berdasarkan Surat Keputusan Nomor : 040/KEP.011/DINKES/2023 tentang Pembentukan Tim Pembina Cluster Binaan Dinas Kesehatan Kabupaten Tasikmalaya.
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <form action="" method="post" class="form-tpcb">
                        @csrf
                        <table class="table table-striped table-bordered">
                            <thead class=>
                                <th width="1%">No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan Akreditasi</th>
                                <th>Cluster</th>
                                <th>Pangkat/Golongan</th>
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
                    url: '{{ route('tpcb2.data') }}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                        class: 'text-left',
                        searchable: false,
                        sortable: false,
                        class: 'text-center'
                    },
                    {data: 'nama_tpcb', name: 'nama_tpcb' , width: '18%', class: 'text-left' },
                    {data: 'nip', name: 'nip' , width: '11%', class: 'text-center' },
                    {data: 'jabatan_akre', name: 'jabatan_akre' , width: '10%', class: 'text-center' },
                    {data: 'cluster', name: 'cluster' , width: '5%', class: 'text-center' },
                    {data: 'pangkat', name: 'pangkat' , width: '5%', class: 'text-center' },
                ]
            });

        });
    </script>
@endpush
