<?php

include_once 'artista.php';

class Cd extends Artista {

public $titolo;
public $prezzo;
public $anno_uscita;

public function scontoCd($prezzo){
  return $prezzo - 2;
  }

}

var_dump($prezzo);


 ?>
