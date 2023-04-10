<?php


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
    <a href="product.php" class="w3-bar-item w3-button w3-padding-large w3-white">Products</a>
    <a href="price.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Prices</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Video</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- First Grid -->

<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>"ExTrA" Special edition</h1>
      <p class="w3-text-grey">
      <p>The ExTrA Mushroom Chocolate Bar is a delectable and wholesome treat that has a potent punch for people who want a bigger dose of the positive things that come from mushrooms.<br>
This chocolate bar is a great option for those wishing to strengthen their immune system and general health because it contains even more mushrooms than our ordinary mushroom chocolate bar.<br><br>
The ExTrA mushroom chocolate bar is the ideal choice for individuals who want to indulge in something sweet and healthy at the same time because it has a rich, chocolatey flavor with a more pronounced mushroom taste.<br>
This chocolate bar is the ideal option for a guilt-free snack or a nutritious dessert because it delivers a blast of rich flavors and nutrients with every bite.
</p>
    </div>

    <div class="w3-third w3-center">
      <img src="productinfo.png">
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
        <img src="regular.png">
    </div>
    <div class="w3-twothird">
      <h1>Classic Regular</h1>
      <p class="w3-text-grey"><p>Enjoy the decadent and wholesome Regular Mushroom Chocolate Bar, a delectable treat for all chocolate connoisseurs.<br>
This chocolate bar is the ideal combination of flavor and health because it is made with premium cocoa and infused with the goodness of mushrooms.<br><br>
The regular mushroom chocolate bar features a balanced mix of mushrooms and cocoa, providing you with a delightful experience with every bite.<br>
Whether you're looking for a snack to satisfy your sweet cravings or a healthy pick-me-up, this mushroom chocolate bar is the perfect choice.</p>
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