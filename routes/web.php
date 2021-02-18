<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('name', function () {
//     $nama = request('nama');
//     $nama = 'andre';
//     // return view('home', ['nama' =>$nama]);
// });

// Route::get('/test', [HomeController::class, 'index']);

// Route::view('login', 'login');
// Route::view('home', 'home');
// Route::view('contact', 'contact');
Auth::routes();

// Route::get('/', [AuthController::class, 'index'])->name('index');
// Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::group(['middleware' => 'CekSessionLogin'], function () {
Route::group(['middleware' => 'auth'], function () {
    Route::get('crud', [CrudController::class, 'crud'])->name('crud');
    Route::get('crud/tambahData', [CrudController::class, 'TambahData'])->name('tambah');
    Route::post('crud/simpan', [CrudController::class, 'simpan'])->name('simpan');
    Route::delete('crud/delete/{id}', [CrudController::class, 'delete'])->name('delete');
    Route::get('crud/edit/{id}', [CrudController::class, 'edit'])->name('edit');
    Route::patch('crud/update/{id}', [CrudController::class, 'update'])->name('update');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Auth::routes();


