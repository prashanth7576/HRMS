<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $table='empqualification';

    protected $fillable = ['employeid', 'startdate', 'enddate', 'qualification', 'institution'];
}
