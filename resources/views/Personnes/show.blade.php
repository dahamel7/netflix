@extends('layouts.app')

   
@section('contenu')
<style>
    .wrapper{
        background-color: rgb(15 15 15/.85);
        
    }
    body {
        background-image: url('{{ asset('img/personnes/'. $personne->photo)}}');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<body>
  <div class="wrapper">

    
    <!-- MAIN CONTAINER -->
    
    <section class="main-container">
        <div class="location" id="home">
            <div id="div_box_film">

                <div id="div_details">
        @if (isset($personne))
                    <h1>{{ $personne->nom }}</h1>
                    <div id="div_details_film">
              
                      
                        <p>Date de naissance {{ $personne->dateNaissance }}</p>
                        <p>Lieu de sa naissance - {{ $personne->lieuNaissance }}</p>
                    </div>
                    @role('admin')

                    
                    <div id="option"> 
                        <a href="{{route('personnes.edit', [$personne])}}" id="liens">modifier</a>

                        <a href="/Personnes" id="liens">Retour</a>

                    </div>
                    @endrole
                    

                    <div id="div_details_film_synopsis">
                      @if(count($related_films))
                        @foreach($related_films as $film)
                            <p>{{ $$film->titre }}</p>
                        
                        @endforeach
                    @else
                        <p>Aucun acteur à affiché.</p>
                    @endif              
                    </div>
                    <div id="div_details_film_personne">

                    </div>

                </div>

                <div id="div_img">
                    <img src="{{ asset('img/personnes/'. $personne->photo)}}" alt="<?php echo $personne->nom; ?>">
                </div>
            </div>
        @else
            <h1>La personne n'existe pas</h1>
        @endif
        </div>
    </section>

    
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

    <!-- FOOTER -->
    @endsection