<?php

include("connect.php");

if(!isset($_SESSION['p_name'])){
   header("location:".'signin.php');
}


?>









<!DOCTYPE html>
<head>
    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
      crossorigin="anonymous">

      <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
    margin-top: 10px;
    background-color:white;

}
.main{
    padding: 15px;
    font-family: Arial, Helvetica, sans-serif;
}


img{
    border-radius:50%;
    position:relative;
    top: 7px;
}
.topbar{
    background-color: #72246C;
    overflow: hidden;
}

.topbar a{
    float: right;
    color: whitesmoke;
    text-align: center;
    padding: 20px 26px;
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
}
.rec{
    display: flex;
    margin-left: 10px;
    margin-top: 20px;
}
h1{
    position: relative;
    left:4px;
    font-family: 'Times New Roman', Times, serif;
    font-weight:bold;
    
}
.block{
    position: relative;
    top:9px;
    width: 10px;
    height:2.1rem;
    background:#72246C;
}
h3{
    color: rgb(164, 141, 207);
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin-bottom: 10px;
}



.whole{
    display: block;
    padding-top:3px;
}
a:hover{
    color:teal;}
.appointments{
  border-collapse: collapse;
   width: 100%;

}
.appointments td,.appointments th{
    border: 1px solid #ddd;
    padding: 8px;
}
.appointments tr:hover{
background: #72246C;
color: #fff;
}
.data{
    margin-top: -25px;
}
.heading{
    
    margin-right: 25%;
}

    

    @media (max-width:900px){
      .whole{
        display: block;
      }
      .content{
        width:100%;
       }
       .sidebar{
        width: 100%;
       }
    }
      </style>
</head>
<body>
    <div class="container">
    


        <div class="main">
            <div class="topbar">
           
                <a href="logout.php">Logout</a>&nbsp;&nbsp;
                <a href="userpro.php">My profile</a>

            </div>
            

            <div class="whole">
                <div class="name">
            <h3><?php echo $_SESSION['p_name']; ?></h3></div><br><br>
                   

     <div class="cont">
<div class="heading">
                    <h2>Booked Appointments<br></h2><br>
    </div>
                <table class="appointments" >
                    <tr>
                        <th>Appointment id</th>
                       
                        <th>Treatment</th>
                        <th>Doctor name</th>
                      
                        <th>Appointment time</th>
                        <th>Appointment date</th>
                        <th>RESCHEDULE/CANCEL</th>
                        
                        
                    </tr>
                    <tbody >
                    <?php 

                          
                            $pa_id= $_SESSION['p_id'];
                            $sql= "SELECT * from `appointment` WHERE pa_id=$pa_id  ";
                            $result= mysqli_query($conn, $sql);
                           
                            if($result){
                                while($row = mysqli_fetch_assoc($result)){
                                 $ap_id=$row['ap_id'];
                                
                                 $treat= $row['treatment'];
                                 $d_name=$row['d_name'];
                                 $ap_time= $row['ap_time'];
                                 $ap_date= $row['ap_date'];
                                 $pa_id= $row['pa_id'];
                                 echo ' <tr>
                                <td>'.$ap_id.'</td>
                              
                                <td>'.$treat.'</td>
                                <td>'.$d_name.'</td>
                                <td>'.$ap_time.'</td>
                                <td>'.$ap_date.'</td>
                               
                                <td>  <button type="button" ><a href="reschedule-appo.php ? updateid1= '.$ap_id.' ">RECSHEDULE</a></button>
                                             <button type="button" ><a href="cancel-appo.php ? deleteid1= '.$ap_id.' ">CANCEL</a></button>
                                       </td
                                </tr>
                               ';
                                }
                                
                            
                            }
                            
                                
                    ?>
                        
                    </tbody>
                </table>
     </div>
            </div>
                    
                       
</body>
</html>
