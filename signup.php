<?php

include("connect.php");
//include("functions.php");


if(isset($_POST['Submit'])){
 
  $patientname=$_POST['patientname'];
  $phoneno=$_POST['phoneno'];
  $date=$_POST['date'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $password=$_POST['password'];

  $sql="SELECT * FROM patient WHERE p_email ='$email'";
  $result=mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  if($num>0)
  {
    echo'<script>alert("This email already exists!")</script>';
  }
  else
  {
    $insert="INSERT INTO patient (p_name,p_gender,p_dob,p_email,p_phno,p_password)
     values ('$patientname','$gender','$date','$email','$phoneno','$password')";

     
    mysqli_query($conn,$insert);
    header("location:".'signin.php');
  }
  

}


?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Form</title>
    <link href="Signup.css" type="text/css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <!-- Body of Form starts -->
    <div class="container">
      <form method="POST" >
        <h3>Register Here</h3>
        <!--First name-->
        <div class="box">
          <label for="patient name" class="fl fontLabel"> Patient Name: </label>
          <div class="fr">
            <input type="text" name="patientname" placeholder="Patient Name" class="textBox" autofocus="on" required
            />
          </div>
        </div>
        <!--First name-->

        <!---Phone No.------>
        <div class="box">
          <label for="phone" class="fl fontLabel"> Phone No.: </label>

          <div class="fr">
            <input type="number"  name="phoneno" maxlength="10" placeholder="Phone No:" class="textBox" required/>
          </div>
        </div>
        <!---Phone No.---->
        <!---Date Of Birth.------>
        <div class="box">
          <label for="phone" class="fl fontLabel"> Date Of Birth: </label>

          <div class="fr">
            <input autocomplete="off" class="textBox" id="date" name="date" placeholder="DD-MM-YYYY" type="date" 
              max=""
              spellcheck="false"
            />
          </div>
        </div>
        <!---Date Of Birth.---->

        <!---Email ID---->
        <div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>

          <div class="fr">
            <input type="email" required name="email" placeholder="Email Id" class="textBox"/>
          </div>
        </div>
        <!--Email ID----->

        <!---Password------>
        <div class="box">
          <label for="password" class="fl fontLabel"> Password </label>

          <div class="fr">
            <input type="Password" required name="password" placeholder="Password" class="textBox"/>
          </div>
        </div>
        <!---Password---->

        <!---Gender----->
        <div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
          <input type="radio" name="gender" value="Male" required /> Male &nbsp;
          &nbsp; &nbsp; &nbsp;
          <input type="radio" name="gender" value="Female" required /> Female
        </div>
        <!---Gender--->
        <div class="check">
            
            <a class="si" href="signin.php"> Sign In</a>
          </div>
        <!---Submit Button------>
        <div class="box" style="background: #2d3e3f">
        <center>  <input type="Submit" name="Submit" class="submit" value="SUBMIT" /> </center>
        </div>
        <!---Submit Button----->
      </form>
    </div>
    <!--Body of Form ends--->
  </body>
</html>
