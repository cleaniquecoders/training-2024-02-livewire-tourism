<?php

use App\Livewire\Counter;
use App\Livewire\SearchUser;
use App\Livewire\UserDatatable;
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
    return view('welcome');
});

Route::get('/counter', Counter::class)->name('counter');

Route::get('search-user', SearchUser::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('users', UserDatatable::class);
    Route::view('users', 'user');
});

Route::prefix('alpine')->group(function() {
    Route::view('counter', 'alpine.counter');
    Route::view('toggle', 'alpine.toggle');
    Route::view('search', 'alpine.search');
    Route::view('dropdown', 'alpine.dropdown');
    Route::view('accordion', 'alpine.accordion');
    Route::view('tab', 'alpine.tab');
});
