<?php

namespace App\Http\Controllers;


use App\Models\Profiles;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employe');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('employe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profiles = $request->validate([
          
            'jobtitle' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'employenumber' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'personalemail' => 'required',
            'fathername' => 'required',
            'bloodgroup' => 'required',
            'maritalstatus' => 'required',
            
            'marriagedate' => 'required',
            'spousename' => 'required',
            'nationality' => 'required',
            'residentialstatus' => 'required',
            'placeofbirth' => 'required',
            'countryoforigin' => 'required',
            'religion' => 'required',
            'internationalemployee' => 'required',
            'physicallychallenged' => 'required',
            'joiningdate' => 'required',
            'confirmationdate' => 'required',
            
            'status' => 'required',
            'probationperiod' => 'required',
            'noticeperiod' => 'required',
            'currentcompanyexperience' => 'required',
            'previousexperience' => 'required',
            'totalexperience' => 'required',
            'location' => 'required',
            'grade' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'attendancescheme' => 'required',
            'reportingto' => 'required',
            'accountnumber' => 'required',
            'ifsccode' => 'required',
            'aadhaarnumber' => 'required',
            'pannumber' => 'required',
           
           
        ]);

        $profile = Profiles::create($profiles);
    
    return redirect('/');
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