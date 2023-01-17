<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\acceptorsController;
use App\Http\Controllers\donorController;

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

Route::get('acceptors', [acceptorsController :: class, 'index']);
Route::post('acceptors-sent', [acceptorsController :: class, 'addAcceptors']);



Route::get('donors', [donorController :: class, 'index']);
Route::post('donors-sent', [donorController :: class, 'addDonors']);


Route::get('donors-list', [donorController :: class, 'donorDisplay']);
