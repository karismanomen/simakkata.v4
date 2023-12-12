<?php

namespace App\Http\Controllers;

use App\Models\Klinik;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Klinik2Controller extends Controller
{
    public function index()
    {
        return view('klinik.klinik2.index');
    }

    public function data()
    {
        $klinik = Klinik::orderBy('nama_klinik', 'asc')->get();

        return datatables()
            ->of($klinik)
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
        $klinik = Klinik::find($id);

        return response()->json($klinik);
    }
}