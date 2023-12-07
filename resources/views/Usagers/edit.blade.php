<style>
    .wrapper{
        background-color: rgb(15 15 15/.85);
        
    }
    body {
         
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" style="text/css" href="../../app.css">
    <title>Netflix - Modification de {{$usager->nom}}</title>
</head>
@extends('layouts.app')

   
@section('contenu')

<section class="main-container">
            <div class="location" id="home">
                <div id="div_box_film_edit">
                    <span></span>
                    <div id="div_details">
<form method="post" action="{{ route('usagers.update',[$usager]) }}"  enctype="multipart/form-data">
@csrf
@method('PATCH')
    <div class="container-fluid">

        <div class="row form-group" id="input_groupe">

            <div class="col-3"></div>

            <div class="col-6">

               <div id="input_div">
                  <span></span>
                
               </div>

               <div id="input_div">
                  <label for="nom" id="inputLabel">Nom de l'usager</label>
                  <input type="text" id="inputAdmin" placeholder="Nom de l'usager" name="nom" value="<?php echo $usager->nom; ?>">
               </div>

               <div id="input_div">
                  <label for="prenom" id="inputLabel">Prenom de l'usager</label>
                  <input type="text" id="inputAdmin" placeholder="Prenom de l'usager" name="prenom" value="<?php echo $usager->prenom; ?>">
               </div>

               <div id="input_div">
                  <label for="nomUsager" id="inputLabel">Nom d'usager</label>
                  <input type="text" id="inputAdmin" placeholder="nom d'usager" name="nomUsager" value="<?php echo $usager->nomUsager; ?>">
               </div>

               <div id="input_div">
                  <label for="email" id="inputLabel">Email</label>
                  <input type="email" id="inputAdmin" placeholder="nom d'usager" name="email" value="<?php echo $usager->email; ?>">
               </div>

               <div id="input_div">
                  <label for="role" id="inputLabel">Role de l'usager</label>
                  <select id="inputAdmin" name="role">
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
                  <input type="password" id="inputAdmin" placeholder="Mot de passe" name="password" >
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
</div>
</div>
</div>
   </section>

@endsection