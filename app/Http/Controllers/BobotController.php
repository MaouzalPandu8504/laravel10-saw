<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bobot;

class BobotController extends Controller
{
    public function read() {
        $bobot = Bobot::all();
        return view("bobot.read", compact('bobot'));
    }

    public function edit($id) {
        $bobot = Bobot::findOrFail($id);
        return view("bobot.edit", compact("bobot"));
    }

    public function update(Request $request, $id) {
        $request -> validate([
            'w1' => 'required|numeric',
            'w2' => 'required|numeric',
            'w3' => 'required|numeric',
            'w4' => 'required|numeric',
        ]);

        $total = $request -> w1 + $request -> w2 + $request -> w3 + $request -> w4;
        if ($total != 100){
            return redirect()->back()->withInput()->with(['error' => 'Bobot tidak boleh kurang / lebih dari 100!', 'total' => $total]);
        } else {
            $bobot = Bobot::findOrFail($id);
            $bobot -> w1 = $request -> w1;
            $bobot -> w2 = $request -> w2;
            $bobot -> w3 = $request -> w3;
            $bobot -> w4 = $request -> w4;

            $bobot -> save();
            return redirect() -> route('bobot') -> with('success', 'weight updated successfully.');
        }
    }
}
