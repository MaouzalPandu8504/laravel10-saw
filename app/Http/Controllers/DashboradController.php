<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function __construct(){
        $this -> middleware(['auth', 'verified']);
    }
}
