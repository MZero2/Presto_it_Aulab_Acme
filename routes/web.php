<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevisorController;

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

Route::get('/', [FrontController::class, "welcome"])->name('home');

//Rotte ItemController
Route::get('/items/create', [ItemController::class, 'create'])->middleware('auth')->name('item.create');
Route::get('/detail/item/{item}', [ItemController::class, 'showItem'])->name('item.show');
Route::get('/all/items', [ItemController::class, 'indexItem'])->name('item.index');
Route::delete('/items/delete/{item}',[ItemController::class, 'delete'])->middleware('auth')->name('item.delete');

//Rotte FrontController
Route::get('/search/items', [FrontController::class, 'searchItems'])->name('item.search');
Route::get('/category/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');

//Rotte Revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/item/{item}', [RevisorController::class, 'acceptItem'])->middleware('isRevisor')->name('revisor.accept_item');
Route::patch('/reject/item/{item}', [RevisorController::class, 'rejectItem'])->middleware('isRevisor')->name('revisor.reject_item');
Route::post('/revisor/undo', [RevisorController::class, 'undoAction'])->name('revisor.undoAction');
Route::post('/request/revisor', [RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/form/revisor/',[RevisorController::class,'formRevisor'])->middleware('auth')->name('form.revisor');
Route::get('/make/revisor/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');

//Rotte ProfileController
Route::get('/user/profile',[ProfileController::class,'profile'])->name('user.profile');
Route::patch('profile/accept/item/{item}', [ProfileController::class, 'acceptItem'])->middleware('isRevisor')->name('profile.accept_item');
Route::patch('profile/reject/item/{item}', [ProfileController::class, 'rejectItem'])->middleware('isRevisor')->name('profile.reject_item');
Route::get('/profile/show/item_to_check/{item_to_check}', [ProfileController::class, 'viewItemtoCheck'])->middleware('isRevisor')->name('item_to_check.show');

//rotta language
Route::post('/lingua/{lang}',[FrontController::class,'setLanguage'])->name('setLocale');
