<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<?php include "header.php";?>
<form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"placeholder="username">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="email">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" name="register" value="Register">
   </form>
</body>
</html>
