<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beli_pulsa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $con = mysqli_connect("localhost","root","","pulsa") or die("Could not connect to the database");

$username   = "085706579632";
$apiKey   = "6135e4a3701bdd7b";
$signature  = md5($username.$apiKey.'bl');

$json = '{
            "commands" : "pricelist",
            "username" : "085706579632",
            "sign"     : "ef00f513848103219022e8d19decfca1",
            "status"   : "all"
        }';

$url = "https://testprepaid.mobilepulsa.net/v1/legacy/index";

$ch  = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);
curl_close($ch);

// print_r($data);
$x = json_decode($data);
// die;
set_time_limit(500);
foreach($x->data as $mydata){

    // echo $mydata->pulsa_price."\n";

    $insert = "INSERT INTO price_lists (pulsa_code, pulsa_op, pulsa_nominal, pulsa_price, pulsa_type, masaaktif, status) VALUES 
              ('$mydata->pulsa_code','$mydata->pulsa_op','$mydata->pulsa_nominal','$mydata->pulsa_price'+100,'$mydata->pulsa_type','$mydata->masaaktif','$mydata->status')";   
    $conn->query($insert);
}

// if ($conn->query($insert) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $insert . "<br>" . $conn->error;
// }

$conn->close();




?>