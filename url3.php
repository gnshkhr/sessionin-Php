<?php
  
   session_start(); 

   if(!isset($_SESSION['username'])){
    header('location:url1.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
     $name = $_SESSION['username'];
     $mail = $_POST['email'];

     echo "<p>Name : $name || Email : mail </p>";
   
    ?>
 <a href="logout.php">Logout</a>
<!-- <button><a href="url2.php?name=<?= $name ?>&email=<?= $mail?>">Next Page</a></button> -->
</body>
</html>
