<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BotUserAdminController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\OrderAdminController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/offer', [OfferController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware([AdminMiddleware::class])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/bot_users', [BotUserAdminController::class, 'index'])->name('admin.bot_users');
    Route::post('/bot_users/balance/updating', [BotUserAdminController::class, 'updateBalance'])->name('admin.bot_users.update_balance');
    Route::post('/bot_users/processing/updating', [BotUserAdminController::class, 'updateProcessing'])->name('admin.bot_users.update_processing');
    Route::get('/users', [UserAdminController::class, 'index'])->name('admin.users');
    Route::get('/orders', [OrderAdminController::class, 'index'])->name('admin.orders');
});

require __DIR__.'/auth.php';
