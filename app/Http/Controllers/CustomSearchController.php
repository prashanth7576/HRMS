<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customer;

class CustomSearchController extends Controller
{
    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->filter_gender))
      {
       $data = DB::table('customers')
         ->select('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country')
         ->where('Gender', $request->filter_gender)
         ->where('Country', $request->filter_country)
         ->get();
      }
      else
      {
       $data = DB::table('customers')
         ->select('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
     $country_name = DB::table('customers')
          ->select('Country')
          ->groupBy('Country')
          ->orderBy('Country', 'ASC')
          ->get();
     return view('custom_search', compact('country_name'));
    }
}

?>
