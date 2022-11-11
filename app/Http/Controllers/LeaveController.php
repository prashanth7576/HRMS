<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = DB::table('leave')->where('employeid', $user->employeeid)->get();

        
        return view('leave', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leave');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $leave = new Leave();
        $leave->employeid = $request->employeid;
        $leave->leavetype = $request->leavetype;
        $leave->fromdate = $request->fromdate;
        $leave->fromdatesession = $request->fromdatesession;
        $leave->todate = $request->todate;
        $leave->todatesession = $request->todatesession;
        $leave->days = $request->days;
        $leave->reason = $request->reason;

        $leave->save();

        return redirect('feeds');

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

    public function display(){
        $leave = Leave::all();
        return view('review', compact('leave'));
    }

    public function leavehistory(){
        $leave = Leave::all();
        return view('leavehistory', compact('leave'));
    }



    public function pending($id){
        $pending = Leave::find($id);
        return view('pending', compact('pending', 'id'));
    }

    public function approved($id){
        $leave = Leave::find($id);
        $leave->status = 'approved';
        $leave->save();
        return redirect()->back();

    }

    public function canceled($id){
        $leave = Leave::find($id);
        $leave->status = 'canceled';
        $leave->save();
        return redirect()->back();

    }

   
}
