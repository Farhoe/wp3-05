<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $apal  = 100;
        $botak = 0;
        $lodHP  = 200;
        $strela = rand(0,5);
      echo "Loď nic nemá. Budem muset na ostrov. <br>";
  while ($botak < 100) {

    $botak = $botak + 10;
    $apal = $apal - 10;
    $lodHP =  $lodHP - 5*$strela;
    echo $botak . " Tolik je na Botaku. Zbytek je na Apalu :/ " . $apal . ".<br> Loď málem chcípla páč po ní začali střílet. Doufám že je všecho OK!   " . $lodHP . " HPček.<br>";
    if ($lodHP == 0) {
      echo "A je hotovo. Teďka se můžem jen modlit. ";
      break;
    }
    if ($apal == 0) {
      echo "Na Apalu už nic není! ";
    }
  }
     ?>
  </body>
</html>