<?php

session_start();

$date = new DateTimeImmutable();
//echo date_timestamp_get($date);
$time_stamp = date_timestamp_get($date);

//echo $time_stamp;
$ip_address = $_SERVER['REMOTE_ADDR'];
//echo " x ";
//echo $ip_address;
$_SESSION['username'] = $ip_address;

//$user = $_SESSION['username'];

if(!isset($_SESSION['username'])){
   die(header("location: 404.php"));
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "id20561241_kamisama";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$group;
$company;
$country;
$comment;
$regular;
$special;

foreach ($_POST as $param_name => $param_val) {

    switch ($param_name){

        case "group":
        $group = $param_val;
        break;
        case "company":
        $company = $param_val;
        break;
        case "country":
        $country = $param_val;
        break;
        case "comment":
        $comment = $param_val;
        break;
        case "regular":
        $regular = $param_val;
        break;
        case "special":
        $special = $param_val;
        break;
    }
}

$basictotal = $regular * 736.8;
$specialtotal = $special * 840;
$total = $basictotal + $specialtotal;
//print receipt for order

$sql = "INSERT INTO orders (orderid, timestamp, ip, names, company, country, comment, amountbasic, basictotal, amountspecial, specialtotal, total)
VALUES (default," . $time_stamp . ",'$ip_address' , '$group' , '$company' , '$country'
  , '$comment' ," . $regular . "," . $basictotal . "," .
   $special . "," . $specialtotal . "," . $total . ")";


//$sql = "INSERT INTO orders (orderid) VALUES (0)";

//$sql = "INSERT INTO order (ip) VALUES (0)";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
}

$orderid = mysqli_insert_id($conn);

//echo " ";
//echo $sql;
//$_SESSION['message']="You are now logged in"; 
//$_SESSION['username']=$username;
$conn->close();




?>