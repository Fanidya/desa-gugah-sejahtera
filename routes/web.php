<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('guest.pages.login.index');
    })->name('login');

    Route::get('/', function () {
        return view('guest.pages.beranda.index');
    })->name('beranda');

    Route::get('/profile/sejarah/', function () {
        return view('guest.pages.profile.sejarah.index');
    })->name('guest.profile.sejarah');

    Route::get('/profile/visi-misi', function () {
        return view('guest.pages.profile.visi-misi.index');
    })->name('guest.profile.visi-misi');

    Route::get('/profile/fasilitas', function () {
        return view('guest.pages.profile.fasilitas.index');
    })->name('guest.profile.fasilitas');

    Route::get('/pemerintahan-desa/struktur', function () {
        return view('guest.pages.profile.fasilitas.index');
    })->name('guest.profile.fasilitas');

    Route::get('/pemerintahan-desa/struktur', function () {
        return view('guest.pages.pemerintahan-desa.struktur.index');
    })->name('guest.pemerintahan-desa.struktur');

    Route::get('/pemerintahan-desa/program-kerja', function () {
        return view('guest.pages.pemerintahan-desa.program-kerja.index');
    })->name('guest.pemerintahan-desa.program-kerja');

    Route::get('/data-desa', function () {
        return view('guest.pages.data-desa.index');
    })->name('guest.data-desa');

    Route::get('/publikasi/pengumuman', function () {
        return view('guest.pages.publikasi.pengumuman.index');
    })->name('guest.publikasi.pengumuman');

    Route::get('/publikasi/galeri', function () {
        return view('guest.pages.publikasi.galeri.index');
    })->name('guest.publikasi.galeri');
});

Route::get('admin/beranda', function () {
    return view('admin.pages.beranda.index');
})->name('admin.dashboard.beranda');

Route::get('admin/profile-desa', function () {
    return view('admin.pages.profile-desa.index');
})->name('admin.dashboard.profile-desa');


Route::get('admin/pemerintahan-desa', function () {
    return view('admin.pages.pemerintahan-desa.index');
})->name('admin.dashboard.pemerintahan-desa');

Route::get('admin/data-desa', function () {
    return view('admin.pages.data-desa.index');
})->name('admin.dashboard.data-desa');

Route::get('admin/publikasi', function () {
    return view('admin.pages.publikasi.index');
})->name('admin.dashboard.publikasi');
