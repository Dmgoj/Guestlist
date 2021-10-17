<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestlist</title>
</head>
<body>
   <?php include "header.php"; ?>

<h1>Insert guest</h1>
<form action="/index.php" method="post">
FIRST NAME:
<input type="text" id="fname" name="fname" placeholder="First name" ></br>
LAST NAME:    
<input type="text" id="lname" name="lname" placeholder="Last name" ><br>
GENDER:    
<input type="radio" name="gender" id="gender" value="M">
<label for="spol">Male</label>

<input type="radio" name="gender" id="gender" value="W">
<label for="gender">Female</label></br>
    <input type="submit" name="submit" value="Submit">
    <a href="list.view.php">Show list</a>
</form>
<hr>



</body>
</html>