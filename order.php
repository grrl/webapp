<?php
/*
$servername = "localhost";
//$username = "id20561241_kamisama_user";
//$password = "q~?5g]Z8R|F?5)Rx";
$username = "root";
$password = "";
$database = "id20561241_kamisama";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
echo "<script>alert('Success!');</script>";
*/

/*
$name = $email = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
*/
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


.thumbnail { 
top:-50px; 
left:-35px; 
display:block; 
z-index:999; 
cursor: pointer; 
-webkit-transition-property: all; 
-webkit-transition-duration: 0.3s; 
-webkit-transition-timing-function: ease; 
} 

/*change the number below to scale to the appropriate size*/ 
.thumbnail:hover { 
transform: scale(3.5); 
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">

var regular = 1;
var special = 1;

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

truncateDecimals = function (number, digits) {
    var multiplier = Math.pow(10, digits),
        adjustedNum = number * multiplier,
        truncatedNum = Math[adjustedNum < 0 ? 'ceil' : 'floor'](adjustedNum);

    return truncatedNum / multiplier;
};

function reduce_value(selection) {

  if (selection === "regular") {
   if (regular > 0){
      regular--;
      //document.getElementById("reg").value = "　" + regular + "　";
      document.getElementById("reg").value = regular;
      //document.getElementById("reg").innerHTML = regular;
   }
  }
  else {
    if (special > 0){
      special--;
      //document.getElementById("spe").value = "　" + special + "　";
      document.getElementById("spe").value = special;
      //document.getElementById("spe").innerHTML = special;
    }
  }

  if (regular == "0")
    document.getElementById("regulartotal").innerHTML = "　";
  else
    document.getElementById("regulartotal").innerHTML = numberWithCommas(truncateDecimals(regular * 736.8, 2));

  if (special == "0")
    document.getElementById("specialtotal").innerHTML = "　";
  else
    document.getElementById("specialtotal").innerHTML = numberWithCommas(truncateDecimals(special * 840, 2));

  document.getElementById("regularcount").innerHTML = regular + "x";
  document.getElementById("specialcount").innerHTML = special + "x";

  document.getElementsByName("specialfield").value = special;
  document.getElementsByName("regularfield").value = regular;
  
  //calculate order total
  var totalvalue = regular * 736.8 + special * 840;

  if (totalvalue == 0){
    document.getElementById("placeorder").disabled = true;
    document.getElementById("finalcost").innerHTML = "";
    document.getElementById("emptymessage").innerHTML = "Shopping cart is empty";
    emptymessage
  }
  else{
    document.getElementById("emptymessage").innerHTML = "";
    document.getElementById("placeorder").disabled = false;
    document.getElementById("finalcost").innerHTML =  numberWithCommas(truncateDecimals(totalvalue, 2));
  }
}

function increase_value(selection) {

  if (selection === "regular") {
   if (regular < 10){
      regular++;
      //document.getElementById("reg").value = "　" + regular + "　";
      document.getElementById("reg").value = regular;
      //document.getElementById("reg").innerHTML = regular;
   }
  }
  else {
  if (special < 10){
      special++;
      document.getElementById("spe").value = special;
      //document.getElementById("spe").innerHTML = special;
      //document.getElementById("spe").value = "　" + special + "　";
   }
  }
  
  if (regular == "0")
    document.getElementById("regulartotal").innerHTML = "　";
  else
    document.getElementById("regulartotal").innerHTML = numberWithCommas(truncateDecimals(regular * 736.8, 2));

  if (special == "0")
    document.getElementById("specialtotal").innerHTML = "　";
  else
    document.getElementById("specialtotal").innerHTML = numberWithCommas(truncateDecimals(special * 840, 2));

  document.getElementById("regularcount").innerHTML = regular + "x";
  document.getElementById("specialcount").innerHTML = special + "x";

  document.getElementsByName("specialfield").value = special;
  document.getElementsByName("regularfield").value = regular;

  var totalvalue = regular * 736.8 + special * 840;
  //calculate order total

  if (totalvalue == 0){
    document.getElementById("placeorder").disabled = true;
    document.getElementById("finalcost").innerHTML = "";
    document.getElementById("emptymessage").innerHTML = "Shopping cart is empty";
    emptymessage
  }
  else{
    document.getElementById("emptymessage").innerHTML = "";
    document.getElementById("placeorder").disabled = false;
    document.getElementById("finalcost").innerHTML =  numberWithCommas(truncateDecimals(totalvalue, 2));
  }

}

var authors = [];


function author_function() {

    var word = document.getElementById("author").value;


    if (word == "") {
        document.getElementById("author").style.borderColor = "red";
        return;
    }
    else {
        //var document_string = "Added " + word;
        //document.title = document_string;
        document.getElementById("author").style.borderColor = "rgb(221, 221, 221)";
        document.getElementById("authors").style.color = "#000000";
    }

    authors.push(word);

    var keywords_text = "";
    var length = authors.length;
    for (let index = 0; index < authors.length; ++index) {
        const element = authors[index];
        if (length == 1 || index == length - 1) {
            keywords_text += element;
        }
        else {
            keywords_text += element + ", ";
        }
    }
    document.getElementById("authors").value = keywords_text;
    document.getElementById("author").value = "";
}

function author_remove() {

    if (authors.length > 0)
        document.title = "Removed " + authors.pop();

    //keywords.pop();


    if (authors.length == 0) {
        document.getElementById("authors").style.color = "#6c757d";
        document.getElementById("authors").value = "Add a group member";
    }
    else {
        var keywords_text = "";

        for (let index = 0; index < authors.length; ++index) {
            const element = authors[index];
            if (authors.length == 1 || index == authors.length - 1) {
                keywords_text += element;
            }
            else {
                keywords_text += element + ", ";
            }
        }
        document.getElementById("authors").value = keywords_text;

    }
}

function post_form() {

  console.log("posting form");

 let group = authors.toString();
 group.replace(/[^a-zA-Z0-9 ]/g, '');

 let company = document.getElementById("companyname").value;
 //company.replaceAll(",", " ");
 company.replace(/[^a-zA-Z0-9 ]/g, '');

 let country = document.getElementById("countrylist").value;
 country.replace(/[^a-zA-Z0-9 ]/g, '');
 
 let remarks = document.getElementById("remarks").value;
 remarks.replace(/[^a-zA-Z0-9 ]/g, '');

 console.log("ajax starting");
 console.log(group);
 console.log(company);
 console.log(country);
 console.log(remarks);

$.ajax({
  type: "post",
  url: "process.php",
  data: 
  {  
    'group' : group,
    'company' : company,
    'country' : country,
    'comment' : remarks,
    'regular' : regular,
    //'regularamount' : truncateDecimals(regular * 736.8,2),
    'special' : special
    //'specialamount' : truncateDecimals(special * 840,2),
    //'total' : truncateDecimals(special * 840 + regular * 736.8,2)

  },
  cache:false,
  success: function (data) 
  {
    //console.log("success");
    console.log("data " + data)
    //window.location='success.php';
  }
});

}

</script>
</head>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-sand w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="connect.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Order</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Products</a>
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
      <h1>Order here</h1>
      <h2>luonnonvoima order form</h2>
<form method="post" action="process.php">
    
  Full name: <input type="text" name="name" id="author" style="width:270px;">
  <p>
  <button type="button" id="clear_button" style="width:60px;font-size:10px;font-weight: bold;margin-left:20px" onclick="author_remove()">Remove last</button>
  <button type="button" id="add_button" style="width:60px;font-size:10px;font-weight: bold;margin-left: 175px;" onclick="author_function()">Add new</button>
  </p>
  <label for="authors">Group names:</label>
  <br>
  <input type="text" name="Text1" id="authors" style="width:340px;"disabled>
  <br></br>  
  Company: <input type="text" id="companyname" name="company" style="width:271px;">
  <br></br>
  Country: &nbsp;&nbsp;
  <input list="countries" name="countries" id="countrylist" style="width:271px;">
  <datalist id="countries">
  <option value="Germany"></option>
  <option value="Finland"></option>
  </datalist>
  <p>
  Order regular:
  <button type="button" id="regular_reduce" style="width:50px;font-size:20px;font-weight: bold;" onclick="reduce_value('regular')">-</button>
  <input id="reg" value="1" style="width:30px;text-align: center;font-weight:bold;" disabled>
  <button type="button" id="regular_increase" style="width:50px;font-size:20px;font-weight: bold;" onclick="increase_value('regular')">+</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="snackreg.png" class="thumbnail" height="50" width="60" style="display: inline-block;" /> 
  </p>
  <p>
  Order special:&nbsp;
  <button type="button" id="special_reduce" style="width:50px;font-size:20px;font-weight: bold;" onclick="reduce_value('special')">-</button>
  <input id="spe" value="1" type="text" style="width:30px;text-align: center;font-weight:bold;" disabled>
  <button type="button" id="special_increase" style="width:50px;font-size:20px;font-weight: bold;" onclick="increase_value('special')">+</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="snackspe.png" class="thumbnail" height="50" width="60" style="display: inline-block;" /> 
  </p>
  Remarks:
  <br>
  <input type="text" name="comment" id="remarks" style="width:340px;">
  <table style="width:57%;table-layout:fixed;">
  <p style="font-size: 20px;">Shopping cart</p>
  <tr id="regularsubtotal" style="font-size: 20px; font-weight: normal;">
    <th>Regular</th>
    <th id="regularcount">1x</th>
    <th id="regulartotal" style="padding:5px;">736.8</th>
  </tr>
  <tr id="specialsubtotal" style="font-size: 20px; font-weight: normal;">
    <th>Special</th>
    <th id="specialcount">1x</th>
    <th id="specialtotal" style="padding:5px;">840</th>
  </tr>
  <tr style="font-size: 20px;">
    <th id="emptymessage" style="white-space: nowrap;padding-left:100px;padding-bottom:0px;"></th>
    <th></th>
    <th id="finalcost" style="padding:0px;padding-bottom:1px;">1,576.8</th>
  </tr>
</table>
<br>
<input type="submit" id="placeorder" name="submit" value="Place order">  
</form>
      <p class="w3-text-grey">No refunds. All sales are final.</p>
    </div>

    <div class="w3-third w3-center">
      <!--<img src="https://t3.ftcdn.net/jpg/01/73/71/14/360_F_173711487_qbRZkGHv1AD0y14x0jmV12F8G1dxcUbJ.jpg">-->
      <!--<i class="fa fa-anchor w3-padding-64 w3-text-red"></i>-->
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