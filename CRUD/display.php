<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5 mx-10">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
  <thead >
    <tr>
      <th scope="col">S no.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php
    $sql="select * from `crud`;";
    $result=mysqli_query($con,$sql);
    if($result){
      
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['ID'];
            $name=$row['Name'];
            $email=$row['Email'];
            $mobile=$row['Mobile'];
            $password=$row['Password'];

            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
                <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-white">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-white">Delete</a></button> 
            </td>
          </tr>';
        }
    }
?>

    
    
  </tbody>
</table>
    </div>
</body>
</html>