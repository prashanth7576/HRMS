<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'empexperience';

    protected $fillable = ['employeid', 'companyname', 'designation', 'fromdate', 'todate', 'companyaddress'];
}
