<?php
if (isset($_POST['valider'])){

    $recuptexte=$_POST['annesaisi'];


    /* verification si lANNE EST BISEXTILE*/
    if((is_int($recuptexte/4) && !is_int($recuptexte/100)) || is_int($recuptexte/400)){

        echo "$recuptexte est une annes bisextile";
    }else{
        echo "$recuptexte nest une annes bisextile";
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
    <title>anne bisextile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<form method="post" action="anneBisextile.php">
    <div class="form-group">
        <label for="">Entrez une annee</label>
        <input type="text" class="form-control" name="annesaisi" id="annesaisi" placeholder=" Saisir une annee">
        <button name="valider" id="valider">Valider </button>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>