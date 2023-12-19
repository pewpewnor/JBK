<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Data;

class DetailPageController extends Controller
{
    public function AccessDetail($id)
    {
        $isLoggedIn = Auth::check();

        

        $vehicle = Data::find($id);

        if (!$vehicle) {
            abort(404); // Or handle not found scenario as needed
        }


        return view('DetailPage', compact('isLoggedIn', 'vehicle'));


    }

}
