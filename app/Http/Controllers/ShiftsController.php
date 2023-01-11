<?php

namespace App\Http\Controllers;

use App\Models\Onboard;
use App\Models\Shifts;
use Illuminate\Http\Request;
use DB;

class ShiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Shifts::all();
        return view('shifts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shifts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shift = new Shifts();
        $shift->Shift_type = $request->Shift_type;
        $shift->from_time = $request->from_time;
        $shift->end_time = $request->end_time;
        $shift->remarks = $request->remarks;
        $shift->save();

        return redirect()->route('shifts.index')->with('success', 'Shift added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

     
    //     $data = Onboard::all();
    //    return view('employeshifts', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Shifts $shifts)
    {
        return view('shifts.edit', compact('shifts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Shifts $shifts)
    {
         $request->validate([

                'Shift_type' => 'required',
                'from_time' => 'required',
                'end_time' => 'required',
                'remarks' => 'required',
               

        ]);

        $shifts->update($request->all());
        return redirect()->route('shifts.show')()->with('success', ' Shift Changed successfully!');


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
