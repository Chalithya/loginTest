<?php
$serverName = "localhost";
$username = "root";
$password= "";
$databaseName = "react_php";
$conn = mysqli_connect($serverName,$username, $password, $databaseName);
$query = "INSERT INTO react_php (username) VALUSE ('THis is just a test')";

$recText = $_POST['username'];

if(mysqli_query($conn, $query)){
    echo "Data has inserted";
}
else{
    echo "Error! ";
}