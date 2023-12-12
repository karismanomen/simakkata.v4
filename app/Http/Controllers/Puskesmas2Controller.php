<?php

namespace App\Http\Controllers;

use App\Models\Puskesmas;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Puskesmas2Controller extends Controller
{
    public function index()
    {
        return view('puskesmas.puskesmas2.index');
    }

    public function data()
    {
        $pkm = Puskesmas::orderBy('nama', 'asc')->get();

        return datatables()
            ->of($pkm)
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
        $pkm = Puskesmas::find($id);

        return response()->json($pkm);
    }
}
