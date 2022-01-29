<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="select * from `crud` where id='$id'";
$result=mysqli_query($con,$sql);
if($result){
  $row=mysqli_fetch_assoc($result);
  $name=$row['Name'];
  $email=$row['Email'];
  $mobile=$row['Mobile'];
  $password=$row['Password'];
}

if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set name='$name',email='$email',mobile='$mobile',password='$password' where id='$id'";

    if($con->query($sql)){
        //echo "Updated successfully";
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
  </head>
  <body>
    <div class="container my-5" >
    <form method="post">
        <div class="mb-3">
        <label >Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" value=<?php echo $name?> autocomplete="off">
    </div>
    <div class="mb-3">
        <label >Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" value=<?php echo $email?> autocomplete="off">
    </div>
    <div class="mb-3">
        <label >Mobile</label>
        <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile number" value=<?php echo $mobile?> autocomplete="off">
    </div>
    <div class="mb-3">
        <label >Password</label>
        <input type="text" class="form-control" name="password" placeholder="Enter your password" value=<?php echo $password?> autocomplete="off">
    </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
  <!-- <button type="submit" name="submit" class="btn btn-primary" ><a href="display.php"></a> Cancel</button> -->
</form> 
    </div>

  </body>
</html>