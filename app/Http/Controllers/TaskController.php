<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $task = DB::table('Task')->where('assignee', auth()->user()->firstname )->get();

        return view('task.index', compact('user', 'task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('task.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(['addfile' => 'required|mimes:png,jpg,pdf,xls,ppt,txt,docx|max:1024']);
       
        $Addfile = auth()->user()->employeeid . '-'  . 'Task' . '.' . $request->addfile->extension();
       $request->addfile->move('public/task', $Addfile);


       $task = new Task();
       $task->taskname = $request->taskname;
       $task->assignee = $request->assignee;    
       $task->duedate = $request->duedate;
       $task->priority = $request->priority;
       $task->tags = $request->tags;
       $task->description = $request->description;
       $task->addfile = $Addfile;
       $task->Active = $request->Active;
       $task->save();

        // $tasks = $request->validate([
           
        //     'taskname' => 'required',
        //     'assignee' => 'required',
          
        //     'duedate' => 'required',
        //     'priority' => 'required',
        //     'tags' => 'required',
        //     'description' => 'required',
        //     'addfile' => 'required',
        //     'status' => 'required',

           
        //  ]);

        //  $Task = Task::create($tasks);
        return back()->with('success', 'Task added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function task(){
    //     $user = User::all();
    //     $task = DB::table('Task')->where('assignee', auth()->user()->firstname )->get();

    //     return view('task.index', compact('user', 'task'));

    // }

    public function updateActive(Request $request)
    {
        
       
        
        $jobs = Task::find($request->job_id); 
        $jobs->Active = $request->Active;
        $jobs->save();
        return  back()->with('success', 'Status Changed successfully!');
    }
}
