<?php

use App\Http\Controllers\IndustrialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndustrialController::class, 'home'])->name('home');
Route::get('/produk', [IndustrialController::class, 'products'])->name('products');
Route::get('/produk/{slug}', [IndustrialController::class, 'productDetail'])->name('products.show');
Route::get('/fasilitas-mesin', [IndustrialController::class, 'facilities'])->name('facilities');
Route::get('/alur-kerja', [IndustrialController::class, 'workflow'])->name('workflow');
Route::get('/portofolio', [IndustrialController::class, 'portfolio'])->name('portfolio');
Route::get('/tentang', [IndustrialController::class, 'about'])->name('about');

Route::get('/request-quote', [IndustrialController::class, 'rfq'])->name('rfq');
Route::post('/request-quote', [IndustrialController::class, 'storeRfq'])->name('rfq.store');
Route::get('/request-quote/sukses/{id}', [IndustrialController::class, 'rfqSuccess'])->name('rfq.success');

Route::get('/unduh-katalog', [IndustrialController::class, 'catalogDownload'])->name('catalog');

Route::get('/kontak', [IndustrialController::class, 'contact'])->name('contact');
Route::post('/kontak', [IndustrialController::class, 'storeContact'])->name('contact.store');

Route::get('/sitemap.xml', [IndustrialController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [IndustrialController::class, 'robots'])->name('robots');
