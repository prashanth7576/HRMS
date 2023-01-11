<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = DB::table('leave')->where('employeid', $user->employeeid)->get();

        $balance = DB::table('leave')->where('employeid', auth()->user()->employeeid)->where('status', 'approved')->where('leavetype', 'Casual Leave')->sum(DB::raw('leave.days'));
        $pending = DB::table('companyleavemaster')->where('id', 1)->first([ 'casualleave'])->casualleave;
        
        return view('leave', compact('user', 'data', 'balance', 'pending'));
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
        // $balance = DB::table('leave')->pluck('balance');
        // $leave = DB::table('leave')->where('days' <= $balance);

       
        $leave->save();

        return back()->with('success', 'Leave applicarion Submitted successfully!');

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
        $data = Leave::all();
        return view('review', compact('data'));
    }

    public function leavehistory(){
        $leave = Leave::all();
        return view('leavehistory', compact('leave'));
    }



    public function pending($id){
        $balance = DB::table('leave')->where('employeid', auth()->user()->employeeid)->where('status', 'approved')->where('leavetype', 'Casual Leave')->sum(DB::raw('leave.days'));
        $taken = DB::table('companyleavemaster')->where('id', 1)->first([ 'casualleave'])->casualleave;
        
        $pending = Leave::find($id);
        return view('pending', compact('pending', 'id', 'balance', 'taken'));
    }

    public function approved($id){
        $leave = Leave::find($id);
        $leave->status = '1';
        $leave->save();
        return redirect()->back();

    }

    public function canceled($id){
        $leave = Leave::find($id);
        $leave->status = '0';
        $leave->save();
        return redirect()->back();

    }



   
=======
    public function index(){
        return view('/leave');
    }
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
}
