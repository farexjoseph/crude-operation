<?php
include 'connect.php';

if(isset($_GET['updateid'])){

$id =$_GET['updateid'];

echo $id;


//echo $query1;

if(isset($_POST['submit'])){
    $id =$_GET['updateid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
  
 

$sql="update lady1 set NAME='$name', EMAIL='$email', MOBILE='$mobile', PASSWORD='$password' WHERE ID =".$id;


if(mysqli_query($conn,$sql)){
  //echo "Updated successfully";
     header('location:display.php');
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    

    <title>Lady</title>
</head>
<body>
    <div class="container  my-5">
    <form action="update.php?updateid=<?php echo $id?>" method="POST">
  <?php
  $query1 = 'SELECT * FROM lady1 WHERE ID = '.$id;

  $result1 = mysqli_query($conn,$query1);
  
  if(mysqli_num_rows($result1)>0){
    while($row = mysqli_fetch_assoc($result1)){
  ?>
    <label class="form-label">Name</label>
    <input type="text" name="name" autocomplete="off" value="<?php echo $row['NAME']?>" class="form-control" placeholder="Pleas enter your Name:">
  
 
    <label class="form-label">Email address</label>
    <input type="email" name="email" autocomplete="off" value="<?php echo $row['EMAIL']?>" class="form-control" placeholder="Pleas enter your Email:">
 
 
    <label class="form-label">Mobile No:</label>
    <input type="text" name="mobile" autocomplete="off" value="<?php echo $row['MOBILE']?>"class="form-control" placeholder="Pleas enter your Tel No:">
 
 
    <label class="form-label">Password:</label>
    <input type="text" name="password" autocomplete="off" value="<?php echo $row['PASSWORD']?>" class="form-control" placeholder="Pleas enter your Password:">
 <?php
 
}
}
 
 ?>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>

    </div>
</body>
</html>