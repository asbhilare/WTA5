<?php
include 'conn.php';
if(isset($_POST['prn'])){

    $prn = $_POST['prn'];
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $q = "SELECT * FROM `student`";
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
</head>
<body>

    <div class="container">
     <div class="col-lg-12">
         <br><br>
          <h1 class=" text-warning text-center">Display Table data</h1>
         <br>
         <table class="table table-stripped table-hover table-bordered">
             <tr class="text-center">

                  <th>Id</th>
                  <th>Prn</th>
                  <th>Name</th>
                 <th>Roll No</th>
                 <th>Email</th>
                  <th>Mobile</th>
                  <th>Update</th>
                  <th>Delete</th>

             </tr>

     <?php
            include 'conn.php';

           
            $q = "SELECT * FROM `student`";

            $query = mysqli_query($con,$q);
            while($res = mysqli_fetch_array($query)){


?>

         <tr class="text-center">
              <td> <?php echo $res['id']; ?></td>
              <td> <?php echo $res['prn']; ?></td>
              <td> <?php echo $res['name']; ?></td>
              <td> <?php echo $res['roll no']; ?></td>
              <td> <?php echo $res['email']; ?></td>
              <td> <?php echo $res['mobile']; ?></td>
              <td><button style="color:black" class="btn-default btn"><a href="update.php?id=<?php echo $res['id']; ?>">Update</a></button></td>
              <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
         </tr>

         <?php 
           }
        ?>

         </table>
     </div>
     </div>



</body>
</html>


       