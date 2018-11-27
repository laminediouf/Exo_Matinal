function anagramme(mot1,mot2){
    mot1 = mot1.toLowerCase().replace(/[^a-z0123456789]+/g,"");
    mot2 = mot2.toLowerCase().replace(/[^a-z0123456789]+/g,"");
    var tmp1 = mot1.split("").sort().join();
    var tmp2 = mot2.split("").sort().join();
    if (tmp1 === tmp2){
        return true;
    }

    return false;
}

var btn = document.getElementById('btn');
btn.addEventListener("click", function() {
    var ana1 = document.getElementById('mot1').value;
    var ana2 = document.getElementById('mot2').value;
    var resultat = anagramme(ana1,ana2);
    if (resultat === true){
        document.getElementById("notification").innerHTML = "Vrai";
        document.getElementById("notification").className = "success";
    } else {
        document.getElementById("notification").innerHTML = "faux";
        document.getElementById("notification").className = "danger";
    }
});