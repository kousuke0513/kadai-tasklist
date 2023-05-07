<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tasks;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks= Tasks::all();
        return view('tasks.index',['tasks'=>$tasks,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $task=new Tasks;
      return view('tasks.create',['task'=>$task,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate(['content'=>'required',]);
        $request->validate(['status'=>'required|max:10',]);
        
        $task = new Tasks;
        $task->status=$request->status;
        $task->content=$request->content;
        $task->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task=Tasks::findOrFail($id);
        return view('tasks.show',['task'=>$task],);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task=Tasks::findOrFail($id);
        return view('tasks.edit',['task'=>$task]);
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
          $request->validate(['content'=>'required',]);
        $request->validate(['status'=>'required|max:10',]);
        
        
        $task= Tasks::findOrFail($id);
        $task->status=$request->status;
        $task->content=$request->content;
        $task->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task=Tasks::findOrFail($id);
        $task->delete();
        return redirect('/');
    }
}
