<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();

    	return view('index', ['tasks' => $tasks]);
    }

    public function create(Request $request)
    {
    	Task::insert(['name' => $request->name, 'discription' => $request->discription]);

    	return redirect('/');
    }

    public function delete($id)
    {
    	Task::destroy($id);

    	return redirect('/');
    }

    public function upgrade(Request $request, $id)
    {
    	Task::where('id', $id)
    		->update(['discription' => $request->discription]);

    	return redirect('/');
    }
}
