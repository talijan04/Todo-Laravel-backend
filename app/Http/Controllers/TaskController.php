<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }
 
    public function show($id)
    {
        return Task::find($id);
    }

    public function store(Request $request)
    {
       // return Task::create($request->all());
       $task = Task::create($request->all());
        return response()->json($task, 201);
    }

  
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());

        //return $task;
        return response()->json($task, 200);
    }

    public function delete(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(null, 204);
        //return 204;
    }

    public function test($title)
    {
        return Task::where('title', $title)
                   ->orderBy('title', 'desc')
                   ->take(10)
                   ->get();
    }
}
