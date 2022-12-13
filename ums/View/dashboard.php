<?php session_start();

if(empty($_SESSION['Username'])){
  header("location: login.php");
}


?>

<!doctype html>
<head>
<style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}
h3 {
  color: red;
  text-align: left;
}
div {
  color: red;
  text-align: left;
}
p {
  font-family: verdana;
  font-size: 20px;
}
a{
  text-decoration:none;
}


</style>
</head>
<body>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMS | Dashboard</title>
</head>
<body>
<h1 style="background-color:Gray;">UMS - <?php echo $_SESSION["T"];  ?> Dashboard [ <a href="../Controller/logout.php">Logout</a> ]</h1>
<h2>Welcome </h2>
<h3>Name: <?php echo $_SESSION["FName"]." ".$_SESSION["LName"];  ?></h3>
<h3>Username: <?php echo $_SESSION["Username"];  ?></h3>




    <ul>
    <li><a href="update.php" >Update Profile Information</a></li>
    <li><a href="helpline.php" >Help</a></li>
    </ul>
    <div><input type="text" placeholder="search"></div>
    <?php 
  
/*
$Cookie_name=$_SESSION['userName'];
$Cookie_value=$_SESSION['type'];
if(isset($_SESSION["type"])) 
{
   
}

$name=$_SESSION['userName'];
$value=$_SESSION['type'];

if(!isset($_COOKIE[$name]))
{
    setcookie($name,$value,time()+(10),"/");
    
}

if(!isset($_COOKIE[$name]))
{
    echo "<p>New User : ".$_SESSION['type']."</p>";
}
else {
    echo "<p>Old User : ".$_COOKIE[$name]."</p>";
}

*/
?>
</body>
</html>
