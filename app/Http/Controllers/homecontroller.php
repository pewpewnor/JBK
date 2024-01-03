<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    public function homepage(){
        $mobils = Category::where('name', 'Mobil')->first()->data;
        $motors = Category::where('name', 'Motor')->first()->data;
        return view('Home', ["mobils" => $mobils, "motors" => $motors]);
    }
}
