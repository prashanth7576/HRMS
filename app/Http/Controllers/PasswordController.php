<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
Use Auth;
<<<<<<< HEAD
use RealRashid\SweetAlert\Facades\Alert;
=======

>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f

class PasswordController extends Controller
{

    public function index()
    {
<<<<<<< HEAD
      
=======
        
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
         return view('change-password');
    }

    public function changepassword(){
        return view('change-password');
    }

    public function updatepassword(Request $request){

        

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
  
        if(!Hash::check($request->old_password,auth()->user()->password)){
            return back()->witherrorMessage('Old Password Doesnot Matched');
        }
        
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
<<<<<<< HEAD
        return redirect('/')->withSuccessMessage('Password Changed Successfully');
=======
        return redirect()->route('login');
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
    }
    
}
