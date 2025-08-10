<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;


Route::get('/', [HomeController::class, 'home'])->name('home');

// Pages statiques
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.page');



Route::get('/faq', function () {
    return view('home.faq');
})->name('faq');


Route::get('/register/parent/local', function () {
    return view('home.pages.registerparentlocal');
})->name('register.parent.local');


Route::get('/register/parent/diaspora', function () {
    return view('home.pages.registerparentdiaspora');
})->name('register.parent.diaspora');


Route::get('/register/professionel', function () {
    return view('home.pages.registerencadreur');
})->name('register.professionel');


Route::get('/condtion-generale-utilisisation', function () {
    return view('home.conditionutilisation');
})->name('condition.utilisation');


Route::get('/emploi', function () {
    return view('home.emploi');
})->name('emploi');

Route::get('/devenir-promoteur', function () {
    return view('pages.devenirpromoteur');
})->name('home.promoteur');

Route::get('/termes-condition', function () {
    return view('home.termeconditon');
})->name('terme.conditon');

Route::get('/about', function () {
    return view('home.about');
})->name('about');

Route::get('/pricing', function () {
    return view('home.abonnement');
})->name('pricing');



Route::get('/register/moyo', [HomeController::class, 'registerMoyo'])
    ->name('register.moyo');

