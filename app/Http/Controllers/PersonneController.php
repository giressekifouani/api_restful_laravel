<?php

namespace App\Http\Controllers;
use App\Models\personne;

use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Personne::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'prenom'=> 'required | string |max:255',
            'nom'=> 'required | string |max:255',
            'sexe'=> 'required | string |max:15',
            'nationalite'=> 'required | string |max:255',
            'adresse'=> 'required | string |max:255',
            'telephone'=> 'required | string |max:255',
            'email'=> 'required | string |max:255',
        ]);
        $personne = Personne::create($validated);
        return response()->json($personne, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
             'prenom'=> 'required | string |max:255',
            'nom'=> 'required | string |max:255',
            'sexe'=> 'required | string |max:15',
            'nationalite'=> 'required | string |max:255',
            'adresse'=> 'required | string |max:255',
            'telephone'=> 'required | string |max:255',
            'email'=> 'required | string |max:255',
        ]);

        $personne = Personne::create($validated);

        return response()->json($personne, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $personne = Personne::findOrFail($id);
        return response()->json($personne);
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
         $personne = Personne::findOrFail($id);

        $validated = $request->validate([

             'prenom'=> 'sometimes | string |max:255',
            'nom'=> 'sometimes | string |max:255',
            'sexe'=> 'sometimes | string |max:15',
            'nationalite'=> 'sometimes | string |max:255',
            'adresse'=> 'sometimes | string |max:255',
            'telephone'=> 'sometimes | string |max:255',
            'email'=> 'sometimes | string |max:255',
        ]);

        $personne->update($validated);

        return response()->json($personne);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $personne = Personne::findOrFail($id);
        $personne->delete();

        return response()->json(['message' => 'Personne supprimée avec succès']);
    }
}
