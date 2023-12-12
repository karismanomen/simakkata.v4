<?php

use App\Http\Controllers\{
    DashboardController,
    DokumenController,
    KategoriController,
    KlinikController,
    Klinik2Controller,
    PendampingController,
    Pendamping2Controller,
    PuskesmasController,
    Puskesmas2Controller,
    TpcbController,
    Tpcb2Controller,
    UserController,
    UploadController,
    Upload2Controller,
    SettingController,
    PDFController,
};

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['middleware' => 'level:1'], function () {
        Route::get('/dokumen/data', [DokumenController::class, 'data'])->name('dokumen.data');
        Route::resource('/dokumen', DokumenController::class);
        Route::get('/dokumen/download/{id}', [DokumenController::class, 'download'])->name('dokumen.download');     

        Route::get('/kategori/data', [KategoriController::class, 'data'])->name('kategori.data');
        Route::resource('/kategori', KategoriController::class);
      
        Route::get('/klinik/data', [KlinikController::class, 'data'])->name('klinik.data');
        Route::resource('/klinik', KlinikController::class);

        Route::get('/pendamping/data', [PendampingController::class, 'data'])->name('pendamping.data');
        Route::post('/pendamping/delete-selected', [PendampingController::class, 'deleteSelected'])->name('pendamping.delete_selected');
        Route::resource('/pendamping', PendampingController::class);

        Route::get('/puskesmas/data', [PuskesmasController::class, 'data'])->name('puskesmas.data');
        Route::resource('/puskesmas', PuskesmasController::class);
     
        Route::get('/tpcb/data', [TpcbController::class, 'data'])->name('tpcb.data');
        Route::post('/tpcb/delete-selected', [TpcbController::class, 'deleteSelected'])->name('tpcb.delete_selected');
        Route::resource('/tpcb', TpcbController::class);

        Route::get('/user/data', [UserController::class, 'data'])->name('user.data');
        Route::resource('/user', UserController::class);

        Route::get('/upload', [UploadController::class, 'index'])->name('upload.index');
        Route::post('/upload/proses', [UploadController::class, 'store']);
        Route::get('/upload/download/{id}', [UploadController::class, 'download'])->name('upload.download');        
        Route::get('/upload/hapus/{id}', [UploadController::class, 'delete'])->name('upload.delete');

        Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
        Route::get('/setting/first', [SettingController::class, 'show'])->name('setting.show');
        Route::post('/setting', [SettingController::class, 'update'])->name('setting.update');       
    });

    Route::group(['middleware' => 'level:2'], function () {
        Route::get('/klinik/klinik2/data', [Klinik2Controller::class, 'data'])->name('klinik2.data');
        Route::resource('/klinik2', Klinik2Controller::class);  
      
        Route::get('/pendamping/pendamping2/data', [Pendamping2Controller::class, 'data'])->name('pendamping2.data');
        Route::resource('/pendamping2', Pendamping2Controller::class);
      
        Route::get('/puskesmas/puskesmas2/data', [Puskesmas2Controller::class, 'data'])->name('puskesmas2.data');
        Route::resource('/puskesmas2', Puskesmas2Controller::class);
      
        Route::get('/tpcb/tpcb2/data', [Tpcb2Controller::class, 'data'])->name('tpcb2.data');
        Route::resource('/tpcb2', Tpcb2Controller::class);
    });

    Route::group(['middleware' => 'level:1,2'], function () {
        Route::get('/profil', [UserController::class, 'profil'])->name('user.profil');
        Route::post('/profil', [UserController::class, 'updateProfil'])->name('user.update_profil');
    });
});