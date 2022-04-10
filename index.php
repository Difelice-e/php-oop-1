<?php
require_once __DIR__.'/movie.php';

$prova = new movie(
    'example.jpg',
    'prova',
    'it',
    'prova',
    '01 gennaio 2000'
  );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OOP-1</title>
</head>
<body>
  <div class="container">
    <div class="card_wrapper">
      <figure>
        <img class="card_img" src="<?php echo $prova->poster ?>" alt="">
      </figure>
      
      <h3 class="card-title">
        <?php echo $prova->title ?>
      </h3>

      <div class="card_info">
        <?php 
         echo $prova->language     
         echo $prova->director     
         echo $prova->releaseDate 
        ?>    
      </div>
    </div>

  </div>
</body>
</html>

