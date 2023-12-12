<?php

namespace App\Http\Controllers;

use App\Models\Tpcb;
use App\Models\Kategori;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TpcbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all()->pluck('nama_kategori', 'id_kategori');

        return view('tpcb.index', compact('kategori'));
    }

    public function data()
    {
        $tpcb = Tpcb::leftJoin('kategori', 'kategori.id_kategori', 'tpcb.id_kategori')
            ->select('tpcb.*', 'nama_kategori')
            ->orderBy('cluster', 'asc')
            ->get();

        return datatables()
            ->of($tpcb)
            ->addIndexColumn()
            ->addColumn('select_all', function ($tpcb) {
                return '
                    <input type="checkbox" name="id_tpcb[]" value="'. $tpcb->id_tpcb .'">
                ';
            })
            ->addColumn('nama_tpcb', function ($tpcb) {
                return ($tpcb->nama_tpcb);
            })
            ->addColumn('nip', function ($tpcb) {
                return ($tpcb->nip);
            })
            ->addColumn('jabatan_akre', function ($tpcb) {
                return ($tpcb->jabatan_akre);
            })
            ->addColumn('cluster', function ($tpcb) {
                return ($tpcb->cluster);
            })
            ->addColumn('pangkat', function ($tpcb) {
                return ($tpcb->pangkat);
            })
            ->addColumn('aksi', function ($tpcb) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('tpcb.update', $tpcb->id_tpcb) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button type="button" onclick="deleteData(`'. route('tpcb.destroy', $tpcb->id_tpcb) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi', 'nama_tpcb', 'select_all'])
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
        $tpcb = Tpcb::latest()->first() ?? new tpcb();

        $tpcb = Tpcb::create($request->all());

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
        $tpcb = Tpcb::find($id);

        return response()->json($tpcb);
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
        $tpcb = Tpcb::find($id);
        $tpcb->update($request->all());

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
        $tpcb = Tpcb::find($id);
        $tpcb->delete();

        return response(null, 204);
    }

    public function deleteSelected(Request $request)
    {
        foreach ($request->id_tpcb as $id) {
            $tpcb = Tpcb::find($id);
            $tpcb->delete();
        }

        return response(null, 204);
    }
}
