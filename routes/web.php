<?php

use App\Models\Guru;
use App\Models\kelas;
use App\Models\mapel;
use App\Models\agenda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GurutampilController;

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


Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);



Route::get('/dashboard', function(){
    $jumlahguru = Guru::count();
    $jumlahkelas = kelas::count();
    $jumlahagenda = agenda::count();
    $jumlahMapel = mapel::count();
    return view('dashboard', compact('jumlahguru','jumlahkelas','jumlahagenda','jumlahMapel'));
})->middleware('auth');


//hak akses
Route::group(['middleware'=>['auth','hakakses:user']], function(){
    Route::get('/tampilan', [GuruController::class,'tampilan'])->name('tampilan');
});

// tabel guru
// Route::get('tampilan', [GuruController::class,'tampilan'])->name('tampilan')->middleware('auth');
Route::get('tambahguru', [GuruController::class,'create'])->name('tambahguru');
Route::post('insertdataguru', [GuruController::class,'insertdataguru'])->name('insertdataguru');
Route::get('tampildata/{id}', [GuruController::class,'tampildata'])->name('tampildata');
Route::post('updatedataguru/{id}',[GuruController::class, 'updatedataguru'])->name('updatedataguru');
Route::get('deletedataguru/{id}',[GuruController::class, 'deletedataguru'])->name('deletedataguru');

// tabel kelas 
Route::get('tampilankelas', [KelasController::class,'tampilankelas'])->name('tampilankelas')->middleware('auth');
Route::get('tambahkelas', [KelasController::class,'create'])->name('tambahkelas');
Route::post('insertdatakelas', [KelasController::class,'insertdatakelas'])->name('insertdatakelas');
Route::get('tampilkelas/{id}', [KelasController::class,'tampilkelas'])->name('tampilkelas');
Route::post('updatedatakelas/{id}',[KelasController::class, 'updatedatakelas'])->name('updatedatakelas');
Route::get('deletedatakelas/{id}',[KelasController::class, 'deletedatakelas'])->name('deletedatakelas');

// tabel agenda
Route::get('tampilanagenda', [AgendaController::class,'tampilanagenda'])->name('tampilanagenda')->middleware('auth');
Route::get('tambahagenda', [AgendaController::class,'create'])->name('tambahmapel');
Route::post('insertdataagenda', [AgendaController::class,'insertdataagenda'])->name('insertdataagenda');
Route::get('tampilkandataagenda/{id}', [AgendaController::class,'tampilkandataagenda'])->name('tampilkandataagenda');
Route::post('updatedataagenda/{id}',[AgendaController::class, 'updatedataagenda'])->name('updatedataagenda');
Route::get('deletedataagenda/{id}',[AgendaController::class, 'deletedataagenda'])->name('deletedataagenda');

// tabel mapel
Route::get('tampilanmapel', [MapelController::class,'tampilanmapel'])->name('tampilanmapel')->middleware('auth');
Route::get('tambahmapel', [MapelController::class,'create'])->name('tambahmapel');
Route::post('insertdatamapel', [MapelController::class,'insertdatamapel'])->name('insertdatamapel');
Route::get('tampilkandatamapel/{id}', [MapelController::class,'tampilkandatamapel'])->name('tampilkandatamapel');
Route::post('updatedatamapel/{id}',[MapelController::class, 'updatedatamapel'])->name('updatedatamapel');
Route::get('deletedatamapel/{id}',[MapelController::class, 'deletedatamapel'])->name('deletedatamapel');


// view guru
Route::get('gurutampil', [GurutampilController::class,'gurutampil'])->name('gurutampil')->middleware('auth');
Route::get('tambahguruview', [GurutampilController::class,'create'])->name('tambahguruview');
Route::post('insertdataguruview', [GurutampilController::class,'insertdataguruview'])->name('insertdataguruview');
// Route::get('insertdataguruview/{id}', [GurutampilController::class,'insertdataguruview'])->name('insertdataguruview');
// Route::post('updatedataguruview/{id}',[GurutampilController::class, 'updatedataguruview'])->name('updatedataguruview');
// Route::get('deletedataguruview/{id}',[GurutampilController::class, 'deletedataguruview'])->name('deletedataguruview');

// login
// Route::get('login', [LoginController::class,'login'])->name('login');