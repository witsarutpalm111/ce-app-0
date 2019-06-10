<!DOCTYPE html>
<html lang="en">

<head>
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
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <style>
        label {
            color: #FFFF66;
        }

        fieldset {
            text-align: center;
            color: #FF0066
        }

        h1 {
            color: whitesmoke;
            text-align: center;
        }

        legend {
            color: whitesmoke;
        }
    </style>

    <style type="text/css">
        html,
        body {
            overflow: hidden;  /* เอาscrollup-down ออก */
        }        
    </style>

    <style>
        #blurbox {
            width: 400px;
            padding: 0px;
            margin: 15px;
        }
    </style>

</head>

<body style="background-image: url(../BG/wall3.jpg); background-repeat: no-repeat;background-size:100%;">
    <div class="container h-90">

        <div class="row mb-3 mt-2"
            style="background-image: url(../BG/123.jpg); background-repeat: no-repeat; background-position: center ;background-size:79%;">
            <div class="col-1"></div>
            <div class="col-5">

                <form action="InsertForm_user.php" id="formUser" method="post">
                    <div class="container h-100" style="min-height:93vh;">
                        <div id="blurbox" class="card mt-4 mb-1" style="background-color:#66666688"><br>

                            <h1>Register</h1>
                            <legend id="p1" style="text-align:center; color:white;"></legend>
                            <div class="row">
                                <div class="column">
                                    <div style="text-align: center;">


                                        <div class="input-group mb-3 ml-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Username</span>
                                            </div>
                                            <input type="text" class="form-control  mr-4" placeholder="Username"
                                                aria-label="Username" aria-describedby="basic-addon1" name="em_User">
                                        </div>


                                        <div class="input-group mb-3 ml-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Password</span>
                                            </div>
                                            <input type="password" class="form-control  mr-4" placeholder="Password"
                                                aria-label="Password" aria-describedby="basic-addon1" name="em_Password">
                                        </div>


                                        <div class="input-group mb-3 ml-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Name</span>
                                            </div>
                                            <input type="text" class="form-control  mr-4" placeholder="Name"
                                                aria-label="Name" aria-describedby="basic-addon1" name="em_fname">
                                        </div>


                                        <div class="input-group mb-3 ml-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Surname</span>
                                            </div>
                                            <input type="text" class="form-control  mr-4" placeholder="Surname"
                                                aria-label="Surname" aria-describedby="basic-addon1" name="em_lname">
                                        </div>


                                        <div class="input-group mb-3 ml-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">E-mail</span>
                                            </div>
                                            <input type="text" class="form-control  mr-4" placeholder="E-mail"
                                                aria-label="E-mail" aria-describedby="basic-addon1" name="em_mail">
                                        </div>
                                        

                                        <div class="input-group mb-3 ml-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Telephone</span>
                                            </div>
                                            <input type="text" class="form-control  mr-4" placeholder="Telephone"
                                                aria-label="Telephone" aria-describedby="basic-addon1" name="em_phone">
                                        </div>

                                        <!--
                                        <div class="input-group mb-3 ml-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">ID Line</span>
                                            </div>
                                            <input type="text" class="form-control  mr-4" placeholder="ID Line"
                                                aria-label="ID Line" aria-describedby="basic-addon1" name="em_line">
                                        </div>
                                        -->

                                        <div class="input-group mb-3 ml-5" style="text-align: center;">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Role</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect01" name="em_Role" required>
                                                <option hidden selected>...Choose...</option>
                                                <option value="Std">SSRU Student</option>
                                                <option value="User">Other</option>
                                            </select>
                                        </div>

                                        
                                    </div><br>
                            
                                    <div style="text-align: center;">
                                        <input type="submit" class="btn btn-dark" name="Save" value="Save" />
                                        <a href="../Home.php" class="btn btn-dark">Back Home</a>
                                    </div><br>
                       
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>