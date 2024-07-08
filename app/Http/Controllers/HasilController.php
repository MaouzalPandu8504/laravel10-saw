<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasil;

class HasilController extends Controller
{
    public function read() {
        $hasil = Hasil::all();
        return view('hasil.read', compact('hasil'));
    }
}
