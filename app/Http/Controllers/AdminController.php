<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    function index(Request $request)
    {

        //  $data = DB::table('leave')->where('fromdate', '2022-12-19')->get();

          $sample = DB::table('leave')->where('fromdate' , Carbon::today())->pluck('employeid')->all();
  $users = DB::table('employes')->whereIn('employeeid', $sample)->orderBy('employeeid', 'ASC')->get();
  $user = DB::table('employes')->whereIn('employeeid', $sample)->count();

  
   $info = DB::table('leave')->whereMonth('fromdate' , Carbon::now()->month)->pluck('employeid')->all();

     $emp = DB::table('employes')->whereIn('employeeid', $info)->orderBy('employeeid', 'ASC')->get();

    $emps = DB::table('employes')->whereIn('employeeid', $info)->count();

    // $infos = DB::table('leave')->whereMonth('fromdate' , Carbon::now()->month)->get();
        return view('admin.index', compact('sample', 'users', 'user', 'info', 'emp', 'emps'));


    }


 
    }


   

