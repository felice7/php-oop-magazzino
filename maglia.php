<?php

class Maglia extends Prodotto {

  public $taglia;
  public $genere;
  public $stagione;
  public $design;

  public function stampaNome(){
    echo $this->nome;
  }
}

 ?>
