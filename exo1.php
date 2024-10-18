<h1>Exercice 1</h1>
<p>Créer une Fonction permettant de convertir en majuscule et en rouge un texte passé en argument </p>
<h2>Résultat</h2>


<style>
.red {
    color:red 
}
</style>


<?php

$texte = "Mon texte en paramétre";
$texte2 = "Mon auter texte en arguments";



// afficher le résultat de la fonction convertirMajRouge
echo convertirMajRouge($texte);
echo convertirMajRouge($texte2);
echo convertirMajRouge($texte); 


echo convertirMajColor($texte, 'green');

function convertirMajRouge($texte) {
    $result = mb_strtoupper($texte); // convertir en majuscule return $result
    $result = "<p class='red'>" .$result."</p>"; // modifier la couleur en appelent la classe CSS 'red'
    return $result; // renvoie le résuultat

}
function convertirMajRouge2($texte) {
    return "<p class='red'>".mb_strtoupper($texte)."</p>";
}
function convertirMajColor($texte, $color ) {
    return "<p style='color:$color'>".mb_strtoupper($texte)."</p>";

}
?>