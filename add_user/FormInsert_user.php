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
            overflow: hidden;
        }

        /* เอาscrollup-down ออก */
    </style>


    <style>
        #blurbox {
            width: 820px;
            padding: 10px;
            margin: 35px;
        }
    </style>

</head>

<body style="background-image: url(../BG/key1.jpg); background-repeat: no-repeat;background-size:100%;">

    <div class="container h-90">


        <div class="row mb-3 mt-1"
            style="background-image: url(../BG/123.jpg); background-repeat: no-repeat; background-position: center ;background-size:75%;">
            <div class="col-1"></div>
            <div class="col-10">

                <form action="InsertForm_user.php" id="formUser" method="post">
                    <div class="container h-100" style="min-height:93vh;">
                        <div id="blurbox" class="card mt-5 mb-3" style="background-color:#66666688"><br>

                            <h1>Register</h1> <br>

                            <legend>Your Profile</legend>
                            <div class="row">
                            <div class="column">

                            <div class="input-group mb-3 ml-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Username</span>
                                </div>
                                <input type="text" class="form-control  mr-4" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1" name="em_User">
                            </div>

                            <label>User_name : </label>
                            <input type="text" name="em_User" size="20" placeholder="User Name" required />
                            <br>

                            <label>Password : </label>
                            <input type="text" name="em_Password" size="20" placeholder="Password" required />
                            <br>

                            <label>Name : </label>
                            <input type="text" name="em_fname" size="20" placeholder="Name" required />
                            <br>

                            <label>Surname: </label>
                            <input type="text" name="em_lname" size="20" placeholder="Surname" required />
                            <br>

                            <label>E-mail : </label>
                            <input type="text" name="em_mail" size="20" placeholder="E-mail" required />
                            <br>

                            <label>Telephone : </label>
                            <input type="text" name="em_phone" size="20" placeholder="Telephone" required />
                            <br>

                            <label>ID Line : </label>
                            <input type="text" name="em_line" size="20" placeholder="ID Line" required />
                            <br>

                            <label>Role : </label>
                            <select name="em_Role" required>
                                <option hidden selected> -- select an option -- </option>
                                <option value="Std">SSRU Student</option>
                                <option value="User">Normal Person</option>
                            </select>

                            <br><br><br>


                            <input type="submit" class="btn btn-dark" value="Save" />
                            <a href="../Home.php " class="btn btn-dark">Back Home</a>

                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>