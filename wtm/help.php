<html lang="en">
<head>
    <title>Help</title>
</head>
<body>

<form method="post">
    <table> 
        <tr><h1>Help</h1></tr>
      <tr>
        <td>Username: </td>
        <td><input type="text" name="username" value=""/></td>
      </tr>
    <tr>
      <td>Email: </td>
      <td><input type="email" name="email" value=""/></td>
      <tr>
    <td><label for="message">Enter your problem here:</label></td>
    <td><Textarea name="textdata" row="10" col="30"></Textarea></td>
      </tr>
      <tr>
    <td></td>
    <td><input type="submit" value="Submit">
    <a href="home.php">Back</a>
    <a href="logout.php">Logout</a></td>
     </tr>
    </table>
    
  </form>

<?php
$username='';
$fname ='';

if(isset($_POST['username']) ||  isset($_POST['email'])  ||  isset($_POST['textdata'])         )
{
    $username = $_POST['username'];
    $textdata = $_POST['textdata'];
    $email = $_POST['email'];
}

if($username == null || $email == null  || $textdata == null){
	//echo "null username/textdata/email...";
}else{
		$user = $username."|".$email."|".$textdata."\r\n";
		$file = fopen('reports.txt', 'a');
		fwrite($file, $user);
		if($fname == 'create'){
			header('location: home.php');
		}else{
			//header('location: feedback.php');	
      echo 'Thank you for reporting your problem';		
		}

}
?>

    
</body>
</html>