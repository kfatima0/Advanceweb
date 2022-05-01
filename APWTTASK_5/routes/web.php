<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JournalistController;
use App\Http\Controllers\MailController;

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
 
 
Route::get('/login',[JournalistController::class, 'login'])->name('login');
Route::post('/login',[JournalistController::class, 'logininput'])->name('logininput');

Route::get('/Registration',[JournalistController::class, 'Registration'])->name('Registration');
Route::post('/Registration', [JournalistController::class,'Registrationinput'])->name('Registration');
 
Route::get('/send-email',[MailController::class,'sendEmail']);