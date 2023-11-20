<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Personne;
use Illuminate\Http\Request;
use App\Http\Requests\FilmRequest;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        $personnes = Personne::all();
        $acteurs = Personne::where('type','acteur')->get();

        return View('administration', compact('films', 'personnes', 'acteurs'));
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
        //
    }

    public function storeRealisateur(Request $request)
        {
            try {
                $film = Film::findOrFail($request->film_id);
                $realisateur = Personne::findOrFail($request->id);
                
                /*Verifier si la relation existe*/
                if($film->film_personne->contains($realisateur)) {
                    return redirect()->route('personnes.index')->withErrors(['Relation existe!']);
                }
                else {
                    $film->realisateur()->attach($realisateur);
                }
                $film->save();
                                      
                return redirect()->route('personnes.index')->with('message','Relation OK');
            }
        
            catch (\Throwable $e) {
                //Gérer l'erreur
                Log::debug($e);
                return redirect()->route('personnes.index')->withErrors(['Relation Bogue!']); 
            }
            return redirect()->route('personnes.index');
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
