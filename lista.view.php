<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista gostiju</title>
</head>
<body>
    <?php require 'index.php'; ?>
   <table>
       <th>ID</th><th>IME</th><th>PREZIME</th><th>SPOL</th><th>VRIJEME PRIJAVE</th>
       <?php foreach ($results as $result) { ?>
        <tr>
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['first_name']; ?></td>
        <td><?php echo $result['last_name']; ?></td>
        <td><?php echo $result['sex']; ?></td>
        <td><?php echo $result['date']; ?></td> 
        <tr>
        <?php } ?>
   </table>
</body>
</html>

