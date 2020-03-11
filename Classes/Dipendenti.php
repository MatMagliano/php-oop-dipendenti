<?php 

class Dipendente
{
  private $numeroMatricola;
  private $nome;
  private $cognome;
  private $indirizzo;
  private $cf;
  private $iban;

  public function __construct($_numeroMatricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban) 
  {
    $this->numeroMatricola = $_numeroMatricola;
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->indirizzo = $_indirizzo;
    $this->cf = $_cf;
    $this->iban = $_iban;
  }

  public function visualizzaDipendente() {
    $result = [
      'Nome' => $this->nome
    ];
  }

}