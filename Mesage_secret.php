<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>message Secret</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<form method="post" action="Mesage_secret.php">
    <div class="form-group">
        <label for=""> Ecrire votre texte</label>
        <input type="text" class="form-control" name="textsaisi" id="textsaisi" placeholder="Saisir votre texte">
    </div>
    <input type="submit" id="valider" name="valider" value="Valider" onclick="msg()">
</form>
<script type="text/javascript">
    function msg() {
        var chaine = document.getElementById('textsaisi').value;
        maj = [];
        var rep = chaine.replace(/[^A-Z]/g, "")
        maj = rep.split('').join('');
        //document.write(maj);
          alert(maj)
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>