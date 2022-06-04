<?php

//to be created
require "config.php";

if (isset($_SESSION['user'])) {
    header("location: callback.php");
}

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in with GitHub</title>
</head>
<body style="margin-top: 200px; text-align: center; font-size: 30px;">
    <a href="login.php">Sign in with GitHub</a>    
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>WELCOME</title>
</head>
<body>
    <form action="config.php" method="post">
    <header class="text-white p-3 text-center"style="background-color:black;">
<h4>IREMBO | Special CAT</h4>
</header>


<div class="d-flex justify-content-center p-5 " style="height:60vh;">

 
<div class="card px-5 pt-4 position-relative text-center w-70"> 
     <p class="text-black" style="font-style:bold;">
         <b>connect to IREMBO</b>
</p>
   <div class=" bg-black"style="margin-top: 120px; text-align: center; font-size: 30px;">
   
    <!-- <style="margin-top: 200px; text-align: center; font-size: 30px;"> -->
    <a href="login.php" class="text-white">Sign in with GitHub</a> 
</div>
          
           </div>
        </div>
</div>
</form>
</body>
</html>