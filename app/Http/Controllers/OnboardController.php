<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onboard;
<<<<<<< HEAD
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Shifts;
use Illuminate\Support\Facades\Hash;
use Illuminate\Console\View\Components\Alert;
=======
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f

class OnboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Onboard::all();
        return view('onboard.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('onboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

<<<<<<< HEAD
        $request->validate(['profilepicture' => 'required|mimes:png,jpg,|max:1024']);
       
         $Profileimage =  $request->employeeid. '-'  . 'Profile' . '.' . $request->profilepicture->extension();
        $request->profilepicture->move('public/profiles', $Profileimage);
=======
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'jobtitle' => 'required',
            // 'employenumber' => 'required',
            'employeeid' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'gender' => 'required',
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f

        $onboard = new Onboard();
        $onboard->firstname = $request->firstname;
        $onboard->lastname = $request->lastname;
        $onboard->jobtitle = $request->jobtitle;
        $onboard->employeeid = $request->employeeid;
        $onboard->mobile = $request->mobile;
        $onboard->email = $request->email;
        $onboard->gender = $request->gender;
        $onboard->address = $request->address;
        $onboard->dateofbirth = $request->dateofbirth;
        $onboard->joiningdate = $request->joiningdate;
        $onboard->confirmationdate = $request->confirmationdate;
        $onboard->probationperiod = $request->probationperiod;
        $onboard->noticeperiod = $request->noticeperiod;
        $onboard->designation = $request->designation;
        $onboard->department = $request->department;
        $onboard->officelocation = $request->officelocation;
        $onboard->shifttype = $request->shifttype;
        $onboard->reportingmanager = $request->reportingmanager;
        $onboard->profilepicture = $Profileimage;

        $onboard->save();

<<<<<<< HEAD
        // $onboarding = $request->validate([
        
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'jobtitle' => 'required',
        //     'employeeid' => 'required',
        //     'mobile' => 'required',
        //     'email' => 'required',
        //     'gender' => 'required',
        //     'location' => 'required',
        //     'dateofbirth' => 'required',
        //     'joiningdate' => 'required',
        //     'confirmationdate' => 'required',
        //     'probationperiod' => 'required',
        //     'noticeperiod' => 'required',
        //     'designation' => 'required',
        //     'department' => 'required',
        //     'officelocation' => 'required',
        //     'attendancescheme' => 'required',
        //     'reportingmanager' => 'required',
        //     'profilepicture' => 'required',
=======
            // 'confirmationdate' => 'required',
            // 'title' => 'required',
            // // 'email' => 'required',
            // 'mobilenumber' => 'required',
            // 'emergencycontactnumber' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'location' => 'required',
            'attendancescheme' => 'required',
            'grade' => 'required',
            'reportingmanager' => 'required',
            'pannumber' => 'required',
            'uannumber' => 'required',
            'aadhaarnumber' => 'required',
            'bankaccountnumber' => 'required',
            'ifsccode' => 'required',
            'branchcode' => 'required',
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
          
        // ]);

<<<<<<< HEAD
        // $onboard = Onboard::create($onboarding);
       
        return redirect()->route('onboard.index')->with('success', 'Employee Onboarded successfully!');
=======
        $onboard = Onboard::create($onboarding);
        return redirect('/');
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
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
    public function edit( Onboard $onboard)
    {
        return view('onboard.edit', compact('onboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Onboard $onboard)
    {
        $request->validate([

                'firstname' => 'required',
                'lastname' => 'required',
                'jobtitle' => 'required',
                'employeeid' => 'required',
                'mobile' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'address' => 'required',
                'dateofbirth' => 'required|date',
                'joiningdate' => 'required|date|after:confirmationdate',
                'confirmationdate' => 'required|date|before:joiningdate',
                'probationperiod' => 'required',
                'noticeperiod' => 'required',
                'designation' => 'required',
                'department' => 'required',
                'officelocation' => 'required',
                'shifttype' => 'required',
                'reportingmanager' => 'required',
                'profilepicture' => 'required',

        ]);

        $onboard->update($request->all());
        return redirect()->route('onboard.index')()->with('success', 'Details Submitted successfully!');


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
<<<<<<< HEAD

    public function display($id){
        $employe = Onboard::find($id);
        return view('shiftedit', compact('employe'));
    }

    public function change(Request $request, $id){
$employe = Onboard::find($id);
$employe->shifttype = $request->shifttype;
$employe->update();

return redirect('employeshifts')->with('success', 'shift updated successfully');
    }

}
=======
}
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
