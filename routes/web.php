<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

//index
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');

//about us
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');

//contact us
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');

//programs
Route::get('/programs', [WebsiteController::class, 'programs'])->name('website.programs');

//website.programs.fulltime
Route::get('/programs/fulltime', [WebsiteController::class, 'fulltime'])->name('website.programs.fulltime');

//website.programs.parttime
Route::get('/programs/parttime', [WebsiteController::class, 'parttime'])->name('website.programs.parttime');

//admissions
Route::get('/admissions', [WebsiteController::class, 'admissions'])->name('website.admissions');

//website.online-application
Route::get('/online-application', [WebsiteController::class, 'onlineApplication'])->name('website.online-application');

//application.submit
Route::post('/application/submit', [WebsiteController::class, 'submitApplication'])->name('application.submit');

//studentlife
Route::get('/studentlife', [WebsiteController::class, 'studentlife'])->name('website.studentlife');

//downloads
Route::get('/downloads', [WebsiteController::class, 'downloads'])->name('website.downloads');

//blog
Route::get('/blog', [WebsiteController::class, 'blog'])->name('website.blog');

//events
Route::get('/events', [WebsiteController::class, 'events'])->name('website.events');

//careers
Route::get('/careers', [WebsiteController::class, 'careers'])->name('website.careers');

//gallery
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('website.gallery');

//support
Route::get('/support', [WebsiteController::class, 'support'])->name('website.support');

//subscribe posts
Route::post('/subscribe', [WebsiteController::class, 'subscribe'])->name('website.subscribe');

//sitemap
Route::get('/sitemap.xml', [WebsiteController::class, 'sitemap'])->name('website.sitemap');

//privacy-policy
Route::get('/privacy-policy', [WebsiteController::class, 'privacyPolicy'])->name('website.privacy-policy');




Route::post('/contact-send', [WebsiteController::class, 'send'])->name('contact-send');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
