
@extends('layouts.app')

@section('title', "Personne")
   
@section('contenu')

<section class="main-container">
@role('admin')
<a class="btn btn-danger"  href="{{route('personnes.create')}}">Ajouter une personne</a>
@endrole

      <div class="location" id="home">
          <h1 id="home">Acteurs</h1>
          <div class="box">
            @if(count($acteurs))
              <?php $ctr = 0; ?>
                @foreach($acteurs as $personne)
                  <?php $ctr++;
                 
                  ?>
                    <div id="div_box">
                      <a href="{{route('personnes.show', [$personne])}}"><img src="{{ asset('img/personnes/'. $personne->photo)}}" alt="<?php echo $personne->nom; ?>"></a>
                      <h3 id="div_box_titre"><?php echo $personne->nom; ?></h3>
                    </div>
                  
                    
                  
                @endforeach
            @else
              <h2>Aucune personne a affiché</h2>
            @endif
          </div>
      </div>

 
  
  <h1 id="myList">Réalisateur</h1>
      <div class="box">
      @if(count($realisateurs))
              <?php $ctr = 0; ?>
                @foreach($realisateurs as $personne)
                  <?php $ctr++;
                  
                  ?>
                    <div id="div_box">
                      <a href="{{route('personnes.show', [$personne])}}"><img src="{{ asset('img/personnes/'. $personne->photo)}}" alt="<?php echo $personne->nom; ?>"></a>
                      <h3 id="div_box_titre"><?php echo $personne->nom; ?></h3>
                      
                    </div>
                  <?php 
                    
                  ?>
                @endforeach
            @else
              <h2>Aucun film a affiché</h2>
            @endif
          </div>
      </div>

 

      <h1 id="myList">Producteur</h1>
      <div class="box">
      @if(count($produceurs))
           
                @foreach($produceurs as $personne)
                  <?php $ctr++;
                  
                  ?>
                    <div id="div_box">
                      <a href="{{route('personnes.show', [$personne])}}"><img src="{{ asset('img/personnes/'. $personne->photo)}}" alt="<?php echo $personne->nom; ?>"></a>
                      <h3 id="div_box_titre"><?php echo $personne->nom; ?></h3>
                    
                    </div>
                  <?php 
                    
                  ?>
                @endforeach
            @else
              <h2>Aucun film a affiché</h2>
            @endif
          </div>
      </div>

 
 
<!-- END OF MAIN CONTAINER -->

<!-- LINKS -->
<section class="link">
  <div class="logos">
    <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
    <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
    <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
    <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
  </div>
  <div class="sub-links">
    <ul>
      <li><a href="#">Audio and Subtitles</a></li>
      <li><a href="#">Audio Description</a></li>
      <li><a href="#">Help Center</a></li>
      <li><a href="#">Gift Cards</a></li>
      <li><a href="#">Media Center</a></li>
      <li><a href="#">Investor Relations</a></li>
      <li><a href="#">Jobs</a></li>
      <li><a href="#">Terms of Use</a></li>
      <li><a href="#">Privacy</a></li>
      <li><a href="#">Legal Notices</a></li>
      <li><a href="#">Corporate Information</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </div>
</section>
<!-- END OF LINKS -->
@endsection