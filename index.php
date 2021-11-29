<?php
session_start();
if(!$_SESSION['username']){
    $username = $_SESSION['username'];
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tijaabo php jquery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="lonig">
       <style>
           h1{
            color: #fff;
            font-size: 44px;
           }
           samp{
               color: #44e100;
           }
           a{
               text-decoration: none;
               text-transform: none;
               color: #44e100;
           }
       </style>
   <h1 class="wec">soo dhawoow <samp><a href="login_ni.php"><?php echo $_SESSION['username'];?></a></samp></h1>
   </div>
</body>
</html>