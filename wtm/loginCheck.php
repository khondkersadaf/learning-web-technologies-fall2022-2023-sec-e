<?php 
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];


    if($username == "admin" || $password == "admin") {
        //echo "invalid username/password!";
        header('location: home_admin.html');
    }
    if($username == "" || $password == "") {
        //echo "invalid username/password!";
        header('location: login.php?err=null');
    }else{

        $file = fopen('student.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $user = explode("|", $data);
            if($user[0] == $username && $user[1] == $password){
                setcookie('status', 'true', time()+3600, '/');
                //header('location: home_admin.html');
                echo "welcome student";
            }
        }

        //echo "invalid user";
        
    }

    if($username == "" || $password == "") {
        //echo "invalid username/password!";
        header('location: login.php?err=null');
    }else{

        $file = fopen('teacher.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $user = explode("|", $data);
            if($user[0] == $username && $user[1] == $password){
                setcookie('status', 'true', time()+3600, '/');
                //header('location: home_admin.html');
                echo "welcome teacher";
            }
        }

        //echo "invalid user";
        
    }
    //$_POST
?>