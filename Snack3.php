<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $arrFilm = [
  
      '21/018/2013' => [
          [
              'title' => "The Conjuring - L'evocazione",
              'author' => 'James Wan',
              'text' => 'Nella nuova casa in cui si trasferisce la numerosa famiglia Perron si verificano strane apparizioni e rumori inquietanti fino a vere e proprie manifestazioni paranormali.'
          ],
          [
              'title' => 'The Conjuring - Il caso Enfield',
              'author' => 'James Wan',
              'text' => 'Lorraine e Ed Warren, in una delle loro indagini paranormali più terrificanti, si recano a nord di Londra per aiutare una madre che alleva quattro bambini da sola in una casa infestata da spiriti maligni.'
          ],
      ],
      '02/10/2014' => [
          [
              'title' => 'Annabelle',
              'author' => 'James Wan',
              'text' => "I membri di una setta satanica assaltano la casa di una pacifica coppia, John e Mia, e, invocando un demone, trasformano una bambola d'epoca in un oggetto capace di diffondere il male supremo."
          ]
      ],
      '03/06/2021' => [
          [
              'title' => 'The Conjuring – Per ordine del diavolo',
              'author' => 'James Wan',
              'text' => "Narra un'agghiacciante storia di terrore, omicidio e male oscuro, che ha sconvolto persino gli investigatori del paranormale Ed e Lorraine Warren. Uno dei casi più sensazionali da loro affrontati, inizia con la lotta per l'anima di un ragazzo, che ha portato i due demonologi a cose mai viste prima, segnando la prima volta nella storia degli Stati Uniti in cui un sospetto omicida avrebbe reclamato la sua possessione demoniaca come difesa."
          ],
          [
              'title' => 'Halloween Kills',
              'author' => 'John Carpenter',
              'text' => "Sono passati 40 anni da quando Laurie Strode è sopravvissuta agli assalti dell'assassino Michael Myers durante la notte di Halloween. Quando questi fugge dal carcere, la donna affronta una terrificante resa dei conti."
          ],
          [
              'title' => 'A Quiet Place II',
              'author' => 'Scott Beck',
              'text' => "La famiglia Abbott affronta i terrori del mondo esterno. Costretti ad avventurarsi nell'ignoto, i membri della famiglia si rendono conto che le creature che cacciano dal suono non sono le uniche minacce che si nascondono oltre il sentiero di sabbia."
          ]
      ],
  ];

  foreach ($arrFilm as $key => $film) {
      foreach($film as $event){
?>
    <h2><?php echo $key?></h2>
    <h1><?php echo $event['title']?></h1>
    <h3>Autore: <br><?php echo $event['author']?></h3>
    <p>Trama: <br> <?php echo $event['text']?></p> 

    <hr>      
    
 <?php }} ?>

</body>
</html>