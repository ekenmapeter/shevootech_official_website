<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

// ── Public / Agency Showcase ─────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// ── Blog ─────────────────────────────────────────────────
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// ── Tools ────────────────────────────────────────────────
Route::get('/tools', [ToolController::class, 'index'])->name('tools.index');
Route::get('/tools/{slug}', [ToolController::class, 'show'])->name('tools.show');

// ── Marketplace / Store ──────────────────────────────────
Route::get('/store', [StoreController::class, 'index'])->name('store.index');
Route::get('/store/{slug}', [StoreController::class, 'show'])->name('store.show');

// ── Checkout (requires auth) ─────────────────────────────
Route::middleware('auth')->group(function () {
    Route::post('/checkout/{product}', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::get('/checkout/{order}', [CheckoutController::class, 'show'])->name('checkout.show');
    Route::post('/checkout/{order}/proof', [CheckoutController::class, 'uploadProof'])->name('checkout.proof');
});

// ── Dashboard (requires auth + verified) ─────────────────
Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', fn () => view('dashboard'))->name('dashboard');
    Route::get('/purchases', [DashboardController::class, 'purchases'])->name('dashboard.purchases');
    Route::get('/download/{order}', [DashboardController::class, 'download'])->name('dashboard.download');
});

// ── Profile (requires auth) ──────────────────────────────
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ── Filament Admin Panel ─────────────────────────────────
Route::prefix('admin')->group(function () {
    // Filament routes are auto-registered via service provider
});

require __DIR__.'/auth.php';
