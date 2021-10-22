<?php
include 'connect.php';
?>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
  
 
$sql="insert into  lady1 (NAME,EMAIL,MOBILE,PASSWORD) values ('$name','$email','$mobile','$password')";

if(mysqli_query($conn,$sql)){
    //echo "New record created successfully";
   header('location:display.php');
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
    <form method="POST">
  
    <label class="form-label">Name</label>
    <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Pleas enter your Name:">
  
 
    <label class="form-label">Email address</label>
    <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Pleas enter your Email:">
 
 
    <label class="form-label">Mobile No:</label>
    <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Pleas enter your Tel No:">
 
 
    <label class="form-label">Password:</label>
    <input type="text" name="password" autocomplete="off" class="form-control" placeholder="Pleas enter your Password:">
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
</body>
</html>