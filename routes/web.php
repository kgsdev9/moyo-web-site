<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Register\RegisterEncadreurProController;
use App\Http\Controllers\Register\RegisterParentLocalController;

Route::get('/', [HomeController::class, 'home'])->name('home');

// Pages statiques
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.page');


Route::post('/register/parent/local', [RegisterParentLocalController::class, 'store'])->name('parents.local.store');

Route::post('/register/parent/diaspora', [RegisterParentLocalController::class, 'store'])->name('parents.diaspora.store');

Route::post('/register/parent/professionel', [RegisterEncadreurProController::class, 'store'])->name('professionnels.store');


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

Route::get('/privacy', function () {
    return view('home.privacy');
})->name('politique.confidentialite');

Route::get('/about', function () {
    return view('home.about');
})->name('about');

Route::get('/pricing', function () {
    return view('home.abonnement');
})->name('pricing');



Route::get('/register/moyo', [HomeController::class, 'registerMoyo'])
    ->name('register.moyo');

