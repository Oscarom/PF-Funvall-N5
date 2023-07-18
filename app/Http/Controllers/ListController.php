<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Listname;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\List_;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listnames = Listname::all();

        return view("lists/index", compact("listnames"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Listname::create([
            "name" => "prueba",
            "date" => today(),
        ]);

        return redirect()->route("lists.index")->with("status", "usuario creado con exito");;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)

    {
        $listname = Listname::find($id);
        return view("lists/show", compact("listname"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
