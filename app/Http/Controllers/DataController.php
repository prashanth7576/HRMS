<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use DB;
use File;

class DataController extends Controller
{
    public function index(){
        $data = DB::table('employes')->where('employeeid', auth()->user()->employeeid)->get();
        // $data = File::allFiles(public_path('public/profiles'));
        return view('layouts.app', compact('data'));
    }
}
