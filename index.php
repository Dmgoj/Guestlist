<?php
require 'Init.php';

//require 'functions.php';
$connection = new Database();
$connection->connectDb();


// Insert into Database
$insert=$connection->insertToDb();


// Select All 
$results=$connection->selectAll();

// Register New User
$user=new User($connection);
$user->register();

// Login
$user->login();


// Delete entry
if(!empty($_GET['id'])){
    $connection->deleteGuest($_GET['id']);
    }


    require 'view.php';

?>