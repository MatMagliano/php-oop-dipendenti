<?php


  class Operaio extends Dipendente 
  {
    private $certificatoMuletto;
    public function __construct($_numeroMatricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban, $_certificatoMuletto)
    {
      parent::__construct($_numeroMatricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban);
      $this->certificatoMuletto = $_certificatoMuletto;
    }
  }