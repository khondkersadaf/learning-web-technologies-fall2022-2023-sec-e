<?php 
include("../Controller/ForgetPasswordController.php");
if(isset($_SESSION["Username"])){

  header("location: Dashboard.php");
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
<form method="post">
    <h1 style="background-color:Orange;">UMS [ <a href="register.php">Register</a> ]</h1>
   
    <center>
    <fieldset style="border:0px">
      <table>
       
     <center> <legend>Change Your Password Here</legend></center>
      <tr>
        <td  style="margin-top:10px">Phone</td>
        <td> 
        <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" style="border-radius:5px;margin-top:10px" value="<?php echo !empty($registered)?$registered["userName"]:"" ?>"/> 
        </td>

        <td><?php  echo $errPhone;?>
        <br/>
        </td>
      </tr>

      <tr>
        <td style="margin-top:10px">New Password</td>
        <td>
        <input type="text" name="password" id="password" p;aceholder="Enter a New Password" style="border-radius:5px;margin-top:10px" placeholder="Enter Password"/>
        </td>
        <td>
        <?php echo $errPassword;?>
        </td>
        <br/> 
      </tr>
       
     
        </table>
    </fieldset>
    </center>
    <br/>
   <center><span> <input type="submit" style="padding-top:-30px;width:13%;height:8%;border-radius:5px;margin-left:60px" name="submit" value="Submit"></span></center>
</form>
</body>
</html>
