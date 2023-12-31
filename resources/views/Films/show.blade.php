<style>
    .wrapper{
        background-color: rgb(15 15 15/.85);
    }
    body {
        background-image: url("{{ asset('img/films/'. $film->pochette)}}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<head>
    <title>Netflix - {{$film->titre}}</title>
</head>
<body>
    <div class="wrapper">

    <!-- HEADER -->
    @extends('layouts.app')


    @section('contenu')
    <!-- END OF HEADER -->
    
    <!-- MAIN CONTAINER -->
    
    <section class="main-container">
        <div class="location" id="home">
            <div id="div_box_film">

                <div id="div_details">
        @if (isset($film))
                    <h1>{{ $film->titre }}</h1>
                    <div id="div_details_film">
                    @if ($film->categorie=='action' || $film->categorie=='horreur')
                        <p>Film d'{{ $film->categorie }}</p>
                    @else
                        <p>Film de {{ $film->categorie }}</p>
                    @endif
                        <p>{{ $film->duree }} minutes</p>
                        <p>Année de parution {{ $film->annee }}</p>
                        <p>Rating - {{ $film->rating }}/10</p>
                    </div>

                    <div id="option"> 
                        @role('admin')
                        <a href="{{route('films.edit',[$film]) }}" id="liens">Editer le film</a>
                        @endrole
                        <a href="/" id="liens">Retour aux Films</a>
                    </div>

                    <div id="div_details_film_synopsis">
                        <p>Synopsis: </p>
                        <p>{{ $film->resume }}</p>
                    </div>
                    
                    <p>Casting:</p>
                    <div id="div_details_box">
                        @if(count($related_personnes))
                            @foreach($related_personnes as $personne)
                            <div id="div_details_film_personnes">
                                <a href="{{route('personnes.show', [$personne])}}"><img src="{{ asset('img/personnes/'. $personne->photo)}}" alt="{{$personne->photo}}?>" id="FilmPersonneImg"></a>
                                <p>{{ $personne->nom }}</p>
                                <p>{{ $personne->type }}</p>
                        @role('admin')
                                <form method="POST" action="{{route('films.jointureDelete', [$personne->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" >Supprimer</button>
                                </form>
                                <a href="" id="liens">Retirer</a>
                        @endrole
                            </div>
                            @endforeach
                        @else
                            <p>Aucun acteur à affiché.</p>
                        @endif
                    </div>
                            
                </div>

                <div id="div_img">
                    <img src="{{ asset('img/films/'. $film->pochette)}}" alt="<?php echo $film->titre; ?>" id="pochette">
                </div>
                
            </div>
        @else
            <h1>Le film n'existe pas</h1>
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
          @endsection
      <!-- END OF LINKS -->

      <!-- FOOTER -->
  </div>
</body>
</html>