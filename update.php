<?php

include 'conn.php';
if(isset($_POST['done'])){
    $id = $_GET['id'];
    $prn = $_POST['prn'];
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $q = "UPDATE `student` SET `id`=$id,`prn`=$prn,`name`='$name',`roll no`=$rollno,`email`='$email',`mobile`=$phone WHERE id=$id";
    $query = mysqli_query($con,$q);
    header("location: display.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="StyleSheet1.css">

    <title>RED STAR Hospitals</title>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-style ">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#hide">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img class="logo" src="cbse.jpg" alt="img" />
                     <div class="company"><b>Student registration form</b></div>
                </div>
                <div class="collapse navbar-collapse" id="hide">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="#"><b> Fill Registration</b></a></li>
                        <li><a href="display.php"><input type="button" class="btn btn-primary" value="See Registrations"  name=""></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </header>

        
        
        <div class="container">
             <div class="col-md-6 m-auto col-md-offset-3">
                 <div class="panel panel-primary">
                     <div class="panel-heading text-center">
                         <h1 style="color: red; font-size: x-large; text-shadow: rgb(197, 132, 109);"><b>REGISTRATION</b></h1>
                     </div>
                     <div class="panel-body">
                     <form method="POST">
                        <div class="form-group">
                        <label>PRN No</label>
                        <input type="text" name="prn" class="form-control" placeholder="Update your college PRN" id="i1" required/>
                            <span id="alt1" class="text-danger font-weight-bold"> </span>
                         </div> 
                        <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Update your name" id="i2" required/>
                            <span id="alt2" class="text-danger font-weight-bold"> </span>
                        </div>
                        
                         <label>Roll No</label>
                        <div class="form-group">
                        <input type="text" name="rollno" class="form-control" placeholder="Update your Roll No" id="i3" required/>
                            <span id="alt3" class="text-danger font-weight-bold"> </span>
                        </div>

                        <label>Email</label>
                        <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Update your college mail" id="i4" required />
                          <span id="alt4" class="text-danger font-weight-bold"> </span>

                        </div>

                         
                        <label>Mobile Number</label>
                         <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Update Mobile Number" id="i5" required>
                             <span id="alt5" class="text-danger font-weight-bold"> </span>
                         </div>
                         
                         <button style="color:blue" class="btn btn-sucess" type="submit" name="done">Submit</button>
          </form>
           </div>
             </div>
            </div>
       </div>

    



    

     



        </body>
</html>


