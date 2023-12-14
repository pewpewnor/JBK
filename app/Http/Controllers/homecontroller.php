<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function homepage(){
        $database = Data::all()->where('type', 'mobil');
        $database2 = Data::all()->where('type', 'motor');
        return view('Home', compact('database'), compact('database2'));
    }
}
