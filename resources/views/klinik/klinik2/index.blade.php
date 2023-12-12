@extends('layouts.master')

@section('title')
    Daftar Klinik
@endsection

@section('breadcrumb')
    @parent
    <li class="alert bg-primary text-center">Daftar Klinik</li>
@endsection

@section('content')
	<div class="row">
        <div class="col-lg-12">
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Klinik</th>
                        <th>Alamat</th>
                        <th>Hasil Akre</th>
                        <th>Tahun Akre</th>
						<th>No Izin Klinik</th>
						<th>PJ Mutu</th>
                    </thead>
                </table>
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
                    url: '{{ route('klinik2.data') }}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                  		width: '1%',
                        class: 'text-center',
                        searchable: false,
                        sortable: false
                    },
                    {data: 'nama_klinik', name: 'nama_klinik' , width: '20%', class: 'text-left' },
                    {data: 'alamat', name: 'alamat' , width: '30%', class: 'text-justify' },
                    {data: 'nilai_akre', name: 'nilai_akre' , width: '8%', class: 'text-center' },
                    {data: 'tahun_akre', name: 'tahun_akre' , width: '8%', class: 'text-center' },
                    {data: 'noizin', name: 'noizin' , width: '15%', class: 'text-center' },
                    {data: 'pjmutu_klinik', name: 'pjmutu_klinik' , width: '15%', class: 'text-left' },
                ]
            });
        });
    </script>
@endpush
