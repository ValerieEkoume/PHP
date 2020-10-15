<?php

/*$prenom = 'Sélah';

echo ("bonjour $prenom");

$prenom = array('Guy', 'Sandra', 'Nadine', 'Valérie');
echo ($prenom [0]);

$prenom[] = 'Val';
$prenom[] = 'Guy';
$prenom[] = 'Sélah';
$prenom[] = 'Rik';

echo $prenom[1];


$coordonnee = array(
    'prenom'=>'Valerie',
    'nom' => 'Ekoume',
    'age' => '43',);

    echo $coordonnee['prenom'];




?>

$fruits = array ('Pomme', 'Banane', 'Poire', 'Cerise', 'Peche');

if (in_array('Fraise', $fruits))
{
echo 'La valeur fraise se trouve dans les fruits';

}

if (in_array('Pomme', $fruits));
{
    echo 'La valeur Pomme se trouve dans les fruits';
}


$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees)) {
    echo 'La clé "nom" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees)) {
    echo 'La clé "pays" se trouve dans les coordonnées !';
}

$fruits = array('Pomme', 'Framboise', 'Poire', 'Fraise');

$position = array_search('Poire', $fruits);
echo '"Poire" se trouve en position ' . $position . '<br/>';

$position = array_search('Framboise', $fruits);
echo '"Framboise" se trouve en position ' . $position . '<br/>';

$prenom = array('Sophie', 'Victorine', 'Vincent', 'Kamel', 'Benoit');

for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenom[$numero] . '<br />';
}


$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

foreach ($prenoms as $element) {
    echo $element . '<br />';
}*/


$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach ($coordonnees as $element) {
    echo $element . '<br />';
}










