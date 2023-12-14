<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    public function homepage(){
        $isLoggedIn = Auth::check();
        $database = Data::all()->where('type', 'mobil');
        $database2 = Data::all()->where('type', 'motor');
        return view('Home', compact('database', 'database2', 'isLoggedIn'));
    }
}
