<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onboard extends Model
{
<<<<<<< HEAD
    use HasFactory;

    protected $table = "employes";

    protected $fillable = ['firstname',  'lastname', 'jobtitle', 'employeeid', 'mobile', 'email', 'gender', 'address', 'dateofbirth', 'joiningdate', 'confirmationdate', 'probationperiod', 'noticeperiod', 'designation', 'department', 'officelocation','shifttype',  'reportingmanager', 'profilepicture'];
=======
    protected $table = "Onboard";

    protected $fillable = ['firstname', 'middlename', 'lastname', 'jobtitle', 'employeeid', 'mobile', 'email', 'gender', 'dateofbirth', 'personalemail', 'fathername', 'bloodgroup', 'maritalstatus', 'marriagedate', 'spousename', 'nationality', 'residentialstatus', 'placeofbirth', 'countryoforigin', 'religion', 'internationalemployee', 'physicallychallenged','joiningdate', 'confirmationdate', 'status', 'probationperiod', 'noticeperiod', 'currentcompanyexperience', 'previousexperience', 'totalexperience', 'designation', 'department', 'location', 'attendancescheme', 'grade', 'reportingmanager', 'pannumber', 'uannumber', 'aadhaarnumber', 'bankaccountnumber', 'ifsccode', 'branchcode'];
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
}
