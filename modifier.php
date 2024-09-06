<?php
function modif($fichierModif, $fichierModif2)
{
    $fichierModif3 = file_get_contents($fichierModif);
    $data = json_decode($fichierModif3, true);
    $result = array_values($data);
    $fichierModif4 = json_encode($result, JSON_PRETTY_PRINT);
    $villes = file_put_contents($fichierModif2, $fichierModif4);
}
$fichierModif = __DIR__ . '/ville.json';
$fichierModif2 = __DIR__ . '/villes.json';
modif($fichierModif, $fichierModif2);


