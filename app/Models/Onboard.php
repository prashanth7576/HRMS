<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onboard extends Model
{
    use HasFactory;

    protected $table = "employes";

    protected $fillable = ['firstname',  'lastname', 'jobtitle', 'employeeid', 'mobile', 'email', 'gender', 'address', 'dateofbirth', 'joiningdate', 'confirmationdate', 'probationperiod', 'noticeperiod', 'designation', 'department', 'officelocation','shifttype',  'reportingmanager', 'profilepicture'];
}
