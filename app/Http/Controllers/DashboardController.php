<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Kategori;
use App\Models\Klinik;
use App\Models\Pendamping;
use App\Models\Puskesmas;
use App\Models\Tpcb;
use App\Models\Upload;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {   
        $dokumen = Dokumen::count();   	
        $kategori = Kategori::count();
		$klinik = Klinik::count();    
        $pendamping = Pendamping::count();
        $pkm = Puskesmas::count();
        $tpcb = Tpcb::count();
        $upload = Upload::count();

        if (auth()->user()->level == 1) {
            return view('dashboard.admin', compact('kategori', 'klinik', 'pendamping', 'pkm', 'tpcb', 'dokumen'));
        } else {
            return view('dashboard.pendamping', compact('kategori', 'klinik', 'pendamping', 'pkm', 'tpcb'));
        }
    }
}
