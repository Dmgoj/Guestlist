<?php
require 'Database.php';
//require 'functions.php';
$connection = new Database();
$pdo=$connection->connectDb();

// Insert into Database
$insert=$connection->insertToDb($pdo);


// Select All 
$results=$connection->selectAll($pdo);

require 'view.php';
?>