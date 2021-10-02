<?php
/*
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$spol=$_POST['spol'];

$user=$firstname. ' ' . $lastname.'('.$spol.')';
*/
require 'functions.php';
// Database connection

$servername = "localhost";
$username = "root";
$password = "";

//$conn = new PDO("mysql:host=$servername;dbname=Guestlist;charset=utf8mb4", $username, $password);

if(isset($_POST['submit'])){

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$spol=$_POST['spol'];

$user=$firstname. ' ' . $lastname.'('.$spol.')';
try {
  $conn = new PDO("mysql:host=$servername;dbname=Guestlist;charset=utf8mb4", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully </br>";
  

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn->query("INSERT INTO guestlist (first_name, last_name, sex) VALUES ('$firstname', '$lastname', '$spol')");



// redirect na view lista
header("Location:lista.view.php");

}

// Select All za prikaz
try {
    $conn =new PDO("mysql:host=$servername;dbname=Guestlist;charset=utf8mb4", $username, $password);
    //set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
     
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  
$stmt=$conn->query('SELECT * FROM guestlist');


$results=$stmt->fetchAll(PDO::FETCH_ASSOC);







// prikaz liste





require 'view.php';
?>