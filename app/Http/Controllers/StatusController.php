<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logins;
use Carbon;
use DB;

class StatusController extends Controller
{
    public function index()
    {
    

        $sample = DB::table('logins')->whereDate('created_at',Carbon::today())->pluck('employeeid')->all();
        $users = DB::table('employes')->whereNotIn('employeeid', $sample)->orderBy('employeeid')->get();
        

        $leave = DB::table('leave')->whereDate('created_at', Carbon::today())->get();
        
\DB::statement("SET SQL_MODE=''");
     $loginDetils = Logins::select('employeeid','firstname','logindate','signin',\DB::raw("round(TIME_TO_SEC(TIMEDIFF('10:00:00',signin))/60,2) as time_difference"))->where('logins.logindate',date_format(now(), 'd-m-y'))->groupBy('logins.employeeid')->orderBy('signin', 'ASC')->get();
 
     $Details = Logins::select('employeeid','firstname','logindate','signin',\DB::raw("round(TIME_TO_SEC(TIMEDIFF(signin,'10:00:00'))/60,2) as time_difference"))->where('logins.logindate',date_format(now(), 'd-m-y'))->groupBy('logins.employeeid')->orderBy('signin', 'ASC')->get();
 
 
        return view('status',compact('leave','sample','users','loginDetils','Details'));

    }

    public function search(Request $request){

        $date = $request->input('date');
       
        $query = DB::table('logins')->select()
        ->whereDate('created_at', "=", $date)
        ->get();
        
        $sample = DB::table('logins')->whereDate('created_at', "=", $date)->pluck('employeeid')->all();
        $users = DB::table('employes')->whereNotIn('employeeid', $sample)->orderBy('employeeid')->get('employeeid');
        \DB::statement("SET SQL_MODE=''");
        $loginDetils = Logins::select('employeeid','firstname','logindate','signin',\DB::raw("round(TIME_TO_SEC(TIMEDIFF('10:00:00',signin))/60,2) as time_difference"))->where('logins.logindate',date_format(now(), 'd-m-y'))->groupBy('logins.employeeid')->orderBy('signin', 'ASC')->get();
    
        $Details = Logins::select('employeeid','firstname','logindate','signin',\DB::raw("round(TIME_TO_SEC(TIMEDIFF(signin,'10:00:00'))/60,2) as time_difference"))->where('logins.logindate',date_format(now(), 'd-m-y'))->groupBy('logins.employeeid')->orderBy('signin', 'ASC')->get();
    
        $leave = DB::table('leave')->whereDate('created_at', "=", $date)->get();

        return view('status',compact('query','time','sample','users','leave','loginDetils','Details'));
    }
}
