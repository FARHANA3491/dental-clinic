<?php include('connect.php');

    $d_id = $_GET['updateid'];

	$sql="SELECT * from `doctor`where doc_id=$d_id";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);

	$d_id= $row['doc_id'];
    $d_name=$row['d_name'];
    $d_qual= $row['d_qualification'];
    $d_exper= $row['d_experience'];
	$d_desig= $row['d_designation'];
    $d_duty= $row['d_duty'];
    $d_lang= $row['d_language'];
    $d_stime= $row['d_starttime'];
    $d_etime= $row['d_endtime'];
	$d_phn= $row['d_phno']; 


   if(ISSET($_POST['submit'])){

	
	$d_name= $_POST['name'];
	$d_qual= $_POST['qual'];
	$d_exper= $_POST['exper'];
	$d_duty= $_POST['duty'];
	$d_desig= $_POST['designation'];
	$d_lang= $_POST['language'];
	$d_stime= $_POST['stime'];
	$d_etime= $_POST['etime'];
	$d_phn= $_POST['phn'];

	$sql = " UPDATE doctor set d_name= '$d_name', d_qualification= '$d_qual',
    d_experience = '$d_exper',d_duty='$d_duty',   d_designation='$d_desig',d_language='$d_lang',
	 d_starttime = '$d_stime',  d_endtime = '$d_etime', d_phno= '$d_phn' WHERE doc_id=$d_id ";
     

    
     $result=mysqli_query($conn,$sql);

	if($result){
        #echo "syccessfull";
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

    <title> add doc</title>
  </head>
  <body>
  <div class="form-style-5">
<form method="POST">
<fieldset>
<legend> UPDATE DOCTOR</legend>

<input type="text" name="name" placeholder="FULL NAME" value=<?php print $d_name;?> > 
<input type="text" name="qual" placeholder="QUALIFICATION" value=<?php print $d_qual;?>>
<input type="text" name="exper" placeholder="YEARS OF EXPERIENCE" value=<?php print $d_exper;?>>
<input type="text" name="duty" placeholder="MENTION THE DUTIES OF THE DOCTOR" value=<?php print $d_duty;?>>
<input type="text" name="designation" placeholder="ENTER THE DESIGNATION OF THE DOCTOR" value=<?php print $d_desig;?>>
<input type="text" name="language" placeholder="LANGUAGES KNOWN TO THE DOCTOR" value=<?php print $d_lang;?>>
<input type="text" name="etime" placeholder="STARTINF TIME OF WORK"value=<?php print $d_stime;?> >
<input type="text" name="stime" placeholder="ENDING TIME OF WORK"value=<?php print $d_etime;?>>
<input type="number" name="phn"  placeholder="PHONE NUMBER"value=<?php print $d_phn;?>>
    
</fieldset>

<input type="submit" value="Update doctor details" name="submit">
</form>
</div>

</div>

</body>
</html>