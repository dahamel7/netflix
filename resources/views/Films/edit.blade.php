<style>
    .wrapper{
        background-color: rgb(15 15 15/.85);
        
    }
    body {
        background-image: url('{{ $film->pochette }}');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" style="text/css" href="../../app.css">
    <title>Netflix - Modification du film {{$film->titre}}</title>
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
                <div id="div_box_film_edit">
                    <span></span>
                    <div id="div_details">
                        
                        @if (isset($film))
                            <form method="POST" action="{{route('films.update', [$film->id]) }}">
                            @csrf
                            @method('PATCH')

                                <div id="input_div">
                                    <p id="inputLabel_films">Titre du film</p>
                                    <input type="text" id="inputAdmin" value="{{ old('titre', $film) }}" name="titre">
                                </div>
                            
                                <div id="input_div">
                                    <p id="inputLabel_films">Catégorie du film</p>
                                    <input type="text" id="inputAdmin" value="{{ old('categorie', $film->categorie) }}" name="categorie">
                                </div>
                            
                                <div id="input_div">
                                    <p id="inputLabel_films">Résumé</p>
                                    <input type="text" id="inputAdmin" value="{{ old('resume', $film->resume) }}" name="resume">
                                </div>
                                
                                <div id="input_div">
                                    <p id="inputLabel_films">Pochette</p>
                                    <input type="text" id="inputAdmin" value="{{ old('pochette', $film->pochette) }}" name="pochette">
                                </div>
                                
                                <div id="input_div">
                                    <p id="inputLabel_films">Réalisateur</p>
                    
                                    <select id="inputAdmin" name="personne_id">
                                        <option value="{{ old('personnes_id', $film->personnes_id) }}" selected>Veuillez choisir un réalisateur</option>
                                        @foreach($personnes as $personne)
                                        <option value="{{ $personne->id }}">{{ $personne->nom }}</option>
                                        @endforeach 
                                    </select>
                                </div>
                                
                                <div id="input_div">
                                    <p id="inputLabel_films">Durée du film</p>
                                    <input type="text" id="inputAdmin" value="{{ old('duree', $film->duree) }}" name="duree">
                                </div>
                                
                                <div id="input_div">
                                    <p id="inputLabel_films">Année de sortie</p>
                                    <input type="text" id="inputAdmin" value="{{ old('annee', $film->annee) }}" name="annee">
                                </div>
                            
                                <div id="input_div">
                                    <p id="inputLabel_films">Rating</p>
                                    <input type="text" id="inputAdmin" value="{{ old('rating', $film->rating) }}" name="rating">
                                </div>
                            
                                <div id="input_div">
                                    <span></span>
                                    <button type="submit" id="inputAdminEnregistrer">Modifier</button>
                                </div>
                            </form>
                        
                            <form method="POST" action="{{route('films.destroy', [$film->id]) }}">
                                @csrf
                                @method('DELETE')
                                <div id="input_div">
                                    <span></span>
                                    <button type="submit" id="inputAdminEnregistrer">Supprimer</button>
                                </div>
                            </form>

                            <div id="input_div">
                                <span></span>
                                <a href="/" id="liens">Retour aux Films</a>
                            </div>
                    </div>
                    <span></span>
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
            @endsection
        </section>
        <!-- END OF LINKS -->

        <!-- FOOTER -->
    </div>
</body>
</html>