<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function index(){

        $tasks = task::all();

        return view('tasks/index', compact('tasks')); 

    }

    public function store(Request $request){

        //
        $request->validate([
            'title' => 'required'
        ]);

        task::create([
            'title' => $request->title
        ]);

        session()->flash('msg','Task has been created');

        return redirect('/');


    }
    
    public function destroy($id) {

        task::destroy($id);

        return redirect()->back()->with('msg','TASK DELETED');

    }
}
