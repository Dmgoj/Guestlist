

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php include "header.php";?>
<form action="index.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="email">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" name="login" value="Login">
   </form>
</form>
</body>
</html>