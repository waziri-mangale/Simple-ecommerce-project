<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shoe Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <?php include './Spartials/db.php'  ?>
   <?php include './Spartials/header.php'  ?>
   <h1 class="text-center text-success mb-4 mt-5">The Best Shoe Platform</h1>
   <div class="container">
    <div class="row">
      <?php
$sql = "select * from shoetb";
$result = mysqli_query($con,$sql);
if($result){
//  $row = mysqli_fetch_assoc($result);
 // echo $row['s_name'];

 while($row = mysqli_fetch_assoc($result)){
  $s_id = $row['s_id'];
  $s_name = $row['s_name'];
  $s_desc = $row['s_desc'];
  $s_price = $row['s_price'];
  $s_image = $row['s_image'];

  echo '<div class="col-md-4 col-sm-6-xm-12 mb-5">
  <div class="card" style="width : 18rem; object-fit:contain">
<img src='.$s_image.' class="card-img-top" alt="card image cap">
<div class="card-body">
<h5 class="card-title">'.$s_name.'</h5>
<p class="card-text">'.substr($s_desc,0,55).'....</p>
<p>'.$s_price.'/-</P>
<a href="/shoe/spartials/details.php?details_id='.$s_id.'" class="btn btn-primary">Buy Now</a>
</div>
</div>
</div>';
 }
}

?>
      

  </div>
   </div>
  </body>
</html>