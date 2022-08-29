<?php

include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="site2/site2/CSS/find_doctor.css">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" 
    integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
            
        #category2 option.label{
            display:block;
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
</head>

<body>
    <img src="site2/site2/img/fin-doc.jpeg" alt="no" class="doc-image"> 
<div class="bg">
    <div class="form ">
            <div class="header">
                <div class="box"></div>&nbsp;
                    <h1>Find a Doctor</h1>
            </div>
     <div class="line"></div><br>

     <form id="formname" name="formname" method="post" action="" >
	  
        <div class="dd">
        
        <div class="dept ">
        <label for="" class="txt">Select a Department:</label>
        <select name="category1" id="category1" class="fill">
            <option value="" placeholder="Select a Department" disabled selected>Select a Department</option>
            <?php
           
            $sql="SELECT * FROM department ORDER BY d_name";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){

            ?>
         <option value="<?= $row['id']; ?>"><?= $row['d_name']; ?></option>
         <?php }?>
        </select>
        </div>


        <br>

        <div class="doc">
        <label for="" class="txt">Select Doctor:</label>
        <select  id="category2" name="category2" class="fill" onchange="location = doc.php;">
            <option value="" disabled selected>Select a Doctor</option>
        </select>
        </div><br>
        <div class="button">
            <button class="btn" name="Submit">GO</button>
        </div>
        </div>
        <br>
</form>
</div>
</div>

        
</body>

</html>
<?php
if(isset($_POST['Submit'])){
    $id=$_POST['category2'];
   // echo $id;
    $_SESSION['doc_id']=$id;
    header("location:".'http://localhost/dental-clinic-final/admin-page/doc.php');
    }
?>

