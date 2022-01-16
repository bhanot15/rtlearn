<?php 
    session_start();
    function logged_in()
    {
        if (isset($_SESSION["email"]))
        {
            if(!isset($_SESSION["validity"]))
            {
                return false;
            }
            return true;
        }
        return FALSE;
    }
    function redirect($location)
    {
        return header("Location: {$location}");
    }
    function phpAlert($msg) 
    {
         echo '<script type="text/javascript">alert("' . $msg . '")</script>'; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | ComSite</title>
</head>

<link rel="stylesheet" href="style.css">
<body style="text-align: center;">
<div style="background-color: rgb(56 90 113 / 76%);;
    color: rgb(247, 234, 181);
    text-align: center;
    font-size: xxx-large;">ComiSite</div>
<br>
<div class="navbar" style = "
  background-color: lightblue;
  text-align: center;
  float: initial;
  padding: 6px 3px;
  font-size: large;">
  
  <a href="dashboard.php"><button style="width: 100px; padding: 2px; background-color: #049daab0;">Dashboard</button></a>
  
  &nbsp
  
  <a href="register.php"><button style="width: 100px; padding: 2px; background-color: #049daab0;">Register</button></a>
  
  &nbsp
  
  <a href="login.php"><button style="width: 100px; padding: 2px; background-color: #049daab0;">Login</button></a>
  
  &nbsp
  
  <a href="logout.php"><button style="width: 100px; padding: 2px; background-color: #049daab0;">log Out</button></a>
  
</div>
<br>
