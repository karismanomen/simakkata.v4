<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index(){
        //ambil data dari database
        $data = Upload::all();

        //passing data ke view
        return view('upload.index')->with('data', $data);
    }

    public function store(Request $request){

        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $this->validate($request, [
            'file'          => 'required'
        ]);

        //mengambil data file yang diupload
        $file           = $request->file('file');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('file_upload',$file->getClientOriginalName());


        $upload = new Upload;
        $upload->file   = $nama_file;

        //menyimpan data ke database
        $upload->save();

        //kembali ke halaman sebelumnya
        return back();
    }

    public function download($id){
        $path = Upload::where("id", $id)->value("file");
        return Storage::download($path);
    }
    
    public function delete($id){
        $path = Upload::where("id", $id)->value("file");
        return Storage::delete($path);
    }
}
