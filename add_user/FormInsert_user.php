<!DOCTYPE html>

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
    <h1> สมัครสมาชิก</h1>
    <form action = "InsertForm_user.php" id ="formUser" method = "post" >
        <fieldset>
            <legend>บันทึกข้อมูล</legend>
            
                        <label>User_name : </label>
                        <input type="text" name = "em_User" size = "20" placeholder="User_Name" required />
                    
                        <label>Password : </label>
                        <input type="text" name = "em_Password" size = "20" placeholder="**PassWord**" required /> 

                        <label>ชื่อ : </label>
                        <input type="text" name = "em_fname" size = "20" placeholder="ชื่อ" required />
                    
                        <label>นามสกุล: </label>
                        <input type="text" name = "em_lname" size = "20" placeholder="นามสกุล" required />
                    
                        <label>E-mail : </label>
                        <input type="text" name = "em_mail" size = "20" placeholder="xxx@gmail.com"required/>

                        <label>เบอร์โทรศัพท์มือถือ : </label>
                        <input type="text" name = "em_phone" size = "20" placeholder="0888888888"required/>
                    
                        <label>ประเภทผู้ใช้งาน : </label>
                            <select name="em_Role" required >
                                <option hidden selected> -- select an option -- </option>
                                <option value="Std" >นักศึกษา</option>
                                <option value="User" >บุคคลทั่วไป</option>
                            </select>

                        <label>Line@ : </label>
                        <input type="text" name = "em_line" size = "20" placeholder="Line_ID" required />
                    
            
            <br><br>
            <input type="submit" value="save"/>

            <a href="../Home.php"><button type="button">กลับหน้าหลัก</button></a>
        </fieldset>

        
</body>
</html>