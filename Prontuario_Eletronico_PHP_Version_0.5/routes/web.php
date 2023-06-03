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
    
    Route::get('perfil', [PrivateController::class, 'perfil'])->name('perfil');

    Route::get('paciente', [PrivateController::class, 'paciente'])->name('pagina_paciente');
    Route::get('receita/{id}', [PrivateController::class, 'receita'])->name('receita');

    Route::get('atestados', [PrivateController::class, 'atestados'])->name('atestados');
    Route::get('atestado/{id}', [PrivateController::class, 'atestado'])->name('atestado');

    Route::get('laudos', [PrivateController::class, 'laudos'])->name('laudos');
    Route::get('laudo/{id}', [PrivateController::class, 'laudo'])->name('laudo');
});


