<?php
include_once 'prodotto.php';
include_once 'maglia.php';
include_once 'borsa.php';
// $prodotto1 = new Prodotto('ab332d', 'Maglia', '€ ' . 15);
// $prodotto1->colore = 'giallo';
// $prodotto1->descrizione = 'prodotto invernale';
//
// echo "<pre>";
// var_dump($prodotto1);
// echo "</pre>";

$maglia1 = new Maglia('ab332d', 'Maglia', '€ ' . 15);
$maglia->colore = 'rosso';
$maglia1->taglia = 'L';
$maglia1->genere = 'Unisex';
$maglia1->design = 'maniche lunghe';
$maglia1->stagione = 'invernale';

echo "<pre>";
var_dump($maglia1);
echo "</pre>";

$borsa1 = new Borsa('ab332d', 'Borsa', '€ ' . 40, 'tracolla', 'media');
// $borsa1->modello = 'tracolla';
// $borsa1->capienza = 'grande';
$borsa1->descrizione = 'elegante';

echo "<pre>";
var_dump($borsa1);
echo "</pre>";

$maglia1->stampaNome();

 ?>
