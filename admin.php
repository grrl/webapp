<?php

session_start();

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
    <a href="index" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="order" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Order</a>
    <a href="product" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Products</a>
    <a href="price" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Prices</a>
    <a href="video" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Video</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="index" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="order" class="w3-bar-item w3-button w3-padding-large">Order</a>
    <a href="product" class="w3-bar-item w3-button w3-padding-large">Products</a>
    <a href="price" class="w3-bar-item w3-button w3-padding-large">Prices</a>
    <a href="video" class="w3-bar-item w3-button w3-padding-large">Video</a>
  </div>
</div>

<!-- First Grid -->

<div class="w3-row-padding w3-padding-64 w3-container">
      <h1>Orders</h1>
      <a href="logout">Log Out</a>

      <p class="w3-text-grey">
      <div style="overflow-x:auto;">

    <?php

$servername = "localhost";
$username = "u722548033_kamisama_user";
$password = "q~?5g]Z8R|F?5)Rx";
$dbname = "u722548033_kamisama";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
    <th>orderid</th>
    <th>timestamp</th>
    <th>location</th>
    <th>device</th>
    <th>names</th>
    <th>company</th>
    <th>country</th>
    <th>comment</th>
    <th>amountbasic</th>
    <th>basictotal</th>
    <th>amountspecial</th>
    <th>specialtotal</th>
    <th>total</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . 
        $row["orderid"]. "</td><td>" .
        date('m/d/Y H:i:s', $row["timestamp"])
        . "</td><td>" .
        $row["ip"]. "</td><td>" .
        $row["device"]. "</td><td>" .
        str_replace('9', ',', str_replace('-', ' ', $row['names']))
        . "</td><td>" .
        str_replace('-', ' ', $row["company"])
        . "</td><td>" .
        str_replace('-', ' ', $row["country"])
        . "</td><td>" .
        str_replace('-', ' ', $row["comment"])
        . "</td><td>" .
        $row["amountbasic"]. "</td><td>" .
        $row["basictotal"]. "</td><td>" .
        $row["amountspecial"]. "</td><td>" .
        $row["specialtotal"]. "</td><td>" .
        $row["total"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</div>
<div class="w3-third w3-center">
    

    </div>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the month: functional mushrooms for life</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
  <a href="https://www.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>

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