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
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Prices</a>
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
      <h1>Product 1</h1>
      <!--
      <h5 class="w3-padding-32">
      Are you bored selling the same chocolates that are found in any store? Then come down to Luonnonvoima, we take pleasure in introducing to you our mushroom chocolate snacks. These are unique products that are made from functional mushroom powder ingredients to maintain the health of the body and mind.
      </h5>
      -->
      <p class="w3-text-grey">4-8-2023
      <p>Dear Customer,<br><br>
Are you bored selling the same chocolates that are found in any store? Then come down to Luonnonvoima, we take pleasure in introducing to you our mushroom chocolate snacks. These are unique products that are made from functional mushroom powder ingredients to maintain the health of the body and mind.<br><br>
Our mushroom chocolate bar is a delicious treat that combines the rich flavor of chocolate with the nutritious health benefits of mushrooms. It's gluten-free and eco-friendly. Perfect for anyone looking for a healthier alternative to traditional chocolate bars. <br><br>
Our research indicates that our business is unique and will offer a significant advantage over all available similar and competing products. We have tested the product and it has passed the relevant certifications. We have not received any complaints about side effects.<br>
Every snack of ours will help mitigate health conditions such as:<br>
● Alzheimer's<br>
● Heart disease<br>
● Cancer<br>
● Diabetes</p>
</p>
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
        <img src="productinfo2.png">
    </div>
    <div class="w3-twothird">
      <h1>Product 2</h1>
      <h5 class="w3-padding-32">We have made our treats even healthier</h5>
      <p class="w3-text-grey"><p>In a world where health-consciousness is on the rise, the chocolate industry has been under increasing pressure to offer healthier options for consumers. In response to this demand, a new product has been introduced: a healthier version of our popular chocolate mushroom bar.</p>

<p>The new chocolate mushroom bar boasts a much healthier recipe and has been reimagined with a dark chocolate base, brown sugar, plant-based milk alternatives. The new recipe has significantly reduced the sugar content while also increasing the nutritional value of the bar.</p>

<p>The new chocolate mushroom bar is not only a healthier option for consumers but also maintains its signature delicious taste. With its high-quality ingredients and delicious taste, it's sure to become a new favorite for health-conscious chocolate choice everywhere.</p></p>
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