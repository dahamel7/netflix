<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Films</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <link rel="stylesheet" style="text/css" href="app.css">
  <script src="main.js"></script>
</head>
<body>


    @if(count($films))
        @foreach($films as $film)
            <h2>{{$film->titre}}</h2>
            <p>{{$film->resume}}</p>
            <p>{{$film->annee}}</p>
            <img src='<?php echo $film->pochette; ?>' alt="imagefilm.jpg">
            <br>
        @endforeach
    @else

    @endif


</body>
</html>