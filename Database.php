<?php

class Database{
    public $pdo;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    
// Database connection
public function connectDb(){
    try {
$this->pdo=new PDO("mysql:host=$this->servername;dbname=Guestlist;charset=utf8mb4", $this->username, $this->password);
        // set the PDO error mode to exception
       $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully </br>";
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
}


// Insert into DB
function insertToDb(){
    if(isset($_POST['submit'])){

        $firstname=filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
        $lastname=filter_var($_POST['lname'],FILTER_SANITIZE_STRING);
        $spol=$_POST['spol'];
        
        $this->pdo->query("INSERT INTO guestlist (first_name, last_name, sex) VALUES ('$firstname', '$lastname', '$spol')");
        
        // Redirect to View List
        header("Location:list.view.php");
        
    }
}

// Select All From DB
function selectAll(){
        
    $stmt=$this->pdo->query('SELECT * FROM guestlist');

    
   return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

// Delete Entry
function deleteGuest($id){
        $stmt=$this->pdo->query("DELETE FROM guestlist WHERE id='$id'");
        header("Refresh:0;list.view.php");
}
    
}


?>