<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Carbon;
use App\Models\Logins;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $latest = DB::table('ytd_reports')->latest('id')->where('employeeid', $user->employeeid)->first();
       
        $data = Logins::all();
        $currentUser= Auth::user()->id;
        return view('admin.create',compact('user', 'latest','data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::User();
        session::put('user',$user);
        $user=Session::get('user');
        $dt = Carbon::now();
        $time = $dt->toTimestring();
        $date = $dt->format("d-m-y");
        $employeeid = $user->employeeid;

        $logins = new Logins;
        
        $logins->employeeid = $employeeid;
        $logins->date = $date;
        $logins->signin = $time;
        $logins->save();
       


        return redirect('/admin');
    }
        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Logins $logins)
    {
        return view('admin.edit', compact('logins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logins $logins)
    {
        $dt = Carbon::now();
        $time = $dt->toTimestring();
        $date = $dt->format("d-m-y");

<<<<<<< HEAD
        //  $data = DB::table('leave')->where('fromdate', '2022-12-19')->get();

          $sample = DB::table('leave')->where('fromdate' , Carbon::today())->pluck('employeid')->all();
  $users = DB::table('employes')->whereIn('employeeid', $sample)->orderBy('employeeid', 'ASC')->get();
  $user = DB::table('employes')->whereIn('employeeid', $sample)->count();

  
   $info = DB::table('leave')->whereMonth('fromdate' , Carbon::now()->month)->pluck('employeid')->all();

     $emp = DB::table('employes')->whereIn('employeeid', $info)->orderBy('employeeid', 'ASC')->get();

    $emps = DB::table('employes')->whereIn('employeeid', $info)->count();

    // $infos = DB::table('leave')->whereMonth('fromdate' , Carbon::now()->month)->get();
        return view('admin.index', compact('sample', 'users', 'user', 'info', 'emp', 'emps'));
=======
        
        $logins = Logins::where('date')->find($id);
           $logins->signout = $time;
           $logins->save();
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f


           $dt = Carbon::now();
        $time = $dt->toTimestring();
        $date = $dt->format("d-m-y");

        DB::table('logins')
        ->where('date', '=', $dt->format("d-m-y"))
        ->update([
            'signout' => $time
        ]);

       
       
  
    }

<<<<<<< HEAD

 
=======
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
    }
}
