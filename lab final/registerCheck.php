<?php 
    include("db.php");
   $error=false;
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $Id = $_REQUEST['id'];
        $Password = $_REQUEST['password'];
        $Name = $_REQUEST['name'];
        $Email = $_REQUEST['email'];
    	$Type = $_REQUEST['type'];



    

if($error==false){
        $conn=Connect();
        $result=Registration($conn,$Id,$Password,$Name,$Email,$Type);

	}

}

?>