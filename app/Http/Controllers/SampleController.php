<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;

class SampleController extends Controller
{
    public function index(){

        $user = Sample::all();
        return view('sample', compact('user'));
    }

    public function upload(Request $request){

        
        
            // $file = $request->file('file');
         $request->validate(['file' => 'required|mimes:png,docx,pdf,txt,jpg,|max:2048']);
            // $extension = $file->getClientOriginalExtension();
            // $filname = time() . '.' . $extension;
            $filname =  auth()->user()->employeeid. '-'  . 'aadhaar' . '.' . $request->file->extension();
            $request->file->move('public/folders', $filname);

            $request->validate(['aadhaar' => 'required|mimes:png,docx,pdf,txt,jpg,|max:2048']);
            // $extension = $file->getClientOriginalExtension();
            // $filname = time() . '.' . $extension;
            $filename =  auth()->user()->employeeid. '-'  . 'payslip' . '.' . $request->aadhaar->extension();
            $request->aadhaar->move('public/folders', $filename);

                $sample = new Sample();
                $sample->file = $filname;
                $sample->aadhaar = $filename;
                $sample->name = $request->name;
                $sample->save();
            
        
        return back();

    }

    public function download(Request $request, $file){
return response()->download(public_path('public/folders/' .$file ));
// return response()->download(public_path('public/folders/' .$aadhaar));
    }

    public function downloads(Request $request,  $aadhaar){
        return response()->download(public_path('public/folders/' .$aadhaar));
        // return response()->download(public_path('public/folders/' .$aadhaar));
            }


    public function view($id){
$sample = Sample::find($id);
return view('demo', compact('sample'));
    }
}
