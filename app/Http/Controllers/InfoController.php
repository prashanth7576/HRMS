<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index()
    {
    $user = Auth::user();
    $data = DB::table('Onboard')->where('employeeid', $user->employeeid)->get();

    return view('info', compact('user', 'data'));
    }
}
