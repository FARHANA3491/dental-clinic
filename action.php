<?php

include("connect.php");

$output='';
$sql="SELECT * FROM doctor WHERE d_id='".$_POST['deptID']."' ORDER BY d_name";
$result=mysqli_query($conn,$sql);
$output.='<option value="" disabled selected>Select a Doctor</option>';
while($row=mysqli_fetch_array($result)){
    $output.='<option value="'.$row["doc_id"].'">'.$row["d_name"].'</option>';
}
echo $output;
?>



