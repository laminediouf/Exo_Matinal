<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compteur d'occurence</title>
    <style>

        textarea {
            width: 500px;
            min-height: 200px;
            max-height: 400px;
            resize: vertical;
        }
    </style>
</head>
<body style="text-align: center">
<h1>Compteur d'occurence</h1>
<form>
    <textarea name="text" id="text" placeholder="Entrez ici votre texte" required></textarea><br><br>
    <input type="text" name="occurence" id="occurence" placeholder="Entrez ici l'occurence" required><br><br>
    <input type="button" name="submit" value="Verifier" onclick="verify_word()">
</form>
<p id="result"></p>


<script>

    function verify_word() {
        var text = document.querySelector('#text').value;
        var mot = document.querySelector('#occurence').value;

        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState==4 && this.status==200) {
                document.querySelector("#result").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","valid.php?occurence=" + mot + "&text=" + text, true);
        xmlhttp.send();
    }

</script>


</body>


</html>
