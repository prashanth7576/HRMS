<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logins extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "logins";
    protected $fillable = ['employeeid', 'logindate','signin','signout','firstname','lastname','creadted_at','updated_at' ];

    
}
