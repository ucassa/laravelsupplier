<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\barang_masukController;
use App\Http\Controllers\barang_keluarController;
use App\Http\Controllers\pinjam_barangController; 
use App\Http\Controllers\StokController; 
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

// Rute untuk Supplier
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');
Route::get('/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier.store');
Route::get('/supplier/{supplier}', [SupplierController::class, 'edit'])->name('supplier.edit');
Route::put('/supplier/{supplier}', [SupplierController::class, 'update'])->name('supplier.update');
Route::delete('/supplier/{supplier}', [SupplierController::class, 'destroy'])->name('supplier.destroy');

// Rute untuk Barang Masuk
Route::get('/barang_masuk', [barang_masukController::class, 'index'])->name('barang_masuk.index');
Route::get('/barang_masuk/create', [barang_masukController::class, 'create'])->name('barang_masuk.create');
Route::post('/barang_masuk', [barang_masukController::class, 'store'])->name('barang_masuk.store');
Route::get('/barang_masuk/{barang_masuk}', [barang_masukController::class, 'edit'])->name('barang_masuk.edit');
Route::put('/barang_masuk/{barang_masuk}', [barang_masukController::class, 'update'])->name('barang_masuk.update');
Route::delete('/barang_masuk/{barang_masuk}', [barang_masukController::class, 'destroy'])->name('barang_masuk.destroy');

// Rute untuk Barang Keluar
Route::get('/barang_keluar', [barang_keluarController::class, 'index'])->name('barang_keluar.index');
Route::get('/barang_keluar/create', [barang_keluarController::class, 'create'])->name('barang_keluar.create');
Route::post('/barang_keluar', [barang_keluarController::class, 'store'])->name('barang_keluar.store');
Route::get('/barang_keluar/{barang_keluar}', [barang_keluarController::class, 'edit'])->name('barang_keluar.edit');
Route::put('/barang_keluar/{barang_keluar}', [barang_keluarController::class, 'update'])->name('barang_keluar.update');
Route::delete('/barang_keluar/{barang_keluar}', [barang_keluarController::class, 'destroy'])->name('barang_keluar.destroy');

// Rute untuk Pinjam Barang
Route::get('/pinjam_barang', [pinjam_barangController::class, 'index'])->name('pinjam_barang.index'); // Menampilkan semua data pinjam barang
Route::get('/pinjam_barang/create', [pinjam_barangController::class, 'create'])->name('pinjam_barang.create'); // Form input pinjam barang
Route::post('/pinjam_barang', [pinjam_barangController::class, 'store'])->name('pinjam_barang.store'); // Menyimpan data pinjam barang
Route::get('/pinjam_barang/{pinjam_barang}', [pinjam_barangController::class, 'edit'])->name('pinjam_barang.edit'); // Form edit pinjam barang
Route::put('/pinjam_barang/{pinjam_barang}', [pinjam_barangController::class, 'update'])->name('pinjam_barang.update'); // Update data pinjam barang
Route::delete('/pinjam_barang/{pinjam_barang}', [pinjam_barangController::class, 'destroy'])->name('pinjam_barang.destroy'); // Hapus data pinjam barang

// Rute untuk Stok Barang
Route::get('/stok', [StokController::class, 'index'])->name('stok.index'); // Menampilkan stok barang
Route::put('/stok/{barang}', [StokController::class, 'update'])->name('stok.update'); // Update jumlah stok barang


// Rute untuk User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::resource('stok', StokController::class);


Route::resource('barang_masuk', barang_masukController::class);
Route::resource('barang_keluar', barang_keluarController::class);
Route::resource('pinjam_barang', pinjam_barangController::class);