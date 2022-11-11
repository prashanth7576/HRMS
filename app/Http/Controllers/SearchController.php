<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){

        
        $leave = User::where([
            ['firstname', '!=', Null],
            ['lastname', '!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('firstname',  'LIKE', '%' . $term . '%')->get();
                    $query->orWhere('lastname',  'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])

            ->orderBy("id", "desc")
            ->paginate(10);






        return view('review', compact('leave'));
    }
}
