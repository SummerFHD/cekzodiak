<?php

// routes/web.php

use App\Http\Controllers\ZodiacController;

Route::get('/', [ZodiacController::class, 'index']);
Route::post('/cek-zodiak', [ZodiacController::class, 'cekZodiak']);

// Menambahkan route untuk halaman "Tentang Kami"
Route::get('/tentang-kami', function () {
    return view('creator');
});
