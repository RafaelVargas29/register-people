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

use App\Http\Controllers\RegisterPeopleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [RegisterPeopleController::class, 'create']);
Route::post('/operations/store', [RegisterPeopleController::class, 'store']);

