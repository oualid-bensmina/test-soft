<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;

class Tachescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taches=Tache::all();
        return response()->json($taches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json("success");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'nomt'=>'required|string',
            'description',
       ]);
        Tache::create($request->post());
        return response()->json("success cret");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Tache $tache )
    {
        $tache = Tache::find($id); 
        return response()->json($tache);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tache $tache)
    {
        return response()->json("success");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tache = Tache::find($id); 
        $request->validate([
            'nomt'=>'required|string',
            'description'=>'required|string',
       ]);
       $tache->update($request->all());
        // $tache->fill($request->post())->save();
        return response()->json("success update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tache = Tache::find($id); 
        $tache->delete();
        return response()->json("success delete");
    }
}
