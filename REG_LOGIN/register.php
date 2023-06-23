<?php
  $con = mysqli_connect('localhost','root','','practice'); 

  if (isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $dup_username = mysqli_query($con,"SELECT * from `user` where name = '$name'");
      $dup_email = mysqli_query($con,"SELECT * from `user` where email = '$email'");

      if(mysqli_num_rows($dup_username)){
          echo"
            <script>
              alert('This UserName is already exist');
              window.location('register.php');
            </script>          
          ";
      }elseif(mysqli_num_rows($dup_email)){
        echo"
        <script>
          alert('This Email is already exist');
          window.location('register.php');
        </script>          
      ";
      }else{
            $query = mysqli_query($con,"INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$password')");
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>customer Form</title>
</head>
<body>
    <div class="container">
        <form action="register.php" method="post">
        <div class="form-group col-6">
          <label for="name">Name</label>
          <input type="text"class="form-control" name="name" id="" value="" placeholder="Enter name">
        </div>
        <div class="form-group col-6">
          <label for="email">Email</label>
          <input type="email"class="form-control" name="email" id="" value="" placeholder="enter email">
        </div><div class="form-group col-6">
          <label for="password">Password</label>
          <input type="password"class="form-control" name="password" id="" aria-describedby="helpId" placeholder="enter password">
        </div>
        <button class="btn-btn-primary mt-2" name="submit">
            <a href="Login.php">Login</a> 
        </button>
        <button class="btn-btn-primary mt-2" name="submit">
            Register
        </button>
        </form>
    </div>
    
</body>
</html>