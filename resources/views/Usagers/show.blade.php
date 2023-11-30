
@extends('layouts.app')

   
@section('contenu')

<form method="post" action="{{ route('usagers.login') }}">
@csrf
   <div id="input_div">
      <span></span>
      <p>Connexion</p>
   </div>
   <div id="input_div">
      <label for="email">Enter votre email</label>
      <input type="text" id="inputAdmin" placeholder="Email:" name="email">
   </div>
   <div id="input_div">
      <label for="password">Mot de passe</label>
      <input type="password" id="inputAdmin" placeholder=" Mot de passe" name="password">
   </div>

   <div id="input_div">
      <span></span>
      <button type="submit" id="inputAdminEnregistrer">Soumettre</button>
   </div>
   
   <div id="input_div">
      <span></span>
      <a href="{{route('usagers.create')}}" id="liens">Créer un compte</a>
   </div>
  </div>
</form>






@endsection