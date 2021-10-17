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
<h1>Guest List</h1>
   
   <table>
       
       <th>ID</th><th>NAME</th><th>LAST NAME</th><th>GENDER</th><th>ENTRY TIME</th>
       <?php foreach ($results as $result) { ?>
        <tr>
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['first_name']; ?></td>
        <td><?php echo $result['last_name']; ?></td>
        <td><?php echo $result['sex']; ?></td>
        <td><?php echo $result['date']; ?></td> 
        <td><form action="index.php" method="post"><button type="submit" name="delete" value="<?=$result['id']?>" >DELETE</button><input type="checkbox" name="del_checkbox"></td>
        
        </form>
        <tr>
           
        <?php } ?>
   </table>

  
</body>
</html>

