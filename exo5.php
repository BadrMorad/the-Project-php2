<h1>Exercice 5</h1>

<h2>Résultat</h2>

<?php
function afficherInput($nomsInput) {
    $result = '<from>';
    foreach ($nomsInput as $nom) {
        $result .= '<label>' . htmlspecialchars($nom) . ':</label><br>';
        $result .= '<input type="texte" name="' . strtolower(str_replace(' ', '_', $nom)) . '" placeholder="' .htmlspecialchars($nom) . '" ><br>';
    }
    $result .= '<input type="submit" value=">';
    $result .= '</from>';
    return $result;
}
$nomsInput = ["Nom", "Prénom", "Ville"];
echo afficherInput($nomsInput);
?>