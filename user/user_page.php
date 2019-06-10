<!DOCTYPE html>
<html lang="en">

<head>
    <!--script normal-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <!--script button-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>user_page</title>

    <style>/*style ของ Nav Bar*/
        body {margin: 0;}
        ul.topnav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        ul.topnav li {float: left;}
        ul.topnav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        ul.topnav li a:hover:not(.active) {background-color: #111;}
        ul.topnav li a.active {background-color: #4CAF50;}
        ul.topnav li.right {float: right;}
        @media screen and (max-width: 600px) {
            ul.topnav li.right, 
            ul.topnav li {float: none;}
        }
    </style>


</head>


<body >
    <!--ส่วนของ Nav Bar แถบด้านบน-->
    <ul class="topnav">
        <li><a class="active" href="../Home.php">Home</a></li>
        <li><a href="#promotion">Promotion</a></li>
        <li><a href="../shopping/list_shopping.php">My list</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact us</a></li>
        <li class="right"><a href="#logout">Log out</a></li>      
    </ul>

    <!--ส่วนของเนื้อหา ข้างใต้ Nav Bar-->
    <div style="padding:0 16px;">
        <h2>Responsive Topnav Example</h2>
        <p>This example use media queries to stack the topnav vertically when the screen size is 600px or less.</p>
        <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
        <h4>Resize the browser window to see the effect.</h4>
    </div>

    <!--ส่วนของ button-->
    <div class="container">
        <a href="check_qr.php" class="btn btn-success" role="button" aria-pressed="true">ตรวจสอบสถานะ</a>
        <button type="button" class="btn btn-danger">สั่งซ่อม</button>  
    </div>


</body>
</html>