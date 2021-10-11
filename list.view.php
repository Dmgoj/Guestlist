<?php
ob_start();
require 'index.php'; 
if(!isset($_SESSION['user'])){
        header("Location:login.php");
        ob_end_flush(); 
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest list</title>
</head>
<body>

   
   <table>
       
       <th>ID</th><th>NAME</th><th>LAST NAME</th><th>GENDER</th><th>ENTRY TIME</th>
       <?php foreach ($results as $result) { ?>
        <tr>
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['first_name']; ?></td>
        <td><?php echo $result['last_name']; ?></td>
        <td><?php echo $result['sex']; ?></td>
        <td><?php echo $result['date']; ?></td> 
        <td><form action="list.view.php?id=<?=$result['id']?>" method="get"><button type="submit" >DELETE</button></form></td>
        <td><a href="list.view.php?id=<?=$result['id']?>">DEL</a></td> 
        <tr>
           
        <?php } ?>
   </table>

  
</body>
</html>
