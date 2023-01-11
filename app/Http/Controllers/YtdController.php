<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Ytd; 

class YtdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
    $data = DB::table('form')->where('employeeid', $user->employeeid)->get();
    

    return view('ytd.create', compact('user', 'data',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ytd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ytd = $request->validate([
          
            'date' => 'required',
            'year' => 'required',
            'employeeid' => 'required',
            'basicsalary' => 'required',
            'hra' => 'required',
            'conveyance' => 'required',
            'medicalallowance' => 'required',
            'special' => 'required',
            'total' => 'required',
            'epf' => 'required',
            'esi' => 'required',
            'workingdays' => 'required',
            'daysinmonth' => 'required',
            'totaldeductions' => 'required',
            'netpay' => 'required',
            
           
            
           
        ]);

        $ytds = Ytd::create($ytd);
    
    return redirect('/report');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
