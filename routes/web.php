<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ListItemsController;
use App\Http\Controllers\ListNameController;
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
    return view('items/index');
});

Route::resource('/items', ItemsController::class)->names('items');

Route::resource('/lists', ListController::class)->names('lists');

Route::resource('/listitems', ListItemsController::class)->names('listitems');

Route::resource('/listname', ListNameController::class)->names('listname');






