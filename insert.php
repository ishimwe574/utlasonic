<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ishimwe";
$conn=mysqli_connect("localhost", "root", "", "ishimwe");
if (!$conn) {
    echo "Connection failed: " ;
} else {
    echo "Connected successfully";
}
$data = json_decode(file_get_contents("php://input"), true);
if($data){
    $distance=$data['distance'];
    $insert=mysqli_query($conn, "INSERT INTO pote_data(distance) VALUES ('$distance')");
    if (!$insert) {
        echo "data failed to insert " ;
    } else {
        echo "Data inserted successfully";
    }
}

?>