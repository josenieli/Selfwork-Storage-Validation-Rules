<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\PublicController;
use App\Http\controllers\RisultatiController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chisiamo',[PublicController::class, 'chisiamo'])->name('chisiamo');

Route::get('/chisiamo/detail/{name}', [PublicController::class, 'chisiamodetail'])->name('chisiamodetail');


Route::get('/servizi', function(){
    return view('servizi');
});

Route::get('/risultati', [RisultatiController::class, 'risultati']);

Route::get('/risultati/detail/{id}', [RisultatiController::class, 'listaRisultati'])->name('risultati.detail');

Route::get('/contattaci', [PublicController::class, 'contatta'])->name('contatta.us');

Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');

Route::get('/thank-you',[PublicController::class, 'thankYou'])->name('thankYou');

Route::get('/risultati/create', [RisultatiController::class, 'create'])->name('risultati.create');

Route::post('/risultati/submit', [RisultatiController::class, 'store'])->name('risultati.submit'); 

Route::get('/risultati/risultatiAttesi', [RisultatiController::class, 'risultatiAttesi'])->name('risultati.risultatiAttesi');
