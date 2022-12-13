<?php 
require_once "../Controller/functions.php";
include "../Controller/LoginController.php";

// if(($_SESSION["type"]) == "student"){

//   header("location: studentDashboard.php");
// }

// if(isset($_SESSION["type"]) == "teacher"){

//   header("location: teacherDashboard.php");
// }

// if(isset($_SESSION["type"]) == "admin"){

//   header("location: adminDashboard.php");
// }

if(isset($_SESSION["Username"])){

  header("location: dashboard.php");
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

p {
  font-family: verdana;
  font-size: 20px;
}
body {
  background-image: url("1.jpg");
}
a{
  text-decoration:none;
}
</style>
<script src="..\javaScript\LoginValidation.js"></script>
</head>
<body>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMS | Login</title>
</head>
<body>
<form method="post" action="login.php" onsubmit="return validateForm()">
    <h1 style="background-color:Orange;">UMS [ <a href="register.php">Register</a> ]</h1>
    <?php if(!empty($registered)) : ?>
    <?php endif; ?>
    <center>
    <fieldset style="border:0px">
      <table>
       
     <center> <legend>Login Here</legend></center>
      <tr>
        <td  style="margin-top:10px">UserName</td>
        <td> 
        <input type="text" name="username" id="userName" placeholder="Enter User Name" style="border-radius:5px;margin-top:10px" value="<?php echo !empty($registered)?$registered["userName"]:"" ?>"/> 
        </td>
        <td><h5 id="errorUser"></h5></td>
        <td>
        <?php if(isset($errors["username"])) : ?>
        <br/> <img src="images/warning.png" alt="x" height="16" width="16"> <?php echo $errors["username"] ?>
        </td>
        <?php endif; ?>
      </tr>
      <tr>
        <td style="margin-top:10px">Password</td>
        <td>
        <input type="password" name="password" id="password" style="border-radius:5px;margin-top:10px" placeholder="Enter Password"/>
        </td>
        <td>
        <h5 id="errorpass"></h5>
        </td>
        <td>  <?php if(isset($errors["password"])) : ?>
        <br/> <img src="images/warning.png" alt="x" height="16" width="16"> <?php echo $errors["password"] ?></td>
      </tr>
      <?php endif; ?>
       
     
        </table>
    </fieldset>
    </center>
    <br/>
   <center><span> <input type="submit" style="padding-top:-30px;width:13%;height:8%;border-radius:5px;margin-left:60px" value="Login">
 <a href="forgetPassword.php">Forget Password?</a> </span></center>
</form>
</body>
</html>
