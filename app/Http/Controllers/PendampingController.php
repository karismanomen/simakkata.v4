<?php

namespace App\Http\Controllers;

use App\Models\Pendamping;
use App\Models\Kategori;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PendampingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all()->pluck('nama_kategori', 'id_kategori');

        return view('pendamping.index', compact('kategori'));
    }

    public function data()
    {
        $pendamping = Pendamping::leftJoin('kategori', 'kategori.id_kategori', 'pendamping.id_kategori')
            ->select('pendamping.*', 'nama_kategori')
            ->orderBy('nama_pendamping', 'asc')
            ->get();

        return datatables()
            ->of($pendamping)
            ->addIndexColumn()
            ->addColumn('select_all', function ($pendamping) {
                return '
                    <input type="checkbox" name="id_pendamping[]" value="'. $pendamping->id_pendamping .'">
                ';
            })
            ->addColumn('nip', function ($pendamping) {
                return ($pendamping->nip);
            })
            ->addColumn('jabatan_akre', function ($pendamping) {
                return ($pendamping->jabatan_akre);
            })
            ->addColumn('pangkat', function ($pendamping) {
                return ($pendamping->pangkat);
            })
            ->addColumn('telepon', function ($pendamping) {
                return ($pendamping->telepon);
            })
            ->addColumn('email', function ($pendamping) {
                return ($pendamping->email);
            })
            ->addColumn('aksi', function ($pendamping) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('pendamping.update', $pendamping->id_pendamping) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button type="button" onclick="deleteData(`'. route('pendamping.destroy', $pendamping->id_pendamping) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi', 'nama_pendamping', 'select_all'])
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
        $pendamping = Pendamping::latest()->first() ?? new Pendamping();

        $pendamping = Pendamping::create($request->all());

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
        $pendamping = Pendamping::find($id);

        return response()->json($pendamping);
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
        $pendamping = Pendamping::find($id);
        $pendamping->update($request->all());

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
        $pendamping = Pendamping::find($id);
        $pendamping->delete();

        return response(null, 204);
    }

    public function deleteSelected(Request $request)
    {
        foreach ($request->id_pendamping as $id) {
            $pendamping = Pendamping::find($id);
            $pendamping->delete();
        }

        return response(null, 204);
    }

}
