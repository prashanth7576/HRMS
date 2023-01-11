<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Helpdesk;

class HelpdeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('helpdesk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('helpdesk.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(['addfile' => 'required|mimes:png,jpg,pdf,txt,xls,docx,ppt|max:1024']);
       
        $Addfile = auth()->user()->employeeid . '-'  . 'Help' . '.' . $request->addfile->extension();
       $request->addfile->move('public/helpdesk', $Addfile);


       $helpdesk = new Helpdesk();
       $helpdesk->category = $request->category;
       $helpdesk->subjectline = $request->subjectline;
       $helpdesk->description = $request->description;
       $helpdesk->priority = $request->priority;
       $helpdesk->addfile = $Addfile;
       $helpdesk->save();


        // $helpdesk = $request->validate([
           
        //     'category' => 'required',
        //     'subjectline' => 'required',
        //     'description' => 'required',
        //     'priority' => 'required',
        //     'addfile' => 'required'
           
           
        // ]);

        // $helpdesks = Helpdesk::create($helpdesk);
        return back()->with('success', 'Data Submitted successfully!');
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
