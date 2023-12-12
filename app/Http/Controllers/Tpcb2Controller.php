<?php

namespace App\Http\Controllers;

use App\Models\Tpcb;
use App\Models\Kategori;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Tpcb2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all()->pluck('nama_kategori', 'id_kategori');

        return view('tpcb.tpcb2.index', compact('kategori'));
    }

    public function data()
    {
        $tpcb = Tpcb::leftJoin('kategori', 'kategori.id_kategori', 'tpcb.id_kategori')
            ->select('tpcb.*', 'nama_kategori')
            ->orderBy('nama_tpcb', 'asc')
            ->get();

        return datatables()
            ->of($tpcb)
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
        $tpcb = Tpcb::find($id);

        return response()->json($tpcb);
    }
}
