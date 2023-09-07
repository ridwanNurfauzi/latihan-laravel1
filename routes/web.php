<?php

use App\Models\Post;
use App\Http\Controllers\MyController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); # router utama

Route::get('/halo', function () {
    return ('<h2>Halo</h2>' .
        '<p>lorem ipsum</p>'
    );
}); # contoh router

Route::get('/form', function () {
    return view('form');
}); # form
Route::post('/target', [MyController::class, 'showFormTarget']); # target form

Route::get('/testmodel', function () {
    $query = Post::all(); # Menampilkan seluruh data
    
    // $query = Post::find(1); # Menampilkan data berdasarkan id yang telah ditentukan

    // $query = Post::find(1);
    // $query->title = "Title 1 diedit"; # Mengubah record
    // $query->save();

    // $query = new Post;
    // $query->title = "Judul Baru";
    // $query->content = "Konten baru."; # Menambah record
    // $query->save();

    // $query = Post::find(4);
    // $query->delete(); # Menghapus record

    return $query;
}); # Memanipulasi Record dengan model

Route::get('/about', [MyController::class, 'showAbout']); # router dengan controller

Route::get('/user/{firstname}/{lastname}', function (string $firstname, string $lastname) {
    return view('user', ['firstname'=>$firstname, 'lastname'=>$lastname]);
}); # router dengan parameter


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
