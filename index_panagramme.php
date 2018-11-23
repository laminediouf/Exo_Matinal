<?php
 if (isset($_POST['valider'])){

     $recuptexte=$_POST['texte'];

     //inversement du text
     $inverse= strrev("$recuptexte");

     /* verification si le text est palindrom ou po*/
     if($recuptexte === $inverse){

         echo "$recuptexte est un palindrom";
     }else{
         echo "$recuptexte nest pas un palindrom Palindrome";
     }
 }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>

<form method="post" action="index_panagramme.php">
    <div class="form-group">
        <label for="Ecrire"> Saisir un Mot</label>
        <input type="text" name="texte" id="texte" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted"></small>

    </div>
    <button id="valider" name="valider" > Valider</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>