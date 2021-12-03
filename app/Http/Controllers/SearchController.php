<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Task;

use Illuminate\Http\Request;

class SearchController extends Controller
{
     public function query(Request $request)
     {
        $search_query = $request->input('query');

        $tasks = Task::where('name', 'LIKE', "%{search_query}%")->paginate(30);

        return view('tasks.index')->with('tasks',$tasks);
     }
}