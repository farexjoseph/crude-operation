<?php
  include 'connect.php';

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
    <title>displytouser</title>
</head>
<body>
    <div class="container">
     <button class="btn btn-primary my-5"><a href="lady.php" class="link-light">Add User</a>
         </button>

         <table class="table">
  <thead>
    <tr>
      <th scope="col">SNO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MOBILE</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">OPERATIONS</th>
    </tr>
    </thead>
     
     
     
      <tbody>
       <?php
         $sql="select * from lady1";
         $result = mysqli_query($conn,$sql);

         if($result){
           while($row=mysqli_fetch_assoc($result)){
            echo 
            '<tr>
            <th scope="row">'.$row['ID'].'</th>
            <td>'.$row['NAME'].'</td>
            <td>'.$row['EMAIL'].'</td>
            <td>'.$row['MOBILE'].'</td>
            <td>'.$row['PASSWORD'].'</td>
            <td><button class="btn btn-primary"><a href="update.php?updateid='.$row['ID'].'" class="text-light">Update</a></td> 
            <td><button class="btn btn-danger"><a href="delete.php?deleteid='.$row['ID'].'" class="text-light">Delete</a></td> 
          </tr>';
             
              
          
           }
         }
       ?>
     
    
  
 
  </tbody>
</table>
    </div>
</body>
</html>


