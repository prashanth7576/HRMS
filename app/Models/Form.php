<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = "form";
    protected $fillable = ['ctc', 'employeeid', 'basicsalary', 'hra', 'conveyance','medicalallowance', 'special', 'epf','esi','total','totaldeductions'];
}
