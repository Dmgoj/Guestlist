<?php
    

class User{
    public $database;
    
    public function __construct(Database $pdo){
        $this->database=$pdo;
        
    }

    // Validation

    // Register user
    public function register(){
        
        if(isset($_POST['register'])){
            

        $username=filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password=hash('sha256',$_POST['password']);
        $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
                 
        $this->database->pdo->query("INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')");
        Header("Location: login.php");
        }
    }
        
    
    // Login
    public function login(){

        if (isset($_POST['login'])){
            $email=$_POST['email'];
            $password=hash('sha256',$_POST['password']);
            $stmt=$this->database->pdo->query("SELECT username FROM users WHERE email='$email' AND password='$password' ");
            $user=$stmt->fetchColumn();
            $_SESSION['user']=$user;
            if($_SESSION['user']){
            
            header("Location:list.view.php");
            }else{
                
                header("Location:login.php");
echo "<h1>Wrong email or password!</h1>"; 
            }
                
           }
        }
    


    

}
?>