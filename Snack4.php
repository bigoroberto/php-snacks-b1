<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>

  <?php

  function getRandomNumber($min, $max, $nItems){
    $arrNumber = []; #creo un array che andrà a contenere i miei numeri random

    //con un ciclo while dico che l'array andrà a contenere tanti numeri quanto $nItems
    while(count($arrNumber) < $nItems){
      $number = rand($min, $max);
      
      //se il numero NON è prensente lo inserisco nell'array
      if(!in_array($number, $arrNumber)){
        $arrNumber[] = $number;
      }
    }
    return $arrNumber;
  }
  var_dump(getRandomNumber(0, 100, 15));
  ?>
</body>
</html>