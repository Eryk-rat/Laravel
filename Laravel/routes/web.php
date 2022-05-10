<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('tests', App\Http\Controllers\testController::class);


Route::resource('testLibraries', App\Http\Controllers\test_libraryController::class);


Route::resource('testLibrary2s', App\Http\Controllers\test_library_2Controller::class);

Route::get('/sms',[SmsController::class, 'index']);
Route::post('/sms/veryfikation',[SmsController::class, 'veryfikation']);
Route::get('/sms/test',[SmsController::class, 'sms_send']);

