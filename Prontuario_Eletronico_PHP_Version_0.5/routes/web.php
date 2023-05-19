<?php

use App\Http\Controllers\PrivateController;
use App\Http\Controllers\RoutePublicController;
use Illuminate\Support\Facades\Route;


Route::prefix('')->group(function (){
    
    // Public Routes
    Route::get('', [RoutePublicController::class, 'index']) ->name('index');

    Route::get('entrar', [RoutePublicController::class, 'entrar'])->name('entrar');


    // Auth routs
    Route::post('login', [RoutePublicController::class, 'login'])->name('login');
    Route::get('logout', [RoutePublicController::class, 'logout'])->name('logout');
});

Route::prefix('auth')->group(function(){
    Route::get('paciente', [PrivateController::class, 'paciente'])->name('pagina_paciente');
});


