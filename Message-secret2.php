<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>con_majuscule</title>
    <style>
        input{
            width:200px;
            height: 30px;
        }


    </style>
</head>
<body>
<form action="">
    <strong> Entrer un mot:</strong>  <input type="text" id="text" class="text" value="">
    <input type="submit" onClick="con_majuscule();" />
</form>

<script>
    function con_majuscule()
    {
        var text = document.getElementById("text").value;
        var taille= text.length;
        var maj='';
        for(var i=0; i<taille;i++)
        {
            if (text[i].match(/[A-Z]/, 'g')) {
                maj=maj+text[i];
            }

        }
        alert(maj);
    }
</script>
</body>
</html>