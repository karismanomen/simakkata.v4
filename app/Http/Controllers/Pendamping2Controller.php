<?php

namespace App\Http\Controllers;

use App\Models\Pendamping;
use App\Models\Kategori;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Pendamping2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all()->pluck('nama_kategori', 'id_kategori');

        return view('pendamping.pendamping2.index', compact('kategori'));
    }

    public function data()
    {
        $pendamping = pendamping::leftJoin('kategori', 'kategori.id_kategori', 'pendamping.id_kategori')
            ->select('pendamping.*', 'nama_kategori')
            ->orderBy('jabatan_akre', 'asc')
            ->get();

        return datatables()
            ->of($pendamping)
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendamping = Pendamping::find($id);

        return response()->json($pendamping);
    }
    
}
