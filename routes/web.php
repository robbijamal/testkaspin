<?php

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
    return view('welcome');
});

Auth::routes();
Route::middleware(['auth','cekrole:0'])->group(function () {
    Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index']);
    Route::get('/barang/create', [App\Http\Controllers\BarangController::class, 'create']);
    Route::get('/barang/edit/{id}', [App\Http\Controllers\BarangController::class, 'edit'])->name('barang-edit');
    Route::post('/barang/store', [App\Http\Controllers\BarangController::class, 'store'])->name('barang-create');
    Route::post('/barang/update', [App\Http\Controllers\BarangController::class, 'update'])->name('barang-update');
    Route::get('/barang/destroy/{id}', [App\Http\Controllers\BarangController::class, 'destroy'])->name('barang-delete');
    
    Route::get('/logbarang', [App\Http\Controllers\LogBarangController::class, 'index']);
});
Route::middleware(['auth','cekrole:1'])->group(function () {
    Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index']);
    Route::get('/barang/create', [App\Http\Controllers\BarangController::class, 'create']);
    Route::get('/barang/edit/{id}', [App\Http\Controllers\BarangController::class, 'edit'])->name('barang-edit');
    Route::post('/barang/store', [App\Http\Controllers\BarangController::class, 'store'])->name('barang-create');
    Route::post('/barang/update', [App\Http\Controllers\BarangController::class, 'update'])->name('barang-update');
    
});
Route::get('/', [App\Http\Controllers\MyCvController::class, 'welcome'])->name('welcome');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\MyCvController::class, 'welcome'])->name('welcome');
Route::get('/mycv', [App\Http\Controllers\MyCvController::class, 'index'])->name('mycv');


/*Route::get('/logbarang',function(){
    $barangRef = app('firebase.firestore')->database()->collection('Barang')->newDocument();
    $barangRef->set([
        'nama' => 'Samsung HJ',
        'haraga' => '1200',
        'deskripsi' => 'Barang Ori'
    ]);
});*/