<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employement extends Model
{
    use HasFactory;

    protected $table = "employement";

    protected $fillable = ['employeid', 'dateofbirth', 'personalemail', 'fathername', 'bloodgroup', 'maritalstatus', 'marriagedate', 'spousename', 'nationality', 'residentialstatus', 'placeofbirth', 'countryoforigin', 'religion', 'internationalemployee', 'physicallychallenged', 'housenumber', 'street', 'locality', 'district', 'state', 'pincode', 'startdate', 'enddate', 'institution', 'qualification', 'companyname', 'designation', 'fromdate', 'todate', 'companyaddress', 'accountnumber', 'confirmbankaccountnumber', 'country', 'branchcode', 'accountholdername', 'accounttype', 'pfnumber', 'uan', 'pannumber', 'nameonpan', 'aadhaarnumber', 'nameonaadhaar', 'name', 'relationship', 'dob', 'gender', 'blood','Nation', 'epfnomineename', 'nomination', 'epsnomineename', 'esinomineename', 'permanentaddress', 'presentaddress', 'qualificationdetails', 'previousemployement', 'bankaccount', 'aadhaar', 'passport'];
}
