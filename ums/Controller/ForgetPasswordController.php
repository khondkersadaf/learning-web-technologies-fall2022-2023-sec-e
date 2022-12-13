<?php 
include "../Model/DatabaseConnection.php";
$errPhone=$errPassword="";
$error=false;
if (isset($_POST['submit'])) {


    $Phone=$_REQUEST["phone"];
    $Password=$_REQUEST["password"];


    if($Phone==""){
        $errPhone="Must provide your phone number";
        $error=true;
    }
    else{
        $errPhone="";
        $error=false;
    }

    if($Password==""){
        $errPassword="Provide a new password";
        $error=true;
    }
    else{
        $errPassword="";
        $error=false;
    }

    if($error==false){
        $connection = new DatabaseConnection();
        $conobj=$connection->OpenCon();


        $userQuery=$connection->UpdatePassword($conobj,"Users",$Phone,$Password);
        if($userQuery==TRUE)
        {
            echo "Password Changed successful"; 
        }
        else
        {
            echo "Phone Number not Found";    
        }
        $connection->CloseCon($conobj);
    }
    

}




?>