<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\AdminDashboard;
use App\Livewire\ManagerDashboard;
use App\Livewire\AssistantDashboard;

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
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function(){
Route::get('/AdminDashboard', AdminDashboard::class)->name('AdminDashboard');
});

Route::middleware(['auth', 'role:manager'])->group(function(){
Route::get('/ManagerDashboard', ManagerDashboard::class)->name('ManagerDashboard');
});

Route::middleware(['auth', 'role:assistant'])->group(function(){
Route::get('/AssistantDashboard', AssistantDashboard::class)->name('AssistantDashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
