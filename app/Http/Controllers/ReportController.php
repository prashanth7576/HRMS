<?php

namespace App\Http\Controllers;

use App\Models\Ytd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Input;


class ReportController extends Controller
{
    public function index()
    {
    $user = Auth::user();
    $form = DB::table('ytd_reports')->where('employeeid', $user->employeeid)->get();
    $form = Ytd::where('year',Input::get('years'))->get();
    
    
    return view('report', compact('user', 'form'));
    
    }
}
