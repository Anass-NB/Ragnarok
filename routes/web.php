<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\StudentController as ApiStudentController;
use App\Http\Controllers\DirecteurController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\UserController;
use App\Mail\HelloMail;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
    return view('auth.login');
});


Route::get("posts", [PostController::class, "index"]);
Route::post("upload", [PostController::class, "store"])->name("store_post");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/table', function () {
    return view("table");
});
Route::post('/postuler/{id}', [App\Http\Controllers\HomeController::class, 'postuler'])->name('postuler');


Route::get("students", [StudentController::class, "index"])->name("all_users")->middleware('auth');;
Route::get("get-pdf", [StudentController::class, "getPdf"])->name("get.pdf")->middleware('auth');;
Route::get("get-excel", [StudentController::class, "getExcel"])->name("get.excel")->middleware('auth');;
Route::get("responsables", [ResponsableController::class, "index"])->name("all_responsables")->middleware('auth');;
Route::get("directeurs", [DirecteurController::class, "index"])->name("all_directeurs")->middleware('auth');;

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});


Route::get("livewire", function () {
    return view("main-livewire");
});


Route::get('sendmail', function () {
    Mail::to("anassnbbnnb@gmail.com")->send(new HelloMail());
});




