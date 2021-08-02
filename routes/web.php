<?php

use App\Models\anime;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [
    'uses' => 'App\Http\Controllers\ListController@dashboard'
])->name('dashboard');

Route::get('/dashboard', [
    'uses' => 'App\Http\Controllers\ListController@dashboard'
    ])->name('dashboard');

Route::get('/list', [
    'uses' => 'App\Http\Controllers\ListController@index'
])->name('list');

Route::get('/register', function () {
    return view('register');
})->middleware(['auth'])->name('register');




require __DIR__.'/auth.php';
