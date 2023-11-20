<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;
use App\Models\Film;
use App\Http\Requests\PersonneRequest;

class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $personnes = Personne::all();
        $acteurs = Personne::where('type','acteur')->get();
        $realisateurs = Personne::where('type','realisateur')->get();
        $produceurs = Personne::where('type','produceur')->get();
       
        return View('Personnes',compact("personnes", "acteurs","realisateurs","produceurs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('personnes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    

    public function store(PersonneRequest $request)
    {
        try{
            $personne = new Personne($request->all());
            $personne->save();
        }catch(\Throwable $e)
        {
            Log::debug($e);
        }
        return redirect()->route('personnes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personne $personne)
    {
        return view('personnes.show', compact('personne'));
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
