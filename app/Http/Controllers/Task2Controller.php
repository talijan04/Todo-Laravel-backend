<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task2;

class Task2Controller extends Controller
{
    public function index()
    {
        return Task2::all();
    }
 
    public function show($id)
    {
        return Task2::find($id);
    }

    public function store(Request $request)
    {
       // return Task::create($request->all());
       $task = Task2::create($request->all());
        return response()->json($task, 201);
    }

  
    public function update(Request $request, $id)
    {
        $task = Task2::findOrFail($id);
        $task->update($request->all());

        //return $task;
        return response()->json($task, 200);
    }

    public function delete(Request $request, $id)
    {
        $task = Task2::findOrFail($id);
        $task->delete();

        return response()->json(null, 204);
        //return 204;
    }

    public function test($userid)
    {
        return Task2::where('userid', $userid)
                   ->orderBy('created_at', 'asc')
                   ->take(10)
                   ->get();
    }
}
