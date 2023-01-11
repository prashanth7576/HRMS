<?php

namespace App\Http\Controllers;

use App\Models\Attendanceinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AttendanceinfoController extends Controller
{
    public function index()
    {
        


    //     $startTime = DB::table('logins')->distinct('signin')->where('employeeid', auth()->user()->employeeid)->orderBy('date', 'ASC')->pluck('signin');
    //     // $startTime = '10:20:10';
    //     return $finishTime = DB::table('logins')->distinct('signout')->where('employeeid', auth()->user()->employeeid)->orderBy('date', 'ASC')->pluck('signout');

    //     $parsed = date_parse($startTime);
    //     $startTimeSeconds = $parsed['hour'] ;

    //     $parsed = date_parse($finishTime);
    //      $finishTimeSeconds = $parsed['hour'];


    //     $parsed = date_parse($startTime);
    //      $startTimeSecond = $parsed['minute'] ;

    //     $parsed = date_parse($finishTime);
    //     $finishTimeSecond = $parsed['minute'];

    //    return $hours =    $finishTimeSeconds - $startTimeSeconds;
    //     return $minutes =    $finishTimeSecond - $startTimeSecond;

    
    


//  return  $time = DB::select('select TIMEDIFF("10:00:00", signout) 
//  FROM `logins` where date= "01-12-22"   ');

//  $sample = DB::table('logins')->where('date','30-11-22')->pluck('employeeid')->all();
//  $users = DB::table('employes')->whereNotIn('employeeid', $sample)->orderBy('employeeid')->get('employeeid');



 $data = DB::table('leave')->where('fromdate', '2022-12-19')->get();


$sample = DB::table('employes')->where('employeeid' , auth()->user()->employeeid)->pluck('shifttype')->all();
  $users = DB::table('shifts')->where('Shift_type', $sample)->get();

        return view('attendanceinfo', compact('sample', 'users'));
    }
}
