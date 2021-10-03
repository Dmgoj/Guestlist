<?php
/*
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$spol=$_POST['spol'];

$user=$firstname. ' ' . $lastname.'('.$spol.')';
*/
require 'functions.php';

$pdo=connectDb();

// Insert into Database
$insert=insertToDb($pdo);


// Select All za prikaz
$select_all=selectAll($pdo);

require 'view.php';
?>