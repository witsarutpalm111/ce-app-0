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
    <title>Register2</title>

    <link rel="stylesheet" href="../scrollbar.css">
    <link rel="stylesheet" href="register.css">
 
</head>


<body>  
    <div class="container">          
    <form class="bg-img" action="InsertForm_user.php" id="formUser" method="post">
        <div class="forms-regis">
                        
                <div><br><br>
                    <h2>Register</h2><br> 
                        <div>

                            <div class="input-group mb-3 ml-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Username</span>
                                </div>
                                <input type="text" class="form-control  mr-4" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1" name="em_User" required>
                            </div>


                            <div class="input-group mb-3 ml-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                </div>
                                <input type="password" class="form-control  mr-4" placeholder="Password"
                                    aria-label="Password" aria-describedby="basic-addon1" name="em_Password" required>
                            </div>


                            <div class="input-group mb-3 ml-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                </div>
                                <input type="text" class="form-control  mr-4" placeholder="Name"
                                    aria-label="Name" aria-describedby="basic-addon1" name="em_fname" required>
                            </div>


                            <div class="input-group mb-3 ml-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Surname</span>
                                </div>
                                <input type="text" class="form-control  mr-4" placeholder="Surname"
                                    aria-label="Surname" aria-describedby="basic-addon1" name="em_lname" required>
                            </div>


                            <div class="input-group mb-3 ml-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">E-mail</span>
                                </div>
                                <input type="email" class="form-control  mr-4" placeholder="E-mail"
                                    aria-label="E-mail" aria-describedby="basic-addon1" name="em_mail" required>
                            </div>
                                        

                            <div class="input-group mb-3 ml-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Telephone</span>
                                </div>
                                <input type="text" class="form-control  mr-4" placeholder="Telephone"
                                    aria-label="Telephone" aria-describedby="basic-addon1" name="em_phone" required>
                            </div>


                            <div id="ab" class="input-group mb-3 ml-5">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Role</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="em_Role" required>
                                    <option hidden selected>...Choose...</option>
                                    <option value="Student">SSRU Student</option>
                                    <option value="Guest">Other</option>
                                </select>
                            </div><br>
                            
                            <div id="ac">    
                                <input type="submit" id="but1" class="btn btn-outline-dark" name="Save" value="บันทึก" />
                                <a href="../../Login.php" id="but2" class="btn btn-outline-dark">กลับหน้าล็อคอิน</a>
                            </div>
                        </div><br>                           
            </div>
        </div>
    </form>    
    </div> 
</body>
</html>