<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PayslipController extends Controller
{
    public function index()
    {
    $user = Auth::user();
    $data = DB::table('form')->where('employeeid', $user->employeeid)->get();
    $form = DB::table('Onboard')->where('employeeid', $user->employeeid)->get();

    return view('payslip', compact('user', 'data', 'form'));
    }
}
