<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated'])->name('authenticated');


Route::middleware('auth', 'revalidate')->group(function()
{
    # code...
    Route::get('admin-page', function(){
        return 'Halaman untuk Admin';
    })->name('dashboard_admin')->middleware('role:admin');
    Route::get('user-page', function(){
        return 'Halaman untuk User';
    })->name('dashboard_user')->middleware('role:user');
});


