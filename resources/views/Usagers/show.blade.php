
@extends('layouts.app')

   
@section('contenu')

<form method="post" action="{{ route('usagers.login') }}">
@csrf
   <div class="form-group">
      <label for="email">Enter votre email</label>
       <input type="text" class="form-control" id="email" placeholder="Email:" name="email">
   </div>
   <div class="form-group">
      <label for="password">Mot de passe</label>
       <input type="text" class="form-control" id="password" placeholder=" Mot de passe" name="password">
   </div>

<button type="submit" class="btn btn-danger">Soumettre</button>
</form>



@endsection