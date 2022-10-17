<?php 

    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];

    /*if($UserName == "" || $Password == "") {
       echo "invalid username/password!";
    }else if($UserName == "admin" && $Password=="abc"){
        echo "Welcome Home";
    }else{
        echo "invalid user";
    }*/

  $uppercase    = preg_match('@[A-Z]@', $UserName);
  $number       = preg_match('@[0-9]@', $Password);
  $specialchars = preg_match('@[^\w]@', $Password);
  
  if($UserName == $specialchars){
    echo 'User Name can contain alpha numeric characters, period, dash or underscore only';
  }
  else {echo 'Login Successful';}
  if (!$specialchars || strlen($password) < 8) {
        echo 'Password must contain atleast 8 characters';
        
      } else {
        echo 'Login Successful!';
      } 
 if (strlen($UserName) < 2){
    echo 'Username must contain atleast 2 characters';
 }
    
?>