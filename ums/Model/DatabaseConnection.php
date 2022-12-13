<?php
class DatabaseConnection{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "ums";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }




 function Login($conn,$table,$Username,$password)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE Username='". $Username."' AND Password='". $password."'");

        if ($result->num_rows > 0)
        {
            echo "Login Successful <br>";
        }
        else {
        echo "Login Failed !<br>";
        }
    return $result;
}




function CheckUsername($conn,$table,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Username like '".$User."' ");
    return $result;
}

function CheckPhone($conn,$table,$Phone)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Phone like '".$Phone."' ");
    return $result;
}

function ShowData($conn,$table,$Email,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $Email."' AND Username='". $User."'");
    return $result;
}

function ShowData2($conn,$table,$Email)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email like '%".$Email."%' ");
    return $result;
}
//
 


 function InsertData($conn,$table,$FirstName,$LastName,$Gender,$DOB,$PresentAddress,$PermanentAddress,$Phone,$Email,$Department,$Username,$Password,$Type)
 {
    $check=false;
    $stmt=$conn->prepare("INSERT INTO Users (FirstName,LastName,Gender,DOB,PresentAddress,PermanentAddress,Phone,Email,Department,Username,Password,Type) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)"); 
    $stmt->bind_param("ssssssssssss",$FirstName,$LastName,$Gender,$DOB,$PresentAddress,$PermanentAddress,$Phone,$Email,$Department,$Username,$Password,$Type);
    if($stmt->execute())
    {
        echo "User Added Successfully!!";
        $check=true;
    }
    else 
    {
        echo "Already have an account!!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
    return $check;
  
 }




 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
return $result;
 }



///$conobj,"student",$_SESSION["Email"],$Name,$Email,$User,$Phone,$Address,$Var_Gender,$Date
 function UpdateUser($conn,$table,$FirstName,$LastName,$Gender,$DOB,$PresentAddress,$PermanentAddress,$Phone,$Email,$Username,$Password)
 {
     $sql = "UPDATE $table SET FirstName='$FirstName',LastName='$LastName',Gender='$Gender',DOB='$DOB',PresentAddress='$PresentAddress',PermanentAddress='$PermanentAddress',Phone='$Phone',Email='$Email',Password='$Password' WHERE Username='$Username'";
   //$stmt->execute()
     if ($conn->query($sql) === TRUE) {
       
        $result= TRUE;
    } 
    else {
        $result= FALSE ;
        
    }
    return  $result;
 }

 function UpdatePassword($conn,$table,$Phone,$Password)
 {
    $result1 = $conn->query("SELECT * FROM  $table Where Phone='$Phone'");
    $result=false;
    if ($result1->num_rows > 0)
    {
        $sql = "UPDATE $table SET Password='$Password' WHERE Phone='$Phone'";
        if ($conn->query($sql) === TRUE) {
          
           $result= TRUE;
       } 
       else {
           $result= FALSE;
           
       }
    }

     
    return  $result;
 }
 


function CloseCon($conn)
 {
    $conn -> close();
 }
}
?>