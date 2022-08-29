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
    header("location:".'profile.php');
  }
  

}

?>




<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
.form-style-5{
	max-width: 500px;
	padding: 10px 20px;
	background: #f4f7f8;
	margin: 10px auto;
	padding: 20px;
	background: #d3d3d3;
	border-radius: 8px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="date"],
.form-style-5 input[type="number"],
.form-style-5 input[type="password"],
.form-style-5 input[type="email"],

.form-style-5 input[type="text"],
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 10px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color:#8a97a0;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
}

.form-style-5 select:focus{
	background: #d2d9dd;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:35px;
}


.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: white;
	margin: 0 auto;
	background: purple;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 100%;
	border: 1px solid #16a085;
	border-width: 1px 1px 3px;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: darkviolet;
}
</style>

    <title> add-appointmnet</title>
  </head>
  <body>
  <div class="form-style-5">
<form method="POST">
<fieldset>
<legend> ADD NEW PATIENT</legend>


<input type="text" placeholder="ENTER THE PATIENT NAME" name="patientname">
<input type="date" placeholder="DATE OF BIRTH" name="date">
<input type="email" placeholder="ENTER THE EMAIL" name="email">
<input type="number" placeholder="ENTER THE PHONE NUMBER" name="phoneno">
<input type="password" placeholder="PASSWORD" name="password">

<label for="gender" class="fl fontLabel"> Gender: </label>
          <input type="radio" name="gender" value="Male" required /> Male &nbsp;
          &nbsp; &nbsp; &nbsp;
          <input type="radio" name="gender" value="Female" required /> Female
     


    
</fieldset>

<input type="submit" value="Add Patient" name="Submit">
</form>
</div>

</div>

</body>
</html>