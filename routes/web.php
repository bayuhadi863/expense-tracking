<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseTrackingController;

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
    return redirect()->route('expense.index');
});

Route::get('/expense', [ExpenseTrackingController::class, 'index'])->name('expense.index');
Route::get('/expense/create', [ExpenseTrackingController::class, 'create'])->name('expense.create');
Route::post('/expense/store', [ExpenseTrackingController::class, 'store'])->name('expense.store');
Route::get('/expense/show/{id}', [ExpenseTrackingController::class, 'show'])->name('expense.show');
Route::get('/expense/{id}/edit', [ExpenseTrackingController::class, 'edit'])->name('expense.edit');
Route::put('/expense/{id}', [ExpenseTrackingController::class, 'update'])->name('expense.update');
