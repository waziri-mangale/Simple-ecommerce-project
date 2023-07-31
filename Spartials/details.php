<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shoe Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet">
    </head>
    <body>
    <?php include 'db.php'  ?>
   <?php include 'header.php'  ?>

   <?php
   $id = $_GET['details_id'];
   $sql = "select * from shoetb where s_id=$id";
   $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);
 $s_name = $row['s_name'];
 $s_desc = $row['s_desc'];
 $s_price = $row['s_price'];
 $s_image = $row['s_image'];
   ?>

<div class="jumbotron">
  <div class="container">
  <h1 class="display-4 text-center text-warning"><?php echo $s_name  ?></h1>
  <p class="lead"><?php echo $s_desc  ?></p>
  <hr class="my-4">
    <button class="btn btn drak">  <a class="btn btn-dark btn-lg" href="/shoe/index.php" role="button">Read More</a></button>

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-sm-12">
      <img src="/photos/"<?php echo $s_image?> class="img-fluid" alt="">
    </div>
      <div class="col-lg-6 col-sm-12">
        <h2 class=" text-center text-success"><?php echo $s_name  ?></h2>
  <p><?php echo $s_desc  ?></p>
  <p><strong>Price: </strong><?php echo $s_price  ?>/-</p>
  <button class="btn btn-danger">Add to Cart</button>

      </div>
  </div>
</div>

    </body>
</html>