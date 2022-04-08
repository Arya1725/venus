<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_admin() {
        return view('Admin', ["Title" => "Admin"]);
    }

    public function show_kamar_admin() {
        return view('KamarAdmin', ["Title" => "Admin"]);
    }

    public function show_fasilitas_hotel() {
        return view('FasilitasHotel', ["Title" => "Admin"]);
    }

    public function show_kelas_kamar() {
        return view('KelasKamar', ["Title" => "Admin"]);
    }

    public function show_fasilitas_kamar() {
        return view('FasilitasKamar', ["Title" => "Admin"]);
    }
}
