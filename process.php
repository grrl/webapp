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

$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
  
// Check if the "tablet" word exists in User-Agent 
$isTab = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "tablet")); 
 
// Platform check  
$isWin = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows")); 
$isAndroid = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "android")); 
$isIPhone = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "iphone")); 
$isIPad = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "ipad")); 
$isIOS = $isIPhone || $isIPad; 
 
$typeofdevice = "";

if($isMob){ 
    if($isTab){ 
        $typeofdevice .= "Tablet Device ";
        //echo 'Using Tablet Device...'; 
    }else{ 
        $typeofdevice .= "Mobile Device ";
        //echo 'Using Mobile Device...'; 
    } 
}else{ 
    $typeofdevice .= "Desktop ";
    //echo 'Using Desktop...'; 
} 
 
if($isIOS){ 
    $typeofdevice .= "iOS";
    //echo 'iOS'; 
}elseif($isAndroid){ 
    $typeofdevice .= "ANDROID";
    //echo 'ANDROID'; 
}elseif($isWin){ 
    $typeofdevice .= "WINDOWS";
    //echo 'WINDOWS'; 
}

//$user = $_SESSION['username'];

$regular = $_POST['regular'];
$special = $_POST['special'];

if (empty($regular) && empty($special)){
    header("Location: index");
}

if(!isset($_SESSION['username'])){
   die(header("location: 404"));
}

$group = $_POST['group'];
$company = $_POST['company'];
$country = $_POST['countries'];
$comment = $_POST['comment'];

$servername = "localhost";
$username = "u722548033_kamisama_user";
$password = "q~?5g]Z8R|F?5)Rx";
$database = "u722548033_kamisama";

/*
$servername = "localhost";
$username = "root";
$password = "";
$database = "id20561241_kamisama";
*/
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*
echo $group;
echo "\n";
echo $company;
echo "\n";
echo $country;
echo "\n";
echo $comment;
echo "\n";
echo $regular;
echo "\n";
echo $special;
*/

function clean($string) {
    //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    $utf8 = array(
        '/[áàâãªä]/u'   =>   'a',
        '/[ÁÀÂÃÄ]/u'    =>   'A',
        '/[ÍÌÎÏ]/u'     =>   'I',
        '/[íìîï]/u'     =>   'i',
        '/[éèêë]/u'     =>   'e',
        '/[ÉÈÊË]/u'     =>   'E',
        '/[óòôõºö]/u'   =>   'o',
        '/[ÓÒÔÕÖ]/u'    =>   'O',
        '/[úùûü]/u'     =>   'u',
        '/[ÚÙÛÜ]/u'     =>   'U',
        '/ç/'           =>   'c',
        '/Ç/'           =>   'C',
        '/ñ/'           =>   'n',
        '/Ñ/'           =>   'N',
        '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
        '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
        '/[“”«»„]/u'    =>   ' ', // Double quote
        '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
    );

    preg_replace(array_keys($utf8), array_values($utf8), $string);
    //$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
} 



$group = str_replace(' ', '-', $group);
$group = str_replace(',', '9', $group);
$group = preg_replace('/[^A-Za-z0-9\-]/', '', $group);
$company = str_replace(' ', '-', $company);
$company = clean($company);
$country = str_replace(' ', '-', $country);
$country = clean($country);
$comment = str_replace(' ', '-', $comment);
$comment = clean($comment);
$regular = clean($regular);
$special = clean($special);

$basictotal = $regular * 736.8;
$specialtotal = $special * 840;
$total = $basictotal + $specialtotal;
//print receipt for order

$sql = "INSERT INTO orders (orderid, timestamp, ip, device, names, company, country, comment, amountbasic, basictotal, amountspecial, specialtotal, total)
VALUES (default," . $time_stamp . ",'$ip_address' , '$typeofdevice' , '$group' , '$company' , '$country'
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

$_SESSION['group'] = $group;
$_SESSION['timestamp'] = date('m/d/Y H:i:s', $time_stamp);
$_SESSION['id'] = $orderid;
$_SESSION['regular'] = $basictotal;
$_SESSION['special'] = $specialtotal;
$_SESSION['total'] = $total;

//echo " ";
//echo $sql;
//$_SESSION['message']="You are now logged in"; 
//$_SESSION['username']=$username;
$conn->close();

header("Location: success");

?>