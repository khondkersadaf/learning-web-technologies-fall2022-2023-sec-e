<?php
include "../Model/DatabaseConnection.php";
$Username="";
$Username=$_POST["Username"];

if($Username=="")
{
    echo "Username Empty !!";
}
else
{

    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckUsername($conobj,"Users",$Username);
    if ($result->num_rows > 0)
    {
       echo "Username Already Registered";
    }

    else{
    echo "Unique Username";
    }
    $connection->CloseCon($conobj);
}




?>