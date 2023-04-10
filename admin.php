<?php
if(!isset($_SESSION['admin'])){
    die(header("location: login.php"));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>luonnonvoima</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-sand w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="order.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Order</a>
    <a href="product.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Products</a>
    <a href="price.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Prices</a>
    <a href="video.php" class="w3-bar-item w3-button w3-padding-large w3-white">Video</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="order.php" class="w3-bar-item w3-button w3-padding-large">Order</a>
    <a href="product.php" class="w3-bar-item w3-button w3-padding-large">Products</a>
    <a href="price.php" class="w3-bar-item w3-button w3-padding-large">Prices</a>
    <a href="video.php" class="w3-bar-item w3-button w3-padding-large">Video</a>
  </div>
</div>

<!-- First Grid -->

<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Video</h1>
      <p class="w3-text-grey">
      <p>
      Luonnonvoima product video
      </p>
    </div>
    <div class="w3-third w3-center">
    
    <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "id20561241_kamisama";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT * FROM `orders`";

        $result = mysqli_query($conn, $sql);

        echo '<table class="table">';
        echo '<h2>Orders</h2>';
        echo '<tr class="table">';
        echo '<th class="table">orderid</th>';
        echo '<th class="table">timestamp</th>';
        echo '<th class="table">ip</th>';
        echo '<th class="table">device</th>';
        echo '<th class="table">names</th>';
        echo '<th class="table">company</th>';
        echo '<th class="table">country</th>';
        echo '<th class="table">comment</th>';
        echo '<th class="table">amountbasic</th>';
        echo '<th class="table">basictotal</th>';
        echo '<th class="table">amountspecial</th>';
        echo '<th class="table">specialtotal</th>';
        echo '<th class="table">total</th>';
        echo '</tr>';

        while($row = $result->fetch_row())
        {
            echo '<tr class="table">';
            echo '<th class="table">' . $row['orderid'] . '</th>';
            echo '<th class="table">' . $row['timestamp'] . '</th>';
            echo '<th class="table">' . $row['ip'] . '</th>';
            echo '<th class="table">' . $row['device'] . '</th>'; 
            echo '<th class="table">' . $row['names'] . '</th>';
            echo '<th class="table">' . $row['company'] . '</th>';
            echo '<th class="table">' . $row['country'] . '</th>';
            echo '<th class="table">' . $row['comment'] . '</th>';
            echo '<th class="table">' . $row['amountbasic'] . '</th>';
            echo '<th class="table">' . $row['basictotal'] . '</th>';
            echo '<th class="table">' . $row['amountspecial'] . '</th>';
            echo '<th class="table">' . $row['specialtotal'] . '</th>';
            echo '<th class="table">' . $row['total'] . '</th>';
            echo '</tr>';
        }
        echo '</table>';

        $conn->close();
    ?>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: functional mushrooms for life</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <!--<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>-->
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>