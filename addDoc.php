<?php include('connect.php');


   if(isset($_POST['submit'])){


	$d_name= $_POST['name'];
	$d_qual= $_POST['qual'];
	$d_exper= $_POST['exper'];
	$d_duty= $_POST['duty'];
	$d_desig= $_POST['designation'];
	$d_lang= $_POST['language'];
	$d_stime= $_POST['stime'];
	$d_etime= $_POST['etime'];
	$d_phn= $_POST['phn'];
	$d_id=$_POST['d_id'];
   

	$sql = "INSERT into `doctor` (d_name,d_id,d_qualification,d_experience,d_duty,d_designation,d_language,
	d_starttime,d_endtime,d_phno)
	values('$d_name','$d_id','$d_qual','$d_exper','$d_duty','$d_desig','$d_lang','$d_stime','$d_etime','$d_phn')";

	$result=mysqli_query($conn,$sql);

	if($result){
		header('location: doctorlist.php');
	}else{
		die(mysqli_error($conn));
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
.form-style-5 input[type="text"],
.form-style-5 input[type="number"],
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

    <title>add-doc</title>
  </head>
  <body>
  <div class="form-style-5">
<form method="POST">
<fieldset>
<legend> ADD DOCTOR</legend>

<input type="text" name="name" placeholder="FULL NAME">
<input type="number" name="d_id"  placeholder="ENTER THE DEPARTMENT ID DOCTOR BELONGS TO">
<input type="text" name="qual" placeholder="QUALIFICATION">
<input type="text" name="exper" placeholder="EXPERIENCE">
<input type="text" name="duty" placeholder="MENTION THE DUTIES OF THE DOCTOR">
<input type="text" name="designation" placeholder="ENTER THE DESIGNATION OF THE DOCTOR">
<input type="text" name="language" placeholder="LANGUAGES KNOWN TO THE DOCTOR">
<input type="text" name="stime" placeholder="STARTINF TIME OF WORK" >
<input type="text" name="etime" placeholder="ENDING TIME OF WORK">
<input type="number" name="phn"  placeholder="PHONE NUMBER">




    
</fieldset>

<input type="submit" value="Add doctor to db" name="submit">
</form>
</div>

</div>

</body>
</html>