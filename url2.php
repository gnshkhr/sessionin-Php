<?php 
    session_start(); 
    //   var_dump($_POST);
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
    //  $mail = $_SESSION['email'];

     echo "<p>Name : $name || Email : mail </p>";
   
    ?>
<button><a href="url3.php?name=<?= $name ?>&email=<?= $mail?>">Next Page</a></button>
<a href="logout.php">Logout</a>

<form action="url3.php" method="POST">
 <input type="hidden" name="name" id=""  value="<?= $name ?>">
 <input type="hidden" name="email" id=""  value="<?= $mail?>">
 <input type="submit" name="" value ="nextpage">
</form>
</body>
</html>