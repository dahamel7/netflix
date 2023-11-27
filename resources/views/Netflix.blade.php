@extends('layouts.app')

   
@section('contenu')
    <!-- END OF HEADER -->
    
    <!-- MAIN CONTAINER -->
    <section class="main-container">
      <div class="location" id="home">
          <h1 id="home">Films d'action</h1>
          <div class="box">
            @if(count($filmsAction))
              <?php $ctr = 0; ?>
                @foreach($filmsAction as $film)
                  <?php $ctr++;
                  ?>
                    <div id="div_box">
                      <a href="{{route('films.show', [$film])}}"><img src='<?php echo $film->pochette; ?>' alt="<?php echo $film->titre; ?>"></a>
                      <h3 id="div_box_titre"><?php echo $film->titre; ?></h3>
                      <p id="div_box_annee">Rating - <?php echo $film->rating; ?>/10</p>
                      <p id="div_box_annee"><?php echo $film->annee; ?></p>
                    </div>
                  <?php 
                    
                  ?>
                @endforeach
            @else
              <h2>Aucun film a affiché</h2>
            @endif
          </div>
      </div>
      

      <h1 id="myList">Horreur</h1>
      <div class="box">
            @if(count($filmsHorreur))
              <?php $ctr = 0; ?>
                @foreach($filmsHorreur as $film)
                  <?php $ctr++;
                    if($ctr <= 6) {
                  ?>
                    <div id="div_box">
                      <a href="{{route('films.show', [$film])}}"><img src='<?php echo $film->pochette; ?>' alt="<?php echo $film->titre; ?>"></a>
                      <h3 id="div_box_titre"><?php echo $film->titre; ?></h3>
                      <p id="div_box_annee">Rating - <?php echo $film->rating; ?>/10</p>
                      <p id="div_box_annee"><?php echo $film->annee; ?></p>
                    </div>
                  <?php 
                    }
                  ?>
                @endforeach
            @else
              <h2>Aucun film a affiché</h2>
            @endif              
      </div>

      <h1 id="myList">Comédie</h1>
      <div class="box">
            @if(count($filmsComedie))
              <?php $ctr = 0; ?>
                @foreach($filmsComedie as $film)
                  <?php $ctr++;
                    if($ctr <= 6) {
                  ?>
                    <div id="div_box">
                      <a href="{{route('films.show', [$film])}}"><img src='<?php echo $film->pochette; ?>' alt="<?php echo $film->titre; ?>"></a>
                      <h3 id="div_box_titre"><?php echo $film->titre; ?></h3>
                      <p id="div_box_annee">Rating - <?php echo $film->rating; ?>/10</p>
                      <p id="div_box_annee"><?php echo $film->annee; ?></p>
                    </div>
                  <?php 
                    }
                  ?>
                @endforeach
            @else
              <h2>Aucun film a affiché</h2>
            @endif              
      </div>

      <h1 id="myList">Les mieux notés</h1>
      <div class="box">
            @if(count($plusPopulaire))
              <?php $ctr = 0; ?>
                @foreach($plusPopulaire as $film)
                  <?php $ctr++;
                  ?>
                    <div id="div_box">
                      <a href="{{route('films.show', [$film])}}"><img src='<?php echo $film->pochette; ?>' alt="<?php echo $film->titre; ?>"></a>
                      <h3 id="div_box_titre"><?php echo $film->titre; ?></h3>
                      <p id="div_box_annee">Rating - <?php echo $film->rating; ?>/10</p>
                      <p id="div_box_annee"><?php echo $film->annee; ?></p>
                    </div>
                  <?php 
                  ?>
                @endforeach
            @else
              <h2>Aucun film a affiché</h2>
            @endif              
      </div>
      
      <h1 id="tvShows">Les moins notés</h1>
      <div class="box">
            @if(count($moinsPopulaire))
              <?php $ctr = 0; ?>
                @foreach($moinsPopulaire as $film)
                  <?php $ctr++;
                    if($ctr <= 6) {
                  ?>
                    <div id="div_box">
                      <a href="{{route('films.show', [$film])}}"><img src='<?php echo $film->pochette; ?>' alt="<?php echo $film->titre; ?>"></a>
                      <h3 id="div_box_titre"><?php echo $film->titre; ?></h3>
                      <p id="div_box_annee">Rating - <?php echo $film->rating; ?>/10</p>
                      <p id="div_box_annee"><?php echo $film->annee; ?></p>
                    </div>
                  <?php 
                    }
                  ?>
                @endforeach
            @else
              <h2>Aucun film a affiché</h2>
            @endif
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