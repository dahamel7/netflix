<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;
use App\Models\Film;
use App\Models\FilmPersonne;
use App\Http\Requests\PersonneRequest;
use Illuminate\Support\Facades\Log;

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
            $uploadedFile = $request->file('photo');
            $nomFichierUnique = str_replace(" ","_", $personne->nom) . "-". uniqid() . "." . $uploadedFile->extension();
            try{
                $request->photo->move(public_path('img/personnes'), $nomFichierUnique);
            }catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
            {
                log::error("Erreur lors du téleversement du fichier." , $e);
            }


            $personne->photo = $nomFichierUnique;
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
        $films = Film::all();
        $personnes_id = FilmPersonne::where('personne_id', $personne->id)->get();
        $films_id = FilmPersonne::where('personne_id', $personne->id)->pluck('film_id');
    
        $related_films = Film::whereIn('id', $films_id)->get();

        return view('personnes.show', compact('personne','personnes_id', 'related_films'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personne $personne)
    {
        return View('personnes.edit', compact('personne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonneRequest $request, Personne $personne)
    {
        try{
            $personne->nom = $request->nom;
            $personne->dateNaissance = $request->dateNaissance;
            $personne->lieuNaissance = $request->lieuNaissance;
            $personne->type = $request->type;
            $uploadedFile = $request->file('photo');
            $nomFichierUnique = str_replace(" ","_", $personne->nom) . "-". uniqid() . "." . $uploadedFile->extension();
            try{
                $request->photo->move(public_path('img/personnes'), $nomFichierUnique);
            }catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
            {
                log::error("Erreur lors du téleversement du fichier." , $e);
            }


            $personne->photo = $nomFichierUnique;
            $personne->save();
            return redirect()->route('personnes.index')->with('message', "Modification de " . $personne->nom . " réussi!");
        }catch(\Throwable $e)
        {
        
            return redirect()->route('personnes.index')->with('message', "Modification de " . $personne->nom . "non");
        }
        return redirect()->route('personnes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $personne= Personne::findOrFail($id);
       
            
                  
            $personne->delete();
                       return redirect()->route('personnes.index')->with('message', "Suppression de " . $personne->nom . " réussi!");
          }
          catch(\Throwable $e){
             //Gérer l'erreur
             Log::debug($e);
             return redirect()->route('personnes.index')->withErrors(['la suppression n\'a pas fonctionné']); 
           }
              return redirect()->route('personnes.index');
      
}
}
