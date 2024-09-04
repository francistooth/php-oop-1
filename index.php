<?php
require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/Model/Movie.php';

?>


<!DOCTYPE html>
<html lang="en">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.css' integrity='sha512-hhSu9overYjKfSjPCtJW3688VHkfBh+W1pR5Mysll91bOJwGjYntytGTtVXb2aisFOaYXXDrO38NKXDRPJWu7A==' crossorigin='anonymous'/>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
</head>
<body>

<div class="container my-5">
  <h1>Lista Film:</h1>

  <div class="d-flex">
    <?php foreach($db as $movie): ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $movie->getTitle()  ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Duration: <?php echo $movie->getDuration() ?> min</h6>
          <!-- Nullsafe oparator (?): se address è null non restituisce un errore  -->
          <h4>Genre: <?php echo $movie->getGenre() ?></h4>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
  
</div>



  
</body>
</html>