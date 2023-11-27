
@extends('layouts.app')

   
@section('contenu')

<div class="row text-center">
    <div class="col-12 lien">
    <a href="{{route('usagers.create')}}" class="btn btn-danger text-center " >ajouter un nouvel usager</a>
  </div>
</div>
  <table class="table text-center">
  <thead>
    <tr>
    <th scope="col-1">Id</th>
      <th scope="col-1">Nom</th>
      <th scope="col-1">Role</th>
      <th scope="col-1">Modifier</th>
      <th scope="col-1">Supprimer</th>
    </tr>
  </thead>

  <tbody>

  @if(count($usagers))
            
                @foreach($usagers as $usager)
                
                    <tr>
                    <th scope="row"><?php echo $usager->id; ?></th>
                    <td><?php echo $usager->nomUsager; ?></td>
                    <td><?php echo $usager->role; ?></td>
                    <td>fef</td>
                    <td>fwefwe</td>
                    </tr>
</tbody>
                  
                    
                  
                @endforeach
            @else
              <h2>Aucune personne a affiché</h2>
            @endif
   
@endsection