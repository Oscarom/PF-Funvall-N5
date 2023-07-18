<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {     
/* 
        return $categories[1]->items; */
        return view("items/index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias =Category::all();
        return view("items/create", compact("categorias") );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Item::create([
            "name" => $request->name,
            "note" => $request->note,
            "image" => $request->image,
            "category_id" => $request->category_id,
        ]);
        return redirect()->route("items.index")->with("status", "usuario creado con exito");;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::find($id);
        /* es lo mismo que lo de arriba $usuario = DB::table("users")->where("id", $id)->first(); */
        
         return view("items/show", compact("item"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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
        $item = Item::find($id);
        $item->delete();
        return redirect()->route("items.index")->with("status", "datos eliminados con exito");
    }
}
