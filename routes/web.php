<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Berandacontroller;



Route::get('/', [berandacontroller::class, 'index'])->name('beranda');