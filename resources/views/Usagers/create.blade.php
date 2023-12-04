
@extends('layouts.app')

   
@section('contenu')

<form method="post" action="{{ route('usagers.store') }}" enctype="multipart/form-data">
@csrf
    <div class="container-fluid">

        <div class="row form-group" id="input_groupe">

            <div class="col-3"></div>

            <div class="col-6">

               <div id="input_div">
                  <span></span>
                  <h5>Création de compte</h5>
               </div>

               <div id="input_div">
                  <label for="nom" id="inputLabel">Nom de l'usager</label>
                  <input type="text" id="inputAdmin" placeholder="Nom de l'usager" name="nom">
               </div>

               <div id="input_div">
                  <label for="prenom" id="inputLabel">Prenom de l'usager</label>
                  <input type="text" id="inputAdmin" placeholder="Prenom de l'usager" name="prenom">
               </div>

               <div id="input_div">
                  <label for="nomUsager" id="inputLabel">Nom d'usager</label>
                  <input type="text" id="inputAdmin" placeholder="nom d'usager" name="nomUsager">
               </div>

               <div id="input_div">
                  <label for="type" id="inputLabel">Role de l'usager</label>
                  <select id="inputAdmin" name="type">
                     <option value="" selected>Veuillez choisir un role</option>
                     <option value="enfant">enfant</option>
                     <option value="normal">normal</option>
                     @role('admin')
                     <option value="admin">administrateur</option>
                     @endrole
                  </select>
               </div>
               
               <div id="input_div">
                  <label for="password" id="inputLabel">Mot de passe</label>
                  <input type="password" id="inputAdmin" placeholder="Mot de passe" name="password">
               </div>

               <div id="input_div">
                  <label for="cpassword" id="inputLabel">Confirmation du mot de passe</label>
                  <input type="password" id="inputAdmin" placeholder="confirmerz le mot de passe" name="cpassword">
               </div>

               <div id="input_div">
                  <span></span>
                  <button type="submit" id="inputAdminEnregistrer">Enregistrer</button>
               </div>

               </div>

         <div class="col-3"></div>

      </div>

   </div>

</form>


@endsection