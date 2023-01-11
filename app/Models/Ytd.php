<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ytd extends Model
{
    use HasFactory;
    protected $table = "ytd_reports";
    protected $fillable = ['date', 'employeeid', 'basicsalary', 'hra', 'conveyance','medicalallowance', 'special', 'epf','esi','total','totaldeductions','workingdays','daysinmonth','netpay','year'];
}
