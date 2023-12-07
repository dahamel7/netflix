<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usager;
use App\Http\Requests\UsagerRequest;
use Illuminate\Support\Facades\Hash;
use Log;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLoginForm()
    {
        return View('usagers.show');
    }



    public function login(Request $request)
    {
        $reussi = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if($reussi){
            return redirect()->route('personnes.index') ->with('message', "Connexion réussie");
        }
        else{
            return redirect()->route('usagers.show')->withErrors(['Informations invalides']); 
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('message', "Déconnexion réussie");

    }




    public function index()
    {
        $usagers = Usager::all();
        return view('usagers.index', compact('usagers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('usagers.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsagerRequest $request)
    {
        try{
            $usager = new Usager($request->all());
          
            $usager->password = Hash::make($request->password);
            if($request->password == $request->cpassword)
            {
            $usager->save();
            }else{
                return View('usagers.create')->with('message', "Le mot de passe est invalide");;
            }
        }catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('usagers.show');
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
    public function edit(Usager $usager)
    {
        return View('usagers.edit', compact('usager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsagerRequest $request, Usager $usager)
    {
        try{
            $usager->nom = $request->nom;
            $usager->nomUsager = $request->nomUsager;
            $usager->prenom = $request->prenom;
            $usager->email = $request->email;
            $usager->role = $request->role;
            $usager->password = Hash::make($request->password);
            if($request->password == $request->cpassword)
            {
            $usager->save();
            }else{
                return View('usagers.edit')->with('message', "Le mot de passe est invalide");;
            }
            return redirect()->route('usagers.index')->with('message', "Modification de " . $usager->nom . " réussi!");
        }catch(\Throwable $e)
        {
        
            return redirect()->route('usagers.index')->with('message', "Modification de " . $usager->nom . "non");
        }
        return redirect()->route('usagers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
        $usager= Usager::findOrFail($id);
       
            
                  
                 $usager->delete();
                   return redirect()->route('usagers.index')->with('message', "Suppression de " . $usager->nomUsager . " réussi!");
        }
                   catch(\Throwable $e){
                    //Gérer l'erreur
       
                    return redirect()->route('usagers.index')->withErrors(['la suppression n\'a pas fonctionné']); 
                  }
                     return redirect()->route('usagers.index');
                }
}
