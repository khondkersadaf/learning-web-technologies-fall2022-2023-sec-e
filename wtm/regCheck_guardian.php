<?php 
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == "" || $email == "") {
        header('location: register_guardian.php?err=null');
    }else{
        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
        $_SESSION['user'] = $user;
        $user = $username."|".$password."|".$email."\r\n";
        $file = fopen('guardian.txt', 'a');
        fwrite($file, $user);
        fclose($file);
        header('location: login.php');
    }
?>