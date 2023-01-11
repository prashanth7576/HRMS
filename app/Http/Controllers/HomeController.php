<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Logins;
use Session;
use Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $latest = DB::table('ytd_reports')->latest('id')->where('employeeid', $user->employeeid)->first();
        $data = DB::table('logins')->latest('id')->where('employeeid', auth()->user()->employeeid)->first();
        //$emp = DB::table('employes')->select('shifttype')->where('employeeid', auth()->user()->employeeid) ->get();

        $sample = DB::table('employes')->where('employeeid' , auth()->user()->employeeid)->pluck('shifttype')->all();
          $users = DB::table('shifts')->where('Shift_type','=', $sample)->get();
        
          $hello = DB::table('logins')->whereDate('created_at',Carbon::today())->pluck('employeeid')->all();
        $test = DB::table('employes')->whereNotIn('employeeid', $hello)->orderBy('employeeid')->take(5)->get();
        
        $dot = DB::table('logins')->whereDate('created_at',Carbon::today())->pluck('employeeid')->all();
        $dots = DB::table('employes')->whereNotIn('employeeid', $dot)->orderBy('employeeid')->count();
        \DB::statement("SET SQL_MODE=''");
        $loginDetils = Logins::select('employeeid','firstname','lastname','logindate','signin',\DB::raw("round(TIME_TO_SEC(TIMEDIFF('10:00:00',signin))/60,2) as time_difference"))->where('logins.logindate',date_format(now(), 'd-m-y'))->groupBy('logins.employeeid')->orderBy('signin', 'ASC')->take(6)->get();
    
        $Details = Logins::select('employeeid','firstname','lastname','logindate','signin',\DB::raw("round(TIME_TO_SEC(TIMEDIFF(signin,'10:00:00'))/60,2) as time_difference"))->where('logins.logindate',date_format(now(), 'd-m-y'))->groupBy('logins.employeeid')->orderBy('signin', 'ASC')->take(6)->get();
        $login = Logins::select('employeeid','firstname','logindate','signin',\DB::raw("round(TIME_TO_SEC(TIMEDIFF('10:00:00',signin))/60,2) as time_difference"))->where('logins.logindate',date_format(now(), 'd-m-y'))->groupBy('logins.employeeid')->orderBy('signin', 'ASC')->count();
    
        $Detail = Logins::select('employeeid','firstname','logindate','signin',\DB::raw("round(TIME_TO_SEC(TIMEDIFF(signin,'10:00:00'))/60,2) as time_difference"))->where('logins.logindate',date_format(now(), 'd-m-y'))->groupBy('logins.employeeid')->orderBy('signin', 'ASC')->count();
    
      
    
        return view('/home',compact('user', 'latest','data','users','sample','hello','test','dots','loginDetils','login','Details','Detail'));

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
        $firstname = $user->firstname;
        $lastname = $user->lastname;

        $in = [
          
            'employeeid' => $employeeid,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'logindate'=> $date,
            'signin'=>$time,
            'status'=>'Signedin',
            'created_at' => $dt,
                 
        ];

        DB::table('logins')->insert($in);
    
    return redirect('/home');
    }


    public function out(Request $request)
    {
        $dt = Carbon::now();
        $time = $dt->toTimestring();
        $date = $dt->format("d-m-y");

        DB::table('logins')
        ->where('logindate', '=', $dt->format("d-m-y"))
        ->whereNull('signout')
        ->update([
            'signout' => $time,
            'status'=>'Signedout',
            
        ]);
    
    return redirect('/home');
    }



}
