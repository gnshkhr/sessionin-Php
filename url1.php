<?php 
    session_start(); 
    //   var_dump($_POST);

    
   if(isset($_SESSION['username'])){
    header('location:url2.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php
       $username ="";
       $password ="";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
      
        if($username =="gbk" && $password =="gbk"){

            // echo "success";

             $_SESSION['username'] = $username;

           header('Location:url2.php');

        }else{

            echo "<p>Login Failed!!</p>";
        }

    }
     
  
   
    ?>

    <form action="" method="post">
     <fieldset style="width:50%;">
     <legend>Login Session check</legend>
     <label for="Username">Username</label>
     <input type="text" name="username" id="">
     <label for="Password">Password</label>
     <input type="text" name="password" id="">
     <input type="submit" name="submit" id="">
     </fieldset>
    </form>
  <a href="logout.php">Logout</a>
</body>
</html>