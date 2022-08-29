
 <?php

include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin_login</title>
    <link href="adminlogin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<!--  Request me for a signup form or any type of help  -->
<div class="login-form">    
    <form action="" method="post">
        <h1><center>Admin Login</center></h1>
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Login to Your Account</h4>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        
        <input type="submit" name="sub" class="btn btn-primary btn-block btn-lg" value="Login">              
    </form>
</div>

<?php
        if(isset($_POST['sub'])){
   
            $name=$_POST['username'];
            $password=$_POST['password'];
          
            $sql="SELECT * FROM admin WHERE a_username ='$name' AND a_password='$password'";
            $result=mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            if($num>0)
            { 
              $_SESSION['a_username']=$em_pass['a_username'];
              header("location:".'http://localhost/dental-clinic-final/admin-page/profile.php');
            
            }
            else
            {
             echo '<script>alert("Enter valid e-mail or password")</script>';
            }
            
          
          }
    ?>
</body>
</html>       