<?php include('connect.php');
    $a_id = $_GET['updateid'];
   if(isset($_POST['submit'])){

	$a_name= $_POST['adminname'];
	$a_pass= $_POST['password'];
	

	$sql = "UPDATE `admin` set a_username ='$a_name', a_password= '$a_pass' where a_id=$a_id " ;

	$result=mysqli_query($conn,$sql);

	if($result){
        //echo "success";
		header('location: admin-page.php');
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
.form-style-5 input[type="password"],
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

    <title> add doc</title>
  </head>
  <body>
  <div class="form-style-5">
<form method="POST">
<fieldset>
<legend> UPDATE ADMIN</legend>

<input type="text" name="adminname" placeholder="FULL NAME" required>
<input type="password" name="password" placeholder="password" required>



    
</fieldset>

<input type="submit" value="/Update admin to db" name="submit">
</form>
</div>

</div>

</body>
</html>