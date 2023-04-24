<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/system/customers', \App\Http\Livewire\Customers::class)->name('customers');
//    Route::get('/system/users',\App\Http\Livewire\UserTable::class)->name('userOfTheSystem');
        Route::get('/system/users',\App\Http\Livewire\UserList::class)->name('userOfTheSystem');
    Route::get('/system/users/12',[\App\Http\Livewire\UserList::class,'userEdit'])->name('user.edit');
    Route::delete('system/users/delete',[\App\Http\Livewire\UserList::class,'userDelete'])->name('user.destroy');


    Route::get('/users/roles',\App\Http\Livewire\Roles::class)->name('roles');
     Route::get('register/users',function (){return view('livewire/registerRole');});

     Route::post('registerRole',[\App\Http\Livewire\Roles::class,'registerRole'])->name('admin/register/role');







});




require __DIR__.'/auth.php';
