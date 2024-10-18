<h1>Exercice 5</h1>

<h2>Résultat</h2>

<?php
// Fonction pour afficher le formulaire avec des champs de texte 
function afficherInput($nomsInput) {
    
    $result = '<from>'; // Commence le formulaire 

    foreach ($nomsInput as $nom) {
        // Crée une étiquette pour chaque champs de texte 
        $result .= '<label>' . htmlspecialchars($nom) . ':</label><br>';
        //Crée un champs de texte avce un nom formaté e minuscule et espaces remplacés par des underscores
        $result .= '<input type="texte" name="' . strtolower(str_replace(' ', '_', $nom)) . '" placeholder="'  . '" ><br>';
    }
    $result .= '<input type="submit" value=">';
    $result .= '</from>';
    return $result;
}
$nomsInput = ["Nom", "Prénom", "Ville"];
echo afficherInput($nomsInput);
?>