<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form; 

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Form::all();
        return view('form.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $request->validate([
          
            'ctc' => 'required',
            'employeeid' => 'required',
            'basicsalary' => 'required',
            'hra' => 'required',
            'conveyance' => 'required',
            'medicalallowance' => 'required',
            'special' => 'required',
            'total' => 'required',
            'epf' => 'required',
            'esi' => 'required',
            'totaldeductions' => 'required',
            
           
            
           
        ]);

        $forms = Form::create($form);
    
    return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        return view('form.edit', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        return view('form.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        $request->validate([

            'employeeid' => 'required',
            'ctc' => 'required',
            'basicsalary' => 'required',
            'hra' => 'required',
            'conveyance' => 'required',
            'medicalallowance' => 'required',
            'special' => 'required',
            'epf' => 'required',
            'total' => 'required',
            'esi' => 'required',
            'totaldeductions' => 'required'
        ]);

        $form->update($request->all());

        return redirect()->route('payslip')
        ->withSuccessMessage(' Edited Successfully');
   
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