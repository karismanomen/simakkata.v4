@extends('layouts.master')

@section('title')
    Daftar Dokumen
@endsection

@section('breadcrumb')
    @parent
    <li class="alert bg-primary text-center">Daftar Dokumen</li>
@endsection

@section('content')
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        {{-- jika mengirim file wajib menggunakan enctype="multipart/form-data" --}}
                        <form action="{{url('upload/proses')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukan File</label>
                                <input type="file" class="form-control" id="nama" name="file">
                            </div>
                            {{-- pesan error  --}}
                            @error('file')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button style="width:100%" type="submit" id="tombol-simpan" class="text text-center btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
            <h2 class="alert alert-success text-center">Regulasi dan Dokumen Akreditasi</h2>
                <table class="text-center table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>File</th>
                            <th>Keterangan</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- menampilkan data  --}}
                        @foreach ($data as $key=>$item)
                        <tr>
                            <td width='5%'>{{$key+1}}</td>
                            <td width='15%'>
                                {{-- jika ekstensi file adalah png, jpg atau jpeg maka tampilkan gambar  --}}
                                @if( in_array(pathinfo($item->file, PATHINFO_EXTENSION), ['png', 'jpg', 'JPEG']))
                                    <img src="{{asset('file_upload')}}/{{$item->file}}" style="height: 50px">
                                @elseif( in_array(pathinfo($item->file, PATHINFO_EXTENSION), ['pdf']))
                                    <img src="https://www.freeiconspng.com/uploads/pdf-icon-4.png"style="height: 50px">
                                @else
                                    <img src="https://www.freeiconspng.com/uploads/file-txt-icon--icon-search-engine--iconfinder-14.png"
                                    style="height: 50px">
                                @endif
                            </td>
                            <td width='60%'>
                                {{$item->file}}
                            </td>
                            <td width='20%'>
                                <button type="submit" id="tombol-simpan" class="text text-center btn btn-warning"><a href="{{asset('file_upload')}}/{{$item->file}}">Download</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
