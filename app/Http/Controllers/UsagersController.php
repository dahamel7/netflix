<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usager;
use App\Http\Requests\UsagerRequest;

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
    
            $usager->save();
        }catch(\Throwable $e)
        {
            Log::debug($e);
        }
        return redirect()->route('/login');
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
