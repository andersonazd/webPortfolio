<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaginaPrincipalController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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


// Pagina Principal
Route::get('/', [PaginaPrincipalController::class, 'landingPage'])
    ->name('landingPage');
Route::get('/inicio', [PaginaPrincipalController::class, 'index'])
    ->name('principal');
Route::get('/proyectos', [PaginaPrincipalController::class, 'proyectos'])
    ->name('pproyectos');
Route::get('/contacto', [PaginaPrincipalController::class, 'contacto'])
    ->name('contacto');
// Mail Controller
Route::post('/contacto', [PaginaPrincipalController::class, 'enviarMensaje'])
    ->name('enviarMensaje');



// Admin Routes Category
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/category', [CategoryController::class, 'index'])
    ->name('addcategory');
    Route::get('/createcategory', [CategoryController::class, 'create'])
    ->name('createcategory');
    Route::Post('/category', [CategoryController::class, 'store'])
    ->name('storecategory');
    Route::get('/editcategory/{id}', [CategoryController::class, 'edit'])
    ->name('editcategory');
    Route::post('/category/{id}', [CategoryController::class, 'update'])
    ->name('updatecategory');
    Route::get('/deletecategory/{id}', [CategoryController::class, 'destroy'])
    ->name('deletecategory');
});

//Admin Routes Proyectos
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/addproyectos', [ProyectoController::class, 'index'])
    ->name('proyectos');
    Route::get('/createproyecto', [ProyectoController::class, 'create'])
    ->name('createproyecto');
    Route::Post('/addproyectos', [ProyectoController::class, 'store'])
    ->name('storeproyectos');
    Route::get('/editproyecto/{id}', [ProyectoController::class, 'edit'])
    ->name('editproyecto');
    Route::post('/addproyectos/{id}', [ProyectoController::class, 'update'])
    ->name('updateproyecto');
    Route::get('/deleteproyecto/{id}', [ProyectoController::class, 'destroy'])
    ->name('deleteproyecto');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');


// Route::resource('users', UsersController::class)->name('users');

