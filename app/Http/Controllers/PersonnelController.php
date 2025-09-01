<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personnel;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Personnel::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $validated = request()->validate([
            'poste'=> 'required | string | max:100',
            'service'=> 'required | string | max:100',
            'identification'=> 'required | string | max:100',
        ]);
        $personnel = Personnel::create($validated);
        return response()->json($personnel, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $personnel = Personnel::findOrFail($id);
        return response()->json($personnel);
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
