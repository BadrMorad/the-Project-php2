<h1>Exercice 4</h1>

<h2>Résultat</h2>
<?php
$wiki ="https://fr.wikipedia.org/wiki/";
$capitales = array(
    "France" =>"Paris",
    "Allemagne" =>"Berlin",
    "UAS" =>"Washington",
    "Italie" =>"Rome",
    "Espagne" =>"Madrid",
);
asort($capitales);
function afficherTableHTML($capitales){
foreach($capitales as $pays => $capitale)  
    $result ="<table border=1>
    <thead>
          <tr>
            <th>Pays</th>
                   <th>Capitales</th>
                   <th>lien Wiki</th>
           </tr>
              </thead>

        <tbody>";
foreach($capitales as $pays => $capitale) {
$result .= "<tr>
         <td>".mb_strtoupper($pays)."</td>
         <td>".ucfirst($capitale)."</td>
         <td><a href = https://fr.wikipedia.org/wiki/$capitale traget=_blank>Lien</a>;
         </td>
  </tr>";     
}           
$result .= "</tbody></table>";      
return $result;
 }
 echo afficherTableHTML($capitales);
?>