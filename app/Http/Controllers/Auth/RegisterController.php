<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        // dd($request->remember);
        $this->validate($request,[
            'name' => ['required', 'max:200'],
            'email' => ['required', 'email', 'unique:users,email'],
            'username' => ['required', 'unique:users,username'],
            'password' => ['required', 'confirmed'],
            // 'termsAndConditions' => ['required'] #I think i need to create a column for this on users table
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'username', 'password')); #I think this is not necessary, only for login

        return redirect()->route('dashboard');

    }
}
