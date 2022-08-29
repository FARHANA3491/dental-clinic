<?php include('connect.php');
    if(isset($_GET['deleteid'])){
        $a_id = $_GET['deleteid'];

        $sql = "DELETE from `admin` where a_id= $a_id ";
        $result=mysqli_query($conn,$sql); 

        if($result){
            echo '
            <script>window.alert("Admin deleted successfully")</script>
            ';
           header('location:admin-page.php');
        }else{
            die(mysqli_error($conn));
            
        }
    }

?>