<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onboard extends Model
{
    protected $table = "Onboard";

    protected $fillable = ['firstname', 'middlename', 'lastname', 'jobtitle', 'employeeid', 'mobile', 'email', 'gender', 'dateofbirth', 'personalemail', 'fathername', 'bloodgroup', 'maritalstatus', 'marriagedate', 'spousename', 'nationality', 'residentialstatus', 'placeofbirth', 'countryoforigin', 'religion', 'internationalemployee', 'physicallychallenged','joiningdate', 'confirmationdate', 'status', 'probationperiod', 'noticeperiod', 'currentcompanyexperience', 'previousexperience', 'totalexperience', 'designation', 'department', 'location', 'attendancescheme', 'grade', 'reportingmanager', 'pannumber', 'uannumber', 'aadhaarnumber', 'bankaccountnumber', 'ifsccode', 'branchcode'];
}
