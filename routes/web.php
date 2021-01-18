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

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
Auth::routes();

Route::get('/', [App\Http\Controllers\TemplateController::class, 'index'])->name('asset.home');
/*admin*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

Route::get('/Visitor', function(){
	return view('admin.visitor');
});

Route::get('/vistorCount', function(){
	return view('admin.vistorCount');
});

Route::view('chat','admin.Group_chat');

Route::post('chat', [App\Http\Controllers\HomeController::class, 'chat']);

Route::get('/chat', function(){
	return view('admin.Group_chat');
});



