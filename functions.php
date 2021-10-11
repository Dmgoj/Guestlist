<?php

// Database connection
function connectDb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
       return $pdo=new PDO("mysql:host=$servername;dbname=Guestlist;charset=utf8mb4", $username, $password);
        // set the PDO error mode to exception
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully </br>";
        
      
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

}


// Insert into DB
function insertToDb($pdo){
    if(isset($_POST['submit'])){

        $firstname=$_POST['fname'];
        $lastname=$_POST['lname'];
        $spol=$_POST['spol'];
        
        $pdo->query("INSERT INTO guestlist (first_name, last_name, sex) VALUES ('$firstname', '$lastname', '$spol')");
        
        // Redirect to View List
        header("Location:list.view.php");
        $pdo=null;
    }
}

// Select All From DB
function selectAll(){
        
    $stmt=$pdo->query('SELECT * FROM guestlist');

    
   return $stmt->fetchAll(PDO::FETCH_ASSOC);

}




?>