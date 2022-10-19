<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;






class RegisterController extends Controller
{
    public function index()
    {
       

       
         return view('auth.register');
    }

    public function store(Request $request)
    {


        $this->validate($request, [

        
           
            'email' => 'required|email|max:150',
            'password' => 'required|confirmed'
        ]);

        user::create([
        
        'email' => $request->email,
        'password'  => Hash::make($request->password),
       
        ] );
        
        
        

       

            auth()->attempt($request->only('email','password'));



        return redirect()->route('login')->withSuccessMessage('Registration Successfull');


    }
}