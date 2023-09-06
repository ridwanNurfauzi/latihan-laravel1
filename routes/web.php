<?php

use App\Models\Post;
use App\Http\Controllers\MyController;
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
});

Route::get('/halo', function () {
    return ('<h2>Halo</h2>' .
        '<p>lorem ipsum</p>'
    );
});

Route::get('/form', function () {
    return view('form');
});
Route::post('/target', [MyController::class, 'showFormTarget']);

Route::get('/testmodel', function () {
    $query = Post::all();
    return $query;
}); // Memanipulasi Record dengan model

Route::get('/about', [MyController::class, 'showAbout']);

Route::get('/user/{firstname}/{lastname}', function (string $firstname, string $lastname) {
    return view('user', ['firstname'=>$firstname, 'lastname'=>$lastname]);
});
