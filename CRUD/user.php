<?php
include 'connect.php';

if(!empty($_POST['name'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO `crud`(name,email,mobile,password) VALUES('$name','$email','$mobile','$password');";

    if($con->query($sql)){
        //echo "Data inserted into database";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD OPERATION</title>
    <script> src="index.js" </script>
  </head>
  <body>
    <div class="container my-5" >
    <form method="post" name="form1" onsubmit="return required()">
        <div class="mb-3">
        <label >Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off">
    </div>
    <div class="mb-3">
        <label >Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off">
    </div>
    <div class="mb-3">
        <label >Mobile</label>
        <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile number" autocomplete="off">
    </div>
    <div class="mb-3">
        <label >Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off">
    </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <button  class="btn btn-primary"><a href="display.php"></a> Back</button>

</form> 
    </div>

  </body>
</html>