
@extends('layouts.app')

   
@section('contenu')

<form method="post" action="{{ route('personnes.store') }}" enctype="multipart/form-data">
@csrf
   <div class="form-group">
      <label for="nom">Nom de la personne</label>
       <input type="text" class="form-control" id="nom" placeholder="Nom de la personne" name="nom">
   </div>
   <div class="form-group">
      <label for="dateNaissance">Date de naissance de la personne</label>
       <input type="text" class="form-control" id="dateNaissance" placeholder="Date de naissance de la personne" name="dateNaissance">
   </div>
   <div class="form-group">
      <label for="lieuNaissance">Lieu de naissance de la personne</label>
       <input type="text" class="form-control" id="lieuNaissance" placeholder="Lieu de naissance de la personne" name="lieuNaissance">
   </div>
   <div class="form-group">
      <label for="type">type de personne</label>
       <input type="text" class="form-control" id="type" placeholder="type" name="type">
   </div>
   <div class="form-group">
      <label for="photo">photo de la personne</label>
       <input type="file" class="form-control" id="photo" placeholder="photo de la personne" name="photo">
   </div>

<button type="submit" class="btn btn-danger">Enregistrer</button>
</form>


@endsection