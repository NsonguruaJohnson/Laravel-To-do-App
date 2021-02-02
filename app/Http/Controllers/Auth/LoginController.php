<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        #Today's class
        // $credentials = collect($request)->only('username', 'password');
        // Auth::attempt([
        //     'username' => $credentials['username'],
        //     'password' => $credentials['password']
        // ], $request->remember);
        // if(auth()->user() != null){
        //     return redirect('/dashboard');
        // }

        // return redirect()->back()->with('msg', 'inavlid login details');

        $this->validate($request, [
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(!auth()->attempt($request->only('username', 'password'), $request->remember)){
            return back()->with('msg', 'Invalid login details');
        }

        return redirect()->intended('/dashboard');
    }
}
