<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $task = Task::all();
        return view('list', compact('task'));
    }

    public function create(){
        return view('insert');
    }

    public function edit(Request $request){
        $task = new Task();
        $task->name = $request->input('name');
        $task->email = $request->input('email');
        $task->phone = $request->input('phone');
        $task->save();
        return redirect()->route('list');
    }

    public function store($id){
        $task = Task::find($id);
        return view('update', compact('task', 'id'));
    }

    public function update(Request $request, $id){
        $task = Task::find($id);
        $task->name = $request->input('name');
        $task->email = $request->input('email');
        $task->phone = $request->input('phone');
        $task->save();
        return redirect()->route('list');
    }
    public function delete($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('list');
    }
}
