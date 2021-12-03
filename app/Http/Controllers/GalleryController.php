<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        //$images = Gallery::all();

        //return view('tasks.create')->with('images', $images);
    }

    public function store(Request $request)
    {
        //return redirect()->route('tasks.index');
    }

}
