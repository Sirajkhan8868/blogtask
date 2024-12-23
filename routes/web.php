<?php

use App\Http\Controllers\Auth\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('prop', [BlogController::class, 'prop'])->name('prop');
Route::get('programme', [BlogController::class, 'programme'])->name('programme');
Route::get('contact', [BlogController::class, 'contact'])->name('contact');
Route::get('contacts', [BlogController::class, 'contacts'])->name('contacts');
Route::get('parrainer', [BlogController::class, 'parrainer'])->name('parrainer');
Route::get('props', [BlogController::class, 'props'])->name('props');
Route::get('politique', [BlogController::class, 'politique'])->name('politique');


Route::get('lithotherapie', [BlogController::class, 'lithotherapie'])->name('lithotherapie');
Route::get('/reservation', [BlogController::class, 'reservation'])->name('reservation');
Route::get('/boutique', [BlogController::class, 'boutique'])->name('boutique');


Route::get('leveil', [BlogController::class, 'leveil'])->name('leveil');
Route::get('empathe', [BlogController::class, 'empathe'])->name('empathe');
Route::get('medium', [BlogController::class, 'medium'])->name('medium');
Route::get('voyante', [BlogController::class, 'voyante'])->name('voyante');
Route::get('guerisseur', [BlogController::class, 'guerisseur'])->name('guerisseur');
Route::get('chamane', [BlogController::class, 'chamane'])->name('chamane');

Route::get('signes', [BlogController::class, 'signes'])->name('signes');
Route::get('taux', [BlogController::class, 'taux'])->name('taux');
Route::get('timeline', [BlogController::class, 'timeline'])->name('timeline');
Route::get('les', [BlogController::class, 'les'])->name('les');
Route::get('miroirs', [BlogController::class, 'miroirs'])->name('miroirs');
Route::get('cycles', [BlogController::class, 'cycles'])->name('cycles');

Route::get('outils', [BlogController::class, 'outils'])->name('outils');
Route::get('divination', [BlogController::class, 'divination'])->name('divination');
Route::get('runes', [BlogController::class, 'runes'])->name('runes');
Route::get('pendulum', [BlogController::class, 'pendulum'])->name('pundulum');
Route::get('chandelles', [BlogController::class, 'chandelles'])->name('chandelles');
Route::get('crystal', [BlogController::class, 'crystal'])->name('crystal');
Route::get('cartes', [BlogController::class, 'cartes'])->name('cartes');
Route::get('lithotherap', [BlogController::class, 'lithotherap'])->name('litherap');
Route::get('lithotherapi', [BlogController::class, 'lithotherapi'])->name('litherapi');

Route::get('/propos', [BlogController::class, 'propos'])->name('propos');
Route::get('livestream', [BlogController::class, 'livestream'])->name('livestream');
Route::get('plans', [BlogController::class, 'plans'])->name('plans');

Route::get('changement', [BlogController::class, 'changement'])->name('changement');
Route::get('watch', [BlogController::class, 'watch'])->name('watch');
Route::get('background', [BlogController::class, 'background'])->name('background');
Route::get('vibratory', [BlogController::class, 'vibratory'])->name('vibratory');
Route::get('plumes', [BlogController::class, 'plumes'])->name('plumes');












Route::get('contact', [BlogController::class, 'contact'])->name('contact');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
