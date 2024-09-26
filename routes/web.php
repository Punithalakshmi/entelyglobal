<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\ComplianceController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\MailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('admin/dashboard');

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

Route::middleware('auth')->group(function () {
   // Route::get('/admin/dashboard', [HomeController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('admin/files', [FilesController::class, 'index'])->name('admin/files');
    Route::get('admin/files', [FilesController::class, 'index'])->name('admin/files');
    Route::get('/admin/compliance', [ComplianceController::class, 'index'])->name('admin/compliance');
    Route::get('/admin/settings', [SettingsController::class, 'index'])->name('admin/settings');
    Route::get('/admin/help', [HelpController::class, 'index'])->name('admin/help');
    Route::get('/admin/mails', [MailsController::class, 'index'])->name('admin/mails');
});

require __DIR__.'/auth.php';
