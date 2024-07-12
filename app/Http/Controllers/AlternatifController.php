<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\MinMax;

class AlternatifController extends Controller
{
    public function read() {
        $alternatif = Alternatif::all();
        $minmax = MinMax::all();
        return view('alternatif.read', compact('alternatif', 'minmax'));
    }

    public function create() {
        return view('alternatif.create');
    }

    public function store(Request $request) {
        $request -> validate([
            'nama'=> 'required | string',
            'luas_bangunan' => 'required | numeric',
            'jumlah_penerangan' => 'required | numeric',
            'pendapatan' => 'required | numeric',
            'jumlah_anggota_keluarga'=> 'required | numeric'
        ]);

        Alternatif::create([
            'nama' => $request -> nama,
            'luas_bangunan' => $request -> luas_bangunan,
            'jumlah_penerangan' => $request -> jumlah_penerangan,
            'pendapatan' => $request -> pendapatan,
            'jumlah_anggota_keluarga' => $request -> jumlah_anggota_keluarga
        ]);

        return redirect() -> route('alternatif');
    }

    public function edit($id) {
        $alternatif = Alternatif::findOrFail($id);
        return view('alternatif.edit', compact('alternatif'));
    }

    public function update(Request $request, $id) {
        $request -> validate([
            'nama' => 'required|string|max:50',
            'luas_bangunan' => 'required|numeric',
            'jumlah_penerangan' => 'required|numeric',
            'pendapatan' => 'required|numeric',
            'jumlah_anggota_keluarga' => 'required|numeric',
        ]);

        $alternatif = Alternatif::findOrFail($id);
        $alternatif -> nama = $request -> nama;
        $alternatif -> luas_bangunan = $request -> luas_bangunan;
        $alternatif -> jumlah_penerangan = $request -> jumlah_penerangan;
        $alternatif -> pendapatan = $request -> pendapatan;
        $alternatif -> jumlah_anggota_keluarga = $request -> jumlah_anggota_keluarga;
        $alternatif -> save();

        return redirect() -> route('alternatif') -> with('success', 'Berhasil.');
    }

    public function destroy($id) {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->delete();

        return redirect()->route('alternatif')->with('success', 'Alternative deleted successfully.');
    }
}
