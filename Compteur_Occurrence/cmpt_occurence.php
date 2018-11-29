<?php
if (isset($_POST['valider'])){

    $phrase=$_POST['phrase'];
    $mot=$_POST['mot'];

    if ($phrase !="" && $mot !=""){
       $resultat= mb_substr_count("$phrase", "$mot");
       echo "$resultat";
    }else{
        echo "veuillez remplir les champ";
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
    <title>compteur d'occurence</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<form method="post" action="" id="insc_form">

        <textarea name="phrase" class="form-control" id="phrase" cols="30" rows="10" placeholder="saisir votre texte"></textarea>
        <input type="text" class="form-control" name="mot" id="mot" placeholder="Saisir le mot">
        <button name="valider" id="valider" class="btn"> Valider</button>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
