<?php

class Borsa extends Prodotto {

  public $modello;
  public $capienza;

  public function __construct($code, $name, $price, $model, $capacity){
    parent::__construct($code, $name, $price);
    $this->modello = $model;
    $this->capienza = $capacity;

  }
}

 ?>
