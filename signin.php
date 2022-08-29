<?php

include("connect.php");

if(isset($_POST['Submit'])){
  $phoneno=$_POST['phoneno'];
  $date=$_POST['date'];
  $patientname=$_POST['patientname'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="SELECT * FROM patient WHERE p_email ='$email' AND p_password='$password'";
  $result=mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  if($num>0)
  { $em_pass=mysqli_fetch_assoc($result);
     $db_pass=$em_pass['password'];
     $_SESSION['p_name']=$em_pass['p_name'];
     $_SESSION['p_dob']=$em_pass['p_dob'];
     $_SESSION['p_phno']=$em_pass['p_phno'];
     $_SESSION['p_gender']=$em_pass['p_gender'];
     $_SESSION['p_id']=$em_pass['p_id'];


    $_SESSION['p_email']=$email;
    header("location:".'userpro.php');
    

  }
  else
  {
   echo '<script>alert("Enter valid e-mail or password")</script>';
  }
  

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>login Form </title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="Signin.css" type="text/css" rel="stylesheet" />
    <!--Stylesheet-->
    
</head>
<body>
  
    <form action="" method="post">
        <h3>Login Here</h3>

        <label for="username" >E-mail ID</label>
        <input type="email" placeholder="E-mail ID:" id="username" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password"><br>

        <input type="submit" class="button" name="Submit" value="Login"> 
        <div class="check">
         
          <a class="su" href="signup.php"> Sign Up</a>
        </div>
    </form>
</body>
</html>
