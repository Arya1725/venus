<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function show_dashboard() {
        return view('Beranda');
    }

    public function show_from_pemesanan() {
        return view('Form-Pemesanan');
    }

    public function show_kamar() {
        return view('Kamar');
    }
}
