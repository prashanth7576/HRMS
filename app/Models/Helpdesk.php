<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helpdesk extends Model
{
    use HasFactory;

    protected $table = "Helpdesk";

    protected $fillable = ['category', 'subjectline', 'description', 'priority'];
}
