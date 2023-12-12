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
                    </thead>
                </table>
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
                    url: '{{ route('puskesmas2.data') }}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                        width: '5%',
                        class: 'text-center',
                        searchable: false,
                        sortable: false
                    },
                    {data: 'nama', name: 'nama' , width: '8%', class: 'text-left' },
                    {data: 'alamat', name: 'alamat' , width: '30%', class: 'text-justify' },
                    {data: 'nilai_akre', name: 'nilai_akre' , width: '3%', class: 'text-center' },
                    {data: 'tahun_akre', name: 'tahun_akre' , width: '3%', class: 'text-center' },
                    {data: 'noizin', name: 'noizin' , width: '10%', class: 'text-center' },
                    {data: 'kapus', name: 'kapus' , width: '15%', class: 'text-left' },
                    {data: 'pjmutu', name: 'pjmutu' , width: '15%', class: 'text-left' },
                ]
            });
        });
    </script>
@endpush
