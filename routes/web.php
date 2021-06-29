<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkirController;
use App\Http\Controllers\CetakController;


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

// menghubungkan ke dalam index yang ada di view
// Route::get('/', function () {
//     return view('login');
// });


Route::resource('parkir', ParkirController::class);
//pengaturan untuk membuat link di controller dan view
//Route get => parkir => index
//Route get => parkir/create => create
//Route post => parkir => store //untuk memasukan data baru dengan return redirect pada conteroller ke pegawai
//Route get => parkir/{id} => show
//Route put/patch => parkir/{id} => update
//Route delete => parkir/{id} => delete
//Route get => parkir/{id}/edit => edit

Route::get('cari/', [ParkirController::class, 'cari'])->name('cari');

Route::get('parkir/{id}/cetak_pdf', [CetakController::class, 'index'])->name('parkir.cetakPDF');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('');
