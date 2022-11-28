<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;
use Carbon;


class SigninController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $latest = DB::table('ytd_reports')->latest('id')->where('employeeid', $user->employeeid)->first();
        
        return view('admin.create',compact('user', 'latest',));

    }


    public function in(Request $request)
    {
        $user = Auth::User();
        session::put('user',$user);
        $user=Session::get('user');
        $dt = Carbon::now();
        $time = $dt->toTimestring();
        $date = $dt->format("d-m-y");

        $employeeid = $user->employeeid;

        $in = [
          
            'employeeid' => $employeeid,
            'date'=> $date,
            'signin'=>$time,
            'status'=>'Signedin',
                 
        ];

        DB::table('logins')->insert($in);
    
    return redirect('/admin.create');
    }


    public function out(Request $request)
    {
        $user = Auth::User();
        session::put('user',$user);
        $user=Session::get('user');
        $dt = Carbon::now();
        $time = $dt->toTimestring();
        $date = $dt->format("d-m-y");

        $employeeid = $user->employeeid;

        $out = [
          
            'employeeid' => $employeeid,
            'date'=> $date,
            'signout'=>$time,
            'status'=>'Signedout',
                 
        ];

        DB::table('logins')->insert($out);
    
    return redirect('/admin.create');
    }


    
}
