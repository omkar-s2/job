<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sign Up</title>

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/admin_login.js"></script>
  </head>

  <body class="text-center">
    <!-- <form class="form-signin" id="admin_login" name="admin_login"> -->
    <form class="form-signin" action="sign-up.php" method="post">

      <img class="mb-4" src="images/sign-up.jpeg" alt="" width="115" height="115">
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
      <label for="inputEmail" class="sr-only">First Name</label>
      <input type="first_name" name="first_name" id="first_name" class="form-control" placeholder="Enter Your First Name" required autofocus>
      <label for="inputEmail" class="sr-only">Last Name</label>
      <input type="last_name" name="last_name" id="last_name" class="form-control" placeholder="Enter Your Last Name" required autofocus>
      <label for="inputEmail" class="sr-only">Mobile Number</label>
      <input type="number" name="mobile_number" id="mobile_number" class="form-control" placeholder="Enter Your Mobile Number" required autofocus>
      <label for="inputEmail" class="sr-only">Date of Birth</label>
      <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter Your Last Name" required autofocus>
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Sign up" >
      <a href="job-post.php">Already a Account</a>
      <p></p>
    <p class="h3 mb-3 font-weight-normal"> Sign Up</p>
    </form>
  </body>
</html>
<?php
include('connection/db.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $dob=$_POST['dob'];
    $mobile_number=$_POST['mobile_number'];


    $query=mysqli_query($conn,"insert into jobseeker(email,password,first_name,last_name,dob,mobile_number) values('$email','$password','$first_name','$last_name','$dob','$mobile_number')");

    if($query){
        echo "<script>alert('Now You Can Login!')</script>";
        header('location:job-post.php');
    }
    else{
        echo "<script>alert('some Error,Please Try Again!')</script>";
    }
    
}


?>