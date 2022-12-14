<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    
    protected $table = "Task";

    protected $fillable = ['taskname', 'assignee', 'duedate', 'priority', 'tags', 'description', 'addfile', 'Active'];
}
