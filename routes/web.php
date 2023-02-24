<?php

use App\Http\Controllers\StudentsController;
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
    return view('main');
});

Route::get('/login-admin', function () {
    return view('loginAdmin');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/students/add', function () {
    return view('students.formAdd');
});

Route::resource('students', StudentsController::class);