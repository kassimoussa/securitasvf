<?php

use App\Http\Controllers\AdminController;
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
    return view('index');
});

Route::get('/test', function () {
    return view('test_gmp');
});

Route::get('/login', [AdminController::class, 'accueil']);
Route::post('/connexion', [AdminController::class, 'connexion']);

Route::group(['middleware' => ['logged']], function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });
    
    Route::get('logout', [AdminController::class, 'logout']);
});

Route::prefix('devis')->group(function () {
    /* Route::get('/', [AdminController::class, 'index']); */
    Route::post('/store', [AdminController::class, 'devis_store']);
});

Route::prefix('messages')->group(function () {
   /*  Route::get('/', [AdminController::class, 'index']); */
    Route::post('/store', [AdminController::class, 'message_store']);
});
