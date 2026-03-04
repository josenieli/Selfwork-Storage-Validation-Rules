<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\PublicController;
use App\Http\controllers\RisultatiController;

Route::get('/', [PublicController::class, 'homepage'])->name('Homepage');

Route::get('/chisiamo',[PublicController::class, 'chisiamo'])->name('chisiamo');

Route::get('/chisiamo/detail/{name}', [PublicController::class, 'chisiamodetail'])->name('chisiamodetail');


Route::get('/servizi', function(){
    return view('servizi');
});

Route::get('/risultati', [RisultatiController::class, 'risultati']);

Route::get('/risultati/detail/{id}', [RisultatiController::class, 'listaRisultati'])->name('risultati.detail');