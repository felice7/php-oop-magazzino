<?php
include_once 'artista.php';
include_once 'cd.php';

$cd = new cd();

$cd->titolo = 'Ligabue';
$cd->prezzo = 10;
$cd->anno_uscita = 1990;

echo '<br>';
var_dump($cd);
echo '</br>';

$artista = new Artista();

$artista->nome = 'Luciano';
$artista->cognome = 'Ligabue';



echo '<br>';
var_dump($artista);
echo '</br>';
 ?>
