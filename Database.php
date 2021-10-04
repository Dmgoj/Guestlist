<?php

class Database{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    
    // Database connection
public function connectDb(){
    
    
    try {
       return $pdo=new PDO("mysql:host=$this->servername;dbname=Guestlist;charset=utf8mb4", $this->username, $this->password);
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
        header("Location:lista.view.php");
        
    }
}

// Select All From DB
function selectAll($pdo){
        
    $stmt=$pdo->query('SELECT * FROM guestlist');

    
   return $stmt->fetchAll(PDO::FETCH_ASSOC);

}
}

?>