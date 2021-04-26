<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return redirect('admin');
}) ->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/company/create', [CompanyController::class, 'create'])->middleware('manager');
Route::post('/company/create', [CompanyController::class, 'store'])->middleware('manager');

Route::get('/company/list', [CompanyController::class, 'showAll'])->middleware('user');

Route::get('/company/delete', [CompanyController::class, 'showDelete'])->middleware('admin');
Route::get('/company/delete/{id}', [CompanyController::class, 'delete'])->middleware('admin');

Route::get('/company/{id}', [CompanyController::class, 'showOne'])->middleware('user');

Route::get('/company/update/{id}', [CompanyController::class, 'display'])->middleware('manager');
Route::post('/company/update/{id}', [CompanyController::class, 'update'])->middleware('manager');




Route::get('/collaborator/create', [CollaboratorController::class, 'create'])->middleware('manager');
Route::post('/collaborator/create', [CollaboratorController::class, 'store'])->middleware('manager');

Route::get('/collaborator/list', [CollaboratorController::class, 'showAll'])->middleware('user');

Route::get('/collaborator/delete', [CollaboratorController::class, 'showDelete'])->middleware('admin');
Route::get('/collaborator/delete/{id}', [CollaboratorController::class, 'delete'])->middleware('admin');

Route::get('/collaborator/update', [CollaboratorController::class, 'showUpdate'])->middleware('manager');
Route::get('/collaborator/update/{id}', [CollaboratorController::class, 'display'])->middleware('manager');
Route::post('/collaborator/update/{id}', [CollaboratorController::class, 'update'])->middleware('manager');

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('user');
Route::get('/manager', [ManagerController::class, 'index'])->name('manager')->middleware('manager');
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');

require __DIR__.'/auth.php';

Auth::routes();