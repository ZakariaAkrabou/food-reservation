<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\User\MenController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenusController;
use App\Http\Controllers\user\FilterController;
use App\Http\Controllers\User\ReservController;
use App\Http\Controllers\Admin\TablesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReservationController;



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

Route::get('/',[WelcomeController::class, 'index']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//Admin Routes
Route::middleware(['auth','is_admin'])->group(function(){

    Route::resource('dashboard', AdminController::class);
    
    Route::resource('/category', CategoryController::class);

    Route::resource('/tables', TablesController::class);
    
    Route::resource('/menus', MenusController::class);

    Route::resource('/reservation', ReservationController::class);
               
        

        
 
});

Route::resource('/reservations',ReservController::class);
Route::resource('/menu',MenController::class);

Route::get('/menu/{id}/filter', [FilterController::class,'filter'])->name('categorie.filter');