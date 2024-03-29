<?php

use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UpdateDocumentationController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['splade'])->group(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/docs/{page?}', DocumentationController::class)->name('docs');
    Route::get('/update-docs', UpdateDocumentationController::class)->name('docs.update');

    Route::get('/newsletter', [NewsletterController::class, 'create'])->name('newsletter.create');
    Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store')->middleware(ProtectAgainstSpam::class);
});
