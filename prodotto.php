<?php

class Prodotto {
  public $codice;
  public $prezzo;
  protected $nome;
  public $descrizione;
  public $colore;


  public function getNome(){
    return $this->nome;
  }

  public function setNome($name){
   $this->nome = $name;
  }

  public function __construct($code, $name, $price) {
    $this->codice = $code;
    $this->prezzo = $price;
    $this->nome = $name;
  }

}

 ?>
