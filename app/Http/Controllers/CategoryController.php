<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    //
    public function index() {
        if (!Auth::check()) {
            return redirect('/LoginUser');
        }
        return view('Category', ["categories" => Category::with('data')->get()]);
    }
}
