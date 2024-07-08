<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Normalisasi;

class NormalisasiController extends Controller
{
    public function read() {
        $normalisasi = Normalisasi::all();
        return view('normalisasi.read', compact('normalisasi'));
    }
}
