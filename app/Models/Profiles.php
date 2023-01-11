<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $table = "profiles";
    protected $fillable = ['jobtitle', 'name', 'employenumber', 'mobile','email', 'gender', 'dob', 'personalemail', 'fathername', 'bloodgroup', 'maritalstatus', 'marriagedate','spousename','nationality','residentialstatus','placeofbirth','countryoforigin','religion','internationalemployee','physicallychallenged','joiningdate','confirmationdate','status','probationperiod','noticeperiod','Currentcompanyexperience','previousexperience','totalexperience','location','grade','designation','department','attendancescheme','reportingto','accountnumber','ifsccode','aadhaarnumber','pannumber'];
}
