<?php
  $con = mysqli_connect('localhost','root','','practice'); 

    $name = $_POST['name'];
    $password =$_POST['password'];

    $result = mysqli_query($con,"SELECT * from `user` where name = '$name' AND password ='$password'");
    
    session_start();
    if(mysqli_num_rows($result)){
        $_SESSION['uname'] = $name;
        echo"
        <script>
          alert('Successfully Logged in');
          </script>          
          ";   
    }else{
        echo"
        <script>
          alert('Incorrect UserName or password');
          </script>          
          "; 
        //   window.location.href='login.php';
    }
        ?>
        <!-- //   window.location('register.php'); -->


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
        <form action="login.php" method="post">
        <div class="form-group col-6">
          <label for="Name">Name</label>
          <input type="text"class="form-control" name="name" id="" value="" placeholder="enter user name">
        </div><div class="form-group col-6">
          <label for="password">Password</label>
          <input type="password"class="form-control" name="password" id="" aria-describedby="helpId" placeholder="enter password">
        </div>
        <button class="btn-btn-primary mt-2" name="submit">
            Login
        </button>
        </form>
    </div>
    
</body>
</html>