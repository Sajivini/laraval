<?php

use App\Http\Controllers\CompanyController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/add-comDetails',[CompanyController::class, 'addDetails']);
Route::post('/create-Details', [CompanyController::class, 'createDetails'])-> name('post.create');
Route::get('/Details',[CompanyController::class,'getDetails']);
Route::get('/Delete_details/{id}',[CompanyController::class,'deleDetails']);
