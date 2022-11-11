<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onboard;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class OnboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('onboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('onboard.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $onboarding = $request->validate([
           
            // 'employeeid' => 'required',
            // 'name' => 'required',
            // 'dateofbirth' => 'required',
            // 'gender' => 'required',
            // 'reportingmanager' => 'required',
            // 'status' => 'required',
            // 'dateofjoining' => 'required',
            // 'probationperiod' => 'required',

            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'jobtitle' => 'required',
            // 'employenumber' => 'required',
            'employeeid' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'extension' => 'required',

            
            'dateofbirth' => 'required',
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

            // 'confirmationdate' => 'required',
            // 'title' => 'required',
            // // 'email' => 'required',
            // 'mobilenumber' => 'required',
            // 'emergencycontactnumber' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'officelocation' => 'required',
            'attendancescheme' => 'required',
            'costcenter' => 'required',
            'division' => 'required',
            'grade' => 'required',
            'reportingmanager' => 'required',
            'bankname' => 'required',
            'bankbranch' => 'required',
            'accounttype' => 'required',
            'paymenttype' => 'required',
            'ddpayableat' => 'required',
            'nameasperbankrecords' => 'required',
            'pannumber' => 'required',
            'uannumber' => 'required',
            'aadhaarnumber' => 'required',
            'bankaccountnumber' => 'required',
            'ifsccode' => 'required',
            'branchcode' => 'required',
            'accesscardnumber' => 'required',
            'accesscardvalidity' => 'required',
          
           
           
        ]);

        $onboard = Onboard::create($onboarding);

        return back()->with('success', 'Onboard Successfull');
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
