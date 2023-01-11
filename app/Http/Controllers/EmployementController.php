<?php

namespace App\Http\Controllers;

use App\Models\Employement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employement.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employement.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $request->validate(['permanentaddress' => 'required|mimes:png,pdf,jpg,|max:1024']);
        // $extension = $file->getClientOriginalExtension();
        // $filname = time() . '.' . $extension;
        $PermanentAddress =  auth()->user()->employeeid . '-'  . 'PermanentAddress' . '.' . $request->permanentaddress->extension();
        $request->permanentaddress->move('public/folders', $PermanentAddress);

        $request->validate(['presentaddress' => 'required|mimes:png,pdf,jpg,|max:1024']);
        // $extension = $file->getClientOriginalExtension();
        // $filname = time() . '.' . $extension;
        $PresentAddress =  auth()->user()->employeeid . '-'  . 'PresentAddress' . '.' . $request->presentaddress->extension();
        $request->presentaddress->move('public/folders', $PresentAddress);


        $request->validate(['qualificationdetails' => 'required|mimes:png,pdf,jpg,|max:1024']);
        $Qualification =  auth()->user()->employeeid . '-'  . 'Qualification' . '.' . $request->qualificationdetails->extension();
        $request->qualificationdetails->move('public/folders', $Qualification);



        $request->validate(['previousemployement' => 'required|mimes:png,pdf,jpg,|max:1024']);
        $Experience =  auth()->user()->employeeid . '-'  . 'Experience' . '.' . $request->previousemployement->extension();
        $request->previousemployement->move('public/folders', $Experience);


        $request->validate(['bankaccount' => 'required|mimes:png,pdf,jpg,|max:1024']);
        $Bankdetails =  auth()->user()->employeeid . '-'  . 'Bank Details' . '.' . $request->bankaccount->extension();
        $request->bankaccount->move('public/folders', $Bankdetails);

        // $request->validate(['pancardnum' => 'required|mimes:png,docx,pdf,txt,jpg,|max:1024']);
        //  $Pannumber =  auth()->user()->employeeid . '-'  . 'PAN' . '.' . $request->pancardnum->extension();
        // $request->pancardnum->move('public/folders', $Pannumber);


        $request->validate(['aadhaar' => 'required|mimes:png,pdf,jpg,|max:1024']);
        // $extension = $file->getClientOriginalExtension();
        // $filname = time() . '.' . $extension;
        $Aadhaar =  auth()->user()->employeeid . '-'  . 'Aadhaar' . '.' . $request->aadhaar->extension();
        $request->aadhaar->move('public/folders', $Aadhaar);

        $request->validate(['passport' => 'required|mimes:png,pdf,jpg,|max:1024']);
        // $extension = $file->getClientOriginalExtension();
        // $filname = time() . '.' . $extension;
        $Passport =  auth()->user()->employeeid . '-'  . 'Passport' . '.' . $request->passport->extension();
        $request->passport->move('public/folders', $Passport);



        $employement = new Employement();
        $employement->employeid = $request->employeid;
        $employement->dateofbirth = $request->dateofbirth;
        $employement->personalemail = $request->personalemail;
        $employement->fathername = $request->fathername;
        $employement->bloodgroup = $request->bloodgroup;
        $employement->maritalstatus = $request->maritalstatus;
        $employement->marriagedate = $request->marriagedate;
        $employement->spousename = $request->spousename;
        $employement->nationality = $request->nationality;
        $employement->residentialstatus = $request->residentialstatus;
        $employement->placeofbirth = $request->placeofbirth;
        $employement->countryoforigin = $request->countryoforigin;
        $employement->religion = $request->religion;
        $employement->internationalemployee = $request->internationalemployee;
        $employement->physicallychallenged = $request->physicallychallenged;
        $employement->housenumber = $request->housenumber;
        $employement->street = $request->street;
        $employement->locality = $request->locality;
        $employement->district = $request->district;
        $employement->state = $request->state;
        $employement->pincode = $request->pincode;

        

        $employeid = $request->employeid;
        $startdate = $request->startdate;
        $enddate = $request->enddate;
        $qualification = $request->qualification;
        $institution = $request->institution;
       

        for ($i=0; $i < count($startdate); $i++){
            $datasave = [
                'employeid' => $employeid,
                'startdate'  => $startdate[$i],
                'enddate'  => $enddate[$i],
                'qualification'  => $qualification[$i],
                'institution'  => $institution[$i],
               
            ];
            DB::table('empqualification')->insert($datasave);
        }


        $employeid = $request->employeid;
        $companyname = $request->companyname;
        $designation = $request->designation;
        $fromdate = $request->fromdate;
        $todate = $request->todate;
        $companyaddress = $request->companyaddress;
       

        for ($i=0; $i < count($companyname); $i++){
            $data = [
                'employeid' => $employeid,
                'companyname'  => $companyname[$i],
                'designation'  => $designation[$i],
                'fromdate'  => $fromdate[$i],
                'todate'  => $todate[$i],
                'companyaddress' => $companyaddress[$i],
               
            ];
            DB::table('empexperience')->insert($data);
        }
       
        $employement->accountnumber = $request->accountnumber;
        $employement->confirmbankaccountnumber = $request->confirmbankaccountnumber;
        $employement->country = $request->country;
        $employement->branchcode = $request->branchcode;
        $employement->accountholdername = $request->accountholdername;
        $employement->accounttype = $request->accounttype;
        $employement->pfnumber = $request->pfnumber;
        $employement->uan = $request->uan;
        $employement->pannumber = $request->pannumber;
        $employement->nameonpan = $request->nameonpan;
        $employement->aadhaarnumber = $request->aadhaarnumber;
        $employement->nameonaadhaar = $request->nameonaadhaar;
        $employement->name = $request->name;
        $employement->relationship = $request->relationship;
        $employement->dob = $request->dob;
        $employement->gender = $request->gender;
        $employement->blood = $request->blood;
        $employement->Nation = $request->Nation;
        $employement->epfnomineename = $request->epfnomineename;
        $employement->nomination = $request->nomination;
        $employement->epsnomineename = $request->epsnomineename;
        $employement->esinomineename = $request->esinomineename;

        $employement->permanentaddress = $PermanentAddress;
        $employement->presentaddress = $PresentAddress;
        $employement->qualificationdetails = $Qualification;
        $employement->previousemployement = $Experience;
        $employement->bankaccount = $Bankdetails;
        // $employement->pancardnum = $Pannumber;
        $employement->aadhaar = $Aadhaar;
        $employement->passport = $Passport;

        $employement->save();


        return back()->with('success', 'Details Submitted successfully!');
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

    public function permanentaddress(Request $request, $permanentaddress)
    {
        return response()->download(public_path('public/folders/' . $permanentaddress));
        // return response()->download(public_path('public/folders/' .$aadhaar));
    }

    public function presentaddress(Request $request,  $presentaddress)
    {
        return response()->download(public_path('public/folders/' . $presentaddress));
        // return response()->download(public_path('public/folders/' .$aadhaar));
    }

    public function qualification(Request $request, $qualification)
    {
        return response()->download(public_path('public/folders/' . $qualification));
        // return response()->download(public_path('public/folders/' .$aadhaar));
    }

    public function previousemployement(Request $request,  $previousemployement)
    {
        return response()->download(public_path('public/folders/' . $previousemployement));
        // return response()->download(public_path('public/folders/' .$aadhaar));
    }


    public function bankaccountdetails(Request $request, $bankaccountdetails)
    {
        return response()->download(public_path('public/folders/' . $bankaccountdetails));
        // return response()->download(public_path('public/folders/' .$aadhaar));
    }

    public function permanentaccountnumber(Request $request,  $permanentaccountnumber)
    {
        return response()->download(public_path('public/folders/' . $permanentaccountnumber));
        // return response()->download(public_path('public/folders/' .$aadhaar));
    }


    public function aadhaar(Request $request, $aadhaar)
    {
        return response()->download(public_path('public/folders/' . $aadhaar));
        // return response()->download(public_path('public/folders/' .$aadhaar));
    }

    public function passport(Request $request,  $passport)
    {
        return response()->download(public_path('public/folders/' . $passport));
        // return response()->download(public_path('public/folders/' .$aadhaar));
    }
}
