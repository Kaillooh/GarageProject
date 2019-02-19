<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pièces Auto</title>
  </head>
  <body>

      <?php //phpinfo(); ?>

      <?php
      $bdd = new PDO('mysql:host=localhost;dbname=PiecesAuto;charset=utf8', 'tatoufff', 'babarbabar');
      
      $serial = $_GET['id'];
      $query = "SELECT * FROM Pieces WHERE Serial LIKE '".$serial."'";

      echo($query);

      $reponse = $bdd->query($query);
      $data = $reponse->fetchAll();
      if (count($data) == 0){
        echo("Sorry, no data found for the serial ".$serial);
      }
      else {
      //echo("Matches : ".count($data));

        echo("<br/><b>ID : </b>".$data[0]["Serial"]);
        echo("<br/><b>Name : </b>".$data[0]["Name"]);
        echo("<br/><b>Mercedes serial : </b>".$data[0]["MercedesSerial"]);
        echo("<br/><b>Compatible cars : </b>".$data[0]["CompatibleModels"]);
      }
      ?>
  		
  </body>
</html> 
