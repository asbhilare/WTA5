<?php

include 'conn.php';

if(isset($_POST['done'])){

    $prn = $_POST['prn'];
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $q = "INSERT INTO `student`( `prn`, `name`, `roll no`, `email`, `mobile`) VALUES ( $prn ,'$name',$rollno,'$email',$phone)";

    $query = mysqli_query($con,$q);

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

    <title>Students Registration form</title>
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
                        <li><a class="active" href="#" onclick="initial1()"><b> Fill Registration</b></a></li>
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
                        <input type="text" name="prn" class="form-control" placeholder="Enter your college PRN" id="i1" required/>
                            <span id="alt1" class="text-danger font-weight-bold"> </span>
                         </div> 
                        <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" id="i2" required/>
                            <span id="alt2" class="text-danger font-weight-bold"> </span>
                        </div>
                        
                         <label>Roll No</label>
                        <div class="form-group">
                        <input type="text" name="rollno" class="form-control" placeholder="Enter your Roll No" id="i3" required/>
                            <span id="alt3" class="text-danger font-weight-bold"> </span>
                        </div>

                        <label>Email</label>
                        <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Enter your college mail" id="i4" required />
                          <span id="alt4" class="text-danger font-weight-bold"> </span>

                        </div>

                         
                        <label>Mobile Number</label>
                         <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Enter Mobile Number" id="i5" required>
                             <span id="alt5" class="text-danger font-weight-bold"> </span>
                         </div>
                         
                         <a href="display.php"><button style="color:blue" class="btn btn-sucess" onclick="intial2()"  type="submit" name="done">Submit</button></a>
          </form>
           </div>
             </div>
            </div>
       </div>

    <script type="text/javascript">
        function intial2()
        {
            header("location:display.php")
        }
        function initial3()
        {   
      var b,c,d,f,g,e,h,j,n,m,q,r;
      b=document.getElementById("i1").value;
      c=document.getElementById("i2").value;
      d=document.getElementById("i3").value;
      f=document.getElementById("i4").value;
      g=document.getElementById("i5").value;

            if (b == "")
            {
             document.getElementById('alt1').innerHTML =" *First Name can't be Empty";
              return false;
            }




    </script>

     



        </body>
</html>







     


      




