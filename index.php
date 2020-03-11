<?php 

  require_once __DIR__ .'/classes/Dipendenti.php';
  require_once __DIR__ .'/classes/Dirigente.php';
  require_once __DIR__ .'/classes/Operaio.php';

  $pippo = new Dirigente('123', 'Pippo', 'Pippi', 'via dai', '1213224244', '5756756756868', 3);
  var_dump($pippo);

  try {
    $pippo->SetBonus(5);

  } catch (Exception $e ) {
    echo 'errore' . $e->getMessage();
  }

  var_dump($pippo);

  $pluto = new Operaio('345', 'Pluto', 'Pluti', 'piazza la pietra', 'teryryyryey', 'g9g9fi8f8d8f9f', 'Certificato Muletto Si');
  var_dump($pluto);