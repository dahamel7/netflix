<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Personne;
use App\Models\FilmPersonne;
use App\Http\Requests\FilmRequest;
use Illuminate\Support\Facades\Log;

class NetflixController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();

        $personnes = Personne::all();

        $filmsAction = Film::where('categorie','action')->get();

        $filmsHorreur = Film::where('categorie','horreur')->get();

        $filmsComedie = Film::where('categorie','comedie')->get();

        $plusPopulaire = Film::orderBy('rating', 'desc')->get();

        $moinsPopulaire = Film::orderBy('rating', 'asc')->get();
        
        return View('netflix', compact('films', 'filmsAction', 'filmsHorreur', 'filmsComedie', 'plusPopulaire', 'moinsPopulaire', 'personnes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $realisateurs = Personne::where('type','realisateur')->get();
        return View('films.create', compact('realisateurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //dd($request->file('pochette'));
            $film = new Film($request->all());
            $uploadedFile = $request->file('pochette');
            $nomFichierUnique = str_replace(" ","_", $film->titre) . "-" . uniqid() . "." . $uploadedFile->extension();
            //dd($request->all());
            try {
                $request->pochette->move(public_path('img/films'), $nomFichierUnique);
                Log::debug("Copié.");
            } catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
            {
                Log::error("Erreur lors du téleversement du fichier." , [$e]);
            }
            
            $film->pochette = $nomFichierUnique;
            $film->save();
            return redirect()->route('netflix.index')->with('message', "Ajout de le film " . $film->titre . " réussi!");
        }
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('netflix.index')->withErrors("L'ajout du film n'a pas fonctionné.");
        }
        return redirect()->route('netflix.index');
    }

    public function storeRealisateur(Request $request)
        {
            try {
                $film = Film::findOrFail($request->film_id);
                $realisateur = Personne::findOrFail($request->id);
                
                /*Verifier si la relation existe*/
                if($film->film_personne->contains($realisateur)) {
                    return redirect()->route('personnes.index')->withErrors(['La relation existe déjà!']);
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
    public function show(Film $film)
    {
        $personnes = Personne::all();
        $films_id = FilmPersonne::where('film_id', $film->id)->get();
        $personnes_id = FilmPersonne::where('film_id', $film->id)->pluck('personne_id');
    
        $related_personnes = Personne::whereIn('id', $personnes_id)->get();


        return View('films.show', compact('film', 'films_id', 'related_personnes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        $realisateurs = Personne::where('type','realisateur')->get();

        return View('films.edit', compact('film', 'realisateurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, Film $film)
    {
        try {
            $film->titre = $request->titre;
            $film->categorie = $request->categorie;
            $film->resume = $request->resume;
            
            $uploadedFile = $request->file('pochette');
            $nomFichierUnique = str_replace(" ","_", $film->titre) . "-" . uniqid() . "." . $uploadedFile->extension();
            //dd($request->all());
            try {
                $request->pochette->move(public_path('img/films'), $nomFichierUnique);
                Log::debug("Copié.");
            } catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
            {
                Log::error("Erreur lors du téleversement du fichier." , [$e]);
            }
            
            $film->pochette = $nomFichierUnique;
            $film->personne_id = $request->personne_id;
            $film->duree = $request->duree;
            $film->annee = $request->annee;
            $film->rating = $request->rating;

            $film->save();
            return redirect()->route('netflix.index')->with('message', "Modification de " . $film->titre . " réussi!");
        }
        catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('netflix.index')->withErrors(["La modification n'a pas fonctionné."]);
        }
        return redirect()->route('netflix.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $film = Film::findOrFail($id);

            //Si un film a des acteurs, on ne peut pas le supprimer.
            //$film->realisateur()->detach();
            
            $film->delete();
            return redirect()->route('netflix.index')->with('message', "Suppression de " . $film->titre . " réussi!");
        }
        catch(\Throwable $e){
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('netflix.index')->withErrors([$id . ' La suppression de ' . $film->titre . ' n\'a pas fonctionnée.']); 
        }
        return redirect()->route('netflix.index');
    }

    public function jointureDelete($id)
    {
        try{
            $jointure = FilmPersonne::findOrFail($id);

            $jointure->delete();
            return redirect()->route('netflix.index')->with('message', "Suppression de la jointure réussi!");
        }
        catch(\Throwable $e){
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('netflix.index')->withErrors([$id . ' La suppression de ' . $film->titre . ' n\'a pas fonctionnée.']); 
        }
        return redirect()->route('netflix.index');
    }
}
