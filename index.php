<?php
require_once __DIR__.'/movie.php';

$fast5 = new movie(
    'https://m.media-amazon.com/images/I/71R2zUzKb3L._SL1024_.jpg',
    'Fast & Furios 5',
    'EN',
    'Vin Diesel',
    '2011'
);

$fast6 = new movie(
  'https://m.media-amazon.com/images/I/71sag7gEJTL._SL1024_.jpg',
  'Fast & Furios 6',
  'EN',
  'Vin Diesel',
  '2013'
); 

$fast7 = new movie(
  'https://m.media-amazon.com/images/I/61RCCueAUjL._SL1115_.jpg',
  'Fast & Furios 7',
  'EN',
  'Vin Diesel',
  '2015'
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
        <img class="card_img" src="<?php echo $fast5->poster ?>" alt="">
      </figure>
      
      <h3 class="card-title">
        <?php echo $fast5->title ?>
      </h3>

      <div class="card_info">
        <p><?php echo $fast5->language ?></p>    
        <p><?php echo $fast5->mainActor  ?></p>   
        <p><?php echo $fast5->yearsFromRelease() ?> years ago</p>   
      </div>
    </div>

  </div>
</body>
</html>

