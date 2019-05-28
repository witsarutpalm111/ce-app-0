<!DOCTYPE html>
<html lang="en">
    <?php
     $palm = 0;
     if(isset($_GET['AAA'])){
         $palm = $_GET['AAA'];
     }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="check_qr.php">
    <input type="text" value="<?php echo ($palm) ?>">
    <input type="submit" value ="submit">

    </form>
   
    
</body>
</html>