<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Data;

class PaymentController extends Controller
{
    public function payment($id){
        if (!Auth::check()) {
            return view("LoginUser");
        }

        $vehicle = Data::find($id);
        return view('Payment', compact('vehicle'));
    }

    public function validation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'paymentMethod' => 'required', // Assuming paymentMethod is required
            'selectedBank' => 'required', // Assuming radio-choice is required
            'accountNumber' => 'required|size:16', // Assuming accountNumber is required and numeric
        ]);

         if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }else{
            sleep(3);
        }

        // Your payment processing logic here

        return redirect('/Home')->back()->with('success', 'Payment successful!'); // Redirect back with success message
    }
}
