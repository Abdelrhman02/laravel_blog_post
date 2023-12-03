<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Models\Post;

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

Route::view('/', 'welcome');

Route::resource('posts', PostsController::class);