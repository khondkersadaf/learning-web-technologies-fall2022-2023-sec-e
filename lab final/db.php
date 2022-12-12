<?php 

    function Connect()
    {
           $dbhost = "localhost";
           $dbuser = "root";
           $dbpass = "";
           $db = "db";
    
           $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
           return $conn;
    }

 function Registration($conn,$Id,$Password,$Name,$Email,$Type){
    $sql= "Insert into users (Id,Password,Name,Email,Type) values('{$Id}','{$Password}','{$Name}','{$Email}','{$Type}')";

    $result = mysqli_query($conn, $sql);
    if($result==true){
        echo "Registration Success";
        header("location: login.php");
    }
    else{
        echo "Registration Failed";
    }
}
 ?>