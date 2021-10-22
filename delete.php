<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
 
    $id=$row['ID'] =$_GET['deleteid'];

    $sql = "delete from lady1 where id= $id" ;
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "Record deleted";
        header('location:display.php');
    }
    else{
        die("Record delete failed: " . mysqli_connect_error());
    }
}
?>