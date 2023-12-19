<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerUser(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);

        User::create([
            "name" => $request->username,
            "email"=> $request->email,
            "password"=> $request->password,
        ]);

        return view("LoginUser");
    }

    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['credential' => 'Username or password is incorrect']);
        }
    }


    public function showUserData()
    {
        // Retrieve the currently authenticated user
        $user = Auth::user();

        // Display the user data in the view
        return view('UpdateProfile', [
            'email' => $user->email,
            'username' => $user->name, 
        ]);
    }

    public function updateProfile(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::find(Auth::id());

        // $Curruser = User::where('id', $user->id);

        $user->name = $request->input('username');
        $user->email = $request->input('email'); 
        $user->password = $request->input('password');

        $user->save();

        // $user->update([
        //     'name' => $request->input('username'),
        //     'email' => $request->input('email'),
        //     'password'=> $request->input('password'),
        // ]);

        return redirect('/UpdateProfile');
        
    }


}
