<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::all();

        return view('catalogs.index')->with('catalogs', $catalogs);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $catalog = new Catalog;

        $catalog->name = $request->name;
        $catalog->description = $request->description;
        $catalog->status = $request->status;

        $catalog->save();

        return redirect()->back();
    }

    public function show(Catalog $id)
    {
        //
    }

    public function edit(Catalog $id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Catalog $id)
    {
        //
    }
}
