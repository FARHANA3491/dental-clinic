<?php include('connect.php');
    if(isset($_GET['deleteid'])){
        $d_id = $_GET['deleteid'];

        $sql = "DELETE from `doctor` where doc_id= $d_id ";
        $result=mysqli_query($conn,$sql); 

        if($result){
            #echo"deleted";
           header('location:doctorlist.php');
        }else{
            die(mysqli_error($conn));
            
        }
    }

?>