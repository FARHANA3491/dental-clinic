<?php include('connect.php');
    if(isset($_GET['deleteid1'])){
        $ap_id = $_GET['deleteid1'];

        $sql = "DELETE from `appointment` where ap_id= $ap_id ";
        $result=mysqli_query($conn,$sql); 

        if($result){
            //echo"deleted";
           header('location:appo-page.php');
        }else{
            die(mysqli_error($conn));
            
        }
    }

?>