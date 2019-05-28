<!DOCTYPE html>
<?php   
 session_start();
 if (!isset($_SESSION["User_id"])){
 
    Header("Location:Login.php");
    exit();
  }
?>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บันทึกข้อมูล</title>
    <style>
    body{
        background-color:#000000;
        }
        label{
            color:#FFFF66;
        }
        fieldset{
            text-align: center;
            color:#FF0066
        }
        h1{
            color:#66FF99;
            text-align: center;
        }
        legend{
            color:#FFFF66;
        }
    </style>
    
</head>
<body>
    <h1> เพิ่มข้อมูลการซ่อม</h1>
    <form action = "Insert_data.php" id ="form_data" method = "post">
        <fieldset>
            <legend>บันทึกข้อมูล</legend>
            
                        <label>User_name : </label>
                        <input type="text" name = "em_User" size = "20" placeholder="User_Name" required />

                        <label>Serial Number : </label>
                        <input type="text" name = "em_Serial" size = "20" placeholder="Serial Number" required />
                    
                        
            
            <br><br>
            <input type="submit" value="save"/>

            <a href="admin_page.php"><button type="button">กลับ</button></a>
        </fieldset>

        
</body>
</html>