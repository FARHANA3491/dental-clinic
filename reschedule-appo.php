<?php include('connect.php');

    $ap_id=$_GET['updateid1'];

   if(isset($_POST['submit'])){

   
	$p_treat = $_POST['treatment'];
	?>
	<?php $sql="SELECT d_name from department where id= $p_treat";
	      $result=mysqli_query($conn,$sql);
		  if($result)
		  	{
				While($row = mysqli_fetch_assoc($result)){
					$dept = $row['d_name'];
				}
			}
	      
    $d_name = $_POST['d_name']; ?>
	<?php $sql="SELECT d_name from doctor where doc_id= $d_name ";
	      $result=mysqli_query($conn,$sql);
		  if($result)
		  	{
				While($row = mysqli_fetch_assoc($result)){
					$doc = $row['d_name'];
				}
			}
    
    $ap_time = $_POST['time'];
    $ap_date = $_POST['date'];
    
	$sql="SELECT * from `appointment` where ap_date='$ap_date' AND d_name='$doc' AND ap_time='$ap_time'  ";	
	$result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
	if($num >= 3){
		echo '<script>alert("Thi slot is full..!! Try with another slot..")</script>';
	}
     else{

	$sql = " UPDATE appointment set  treatment = '$dept', 
    d_name= '$doc',ap_time='$ap_time', ap_date='$ap_date' WHERE ap_id=$ap_id ";
     
	$result=mysqli_query($conn,$sql);

	if($result){
       //echo"added succes";
	   header('location: booked-appo.php');
    }else{
		die(mysqli_error($conn));
	}
	 }
}
 ?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" 
    integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

<script type="text/javascript" >

$(document).ready(function(){
  $('#category1').change(function(){
     var dept_id=$(this).val();
     $.ajax({
      url:"action.php",
      method:"POST",
      data:{deptID:dept_id},
      success:function(data){
        $("#category2").html(data);
      }

     });
  });
});

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

    <title> reschedule appoinmnet</title>
  </head>
  <body>
  <div class="form-style-5">
<form method="POST">
<fieldset>
<legend> RESCHEDULE APPOINMENT</legend>




<select name="treatment" id="category1" class="fill">
            <option value="" placeholder="Select a Department" disabled selected>Select a Department</option>
            <?php
           
            $sql="SELECT * FROM department ORDER BY d_name";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){

            ?>
			<option value="<?= $row['id']; ?>"><?= $row['d_name']; ?></option>
         <?php }?>
        </select>


		<select  id="category2" name="d_name" class="fill" onchange="location = doc.php;">
            <option value="" disabled selected>Select a Doctor</option>
        </select>
                
                <input type="date"  class="calendar" placeholder="DATE TO SCHEDULE APPOINMENT" name="date">
            <div class="row">
                <i class="timing"></i>
                <select name="time">
                <option selected hidden >SELECT TIME SLOT</option>
                    <option value="9am-10am">9am-10am</option>
                    <option value="10am-11am">10am-11am</option>
                    <option value="11am-12am">11am-12am</option>
                    <option value="1pm-2pm">1pm-2pm</option>
                    <option value="2pm-3pm">2pm-3pm</option>
                </select>
                
            </div>


    
</fieldset>

<input type="submit" value="Confrim the Appointment" name="submit">
</form>
</div>

</div>

</body>
</html>