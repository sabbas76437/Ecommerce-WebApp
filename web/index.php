<?php
require 'init.php';
$conn = OpenCon();
echo "Connected Successfully";


$sql ="SELECT * FROM tbl_products WHERE feature =1";
$featured =mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>

  <head>

    <title>MYRIAD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scaleable=no">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" id = "navbar">
        <div class="container">
          <a href="/web/index.php" class="navbar-brand" id= "text">MYRIAD</a>
          <ul class="nav navbar-nav">
            <!-- dropdown menu -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Products<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">FaceMask</a></li>
                <li><a href="#">soaps</a></li>
                <li><a href="#">serum</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>
    <!--inserting images-->
    <div id="background-image">
      <div id="image-1"></div>
      <div id="image-2"></div>
    </div>

    <!-- remove spaces and center products-->
<div class="col-md-2">

</div>

    <!--main product goes here-->
    <div class="col-md-8">
      <div class="row">
        <h2 class="text-center">Feauted Products</h2>
        <?php while($result = $featured->fetch_assoc()) : ?>
        <div class="col-md-3">
          <h4><?= $result['text']; ?></h4>
          <img src="<?=$result['image']; ?>" alt="<?=$result['text']; ?>" id="images" />
          <p class="list-price text-danger">List Price: <s><?=$result['list_price']; ?></s></p>
          <p class ="price">Our Price:$<?=$result['price']; ?></p>
          <button type="button" class="btn btn success" data-toggle="modal" data-target="#details-1" id="button">Details</button>
        </div>
      <?php endwhile; ?>
    </div>
        <footer class="text-center" id="footer">&copy; Copyright 2019-2020 MYRIAD</footer>

    </div>
<?php include 'details-model-greengem.php';
include 'details-model-lemongrass.php';
include 'details-model-redgem.php';
include 'details-model-serum.php';
include 'details-model-volcanicash.php';?>

  </body>
</html>
