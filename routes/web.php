<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TamuController;

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

Route::get('/', [TamuController::class, 'show_dashboard']);

route::get('/Form-Pemesanan', function () {
    return view('Form-Pemesanan');
});

route::get('/Kamar', function () {
    return view('Kamar');
});

route::get('/Login', function () {
    return view('Login');
});

route::get('/Admin', function () {
    return view('Admin');
});

route::get('/KamarAdmin', function () {
    return view('KamarAdmin');
});

route::get('/FasilitasHotel', function () {
    return view('FasilitasHotel');
});

route::get('/KelasKamar', function () {
    return view('KelasKamar');
});

route::get('/FasilitasKamar', function () {
    return view('FasilitasKamar');
});

route::get('/resi', function () {
    return view('resi');
});

route::get('/Logout', function () {
    return view('Logout');
});

route::get('/Resepsionis', function () {
    return view('Resepsionis');
});

route::get('/History', function () {
    return view('History');
});

route::get('/Ongoing', function () {
    return view('Ongoing');
});

route::get('/Pending', function () {
    return view('Pending');
});

route::get('/Tabel_resepsionis', function () {
    return view('');
});
