<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesseursController;
use Illuminate\Support\Facades\Auth;

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

Route::get('index', function () {
    return view('index');
});

Route::get('create', function () {
    return view('create');
});
Route::get('show', function () {
    return view('show');
});

Auth::routes();

Route::get('/professeurs', [App\Http\Controllers\HomeController::class, 'index'])->name('professeurs');

Route::resource('professeurs',ProfesseursController::class);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
