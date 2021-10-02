<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestlist</title>
</head>
<body>
<!-- Lista forma 
 je upisan na listu!!! </br>
!-->
<form action="/index.php" method="post">
IME:
<input type="text" id="fname" name="fname" placeholder="Ime" ></br>
PREZIME:    
<input type="text" id="lname" name="lname" placeholder="Prezime" ><br>
SPOL:    

<input type="radio" name="spol" id="spol" value="M">
<label for="spol">Muško</label></br>

<input type="radio" name="spol" id="spol" value="Ž">
<label for="spol">Žensko</label></br>
    <input type="submit" name="submit" value="Prijavi">
 
</form>



</body>
</html>