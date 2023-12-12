<?php

namespace App\Http\Controllers;

use App\Models\Puskesmas;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PuskesmasController extends Controller
{
    public function index()
    {
        return view('puskesmas.index');
    }

    public function data()
    {
        $pkm = Puskesmas::orderBy('nama', 'asc')->get();

        return datatables()
            ->of($pkm)
            ->addIndexColumn()
            ->addColumn('aksi', function ($pkm) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('puskesmas.update', $pkm->id_pkm) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button type="button" onclick="deleteData(`'. route('puskesmas.destroy', $pkm->id_pkm) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pkm = Puskesmas::create($request->all());

        return response()->json('Data berhasil disimpan', 200);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pkm = Puskesmas::find($id)->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pkm = Puskesmas::find($id)->delete();

        return response(null, 204);
    }
}
