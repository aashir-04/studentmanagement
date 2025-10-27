<?php
session_start();

if(!isset($_SESSION['username']))
{

 header("location:login.php");

}

elseif($_SESSION['usertype']=='admin')
    {
        header("location:login.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

<header class="header">

<a href="">Student Dashboard</a>
<div class="logout">
<a href="logout.php">Logout</a>
</div>
</header>

<aside>

<ul>

<li>
    <a href="">My Courses </a>
<li>  
    
<li>
    <a href="">My result </a>
<li>  


</aside>
<div>



</div>
    
</body>
</html>