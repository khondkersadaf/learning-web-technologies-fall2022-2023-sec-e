<?php
include "../Model/DatabaseConnection.php";

    session_start();
    if(isset($_SESSION["ums_login"])) {
        header("Location: dashboard.php");
        exit(0);
    }
    
    // if(isset($_SESSION["type"])) {
    //     header("Location: studentDashboard.php");
    //     exit(0);
    // }
    // if($_SERVER['REQUEST_METHOD'] === "POST") {
    //     //Profile Information
    //     $type = $_REQUEST["type"]; }
    
    $errors = array();

    $registered = array();

    if(isset($_SESSION["ums_register"])) {
        $registered = $_SESSION["ums_register"];
        unset($_SESSION["ums_register"]);
    }

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $userName = isset($_POST["username"]) ? test_input($_POST["username"]) : "";
        $password = isset($_POST["password"]) ? test_input($_POST["password"]) : "";
        //$type = isset($_POST["type"]) ? test_input($_POST["type"]) : "";
    }
        if(empty($userName)) {
            $errors["username"] = "Please Enter Username";
        } 
        
        // else if(!in_array($userName, getUserNames())) {
        //     $errors["username"] = "Username doesn't match";
        // }

        if(empty($password)) {
            $errors["password"] = "Please Enter Password";
        } 
        // else if(!isset($errors["username"]) && !verifyPassword($userName, $password)) {
        //     $errors["password"] = "Password doesn't match";
        // }

        if(empty($errors)) {
            

            $connection=new DatabaseConnection();
            $conobj=$connection->OpenCon();
            $result=$connection->Login($conobj,"users",$userName,$password);
            
            if ($result->num_rows > 0)
            {
               while($row = $result->fetch_assoc())
               {    
                    // if($row["Type"] == "student"){
                    //     $_SESSION["type"] = "student";
                    // }
                    // if($row["Type"] == "teacher"){
                    //     $_SESSION["type"] = "teacher";
                    // }
                    // if($row["Type"] == "admin"){
                    //         $_SESSION["type"] = "admin";
                    // }
                    echo "Name: " . $row["FirstName"]. " - Email: " . $row["Email"]."Username : ".$row["Username"]."<br>";
                    $_SESSION['FName']= $row["FirstName"];
                    $_SESSION["LName"]=$row["LastName"];
                    $_SESSION["T"]=$row["Type"];
                    $_SESSION['Username']=$row["Username"];
                    $_SESSION['Email']=$row["Email"];
                   
                }

        

            }
          $connection->CloseCon($conobj);
        
        //   if($username == "admin" || $password == "admin") {
        //     echo "invalid username/password!";
        //    header('location: ../View/adminDashboard');
        // }
            // $users = getUsers();
            // $user = $users[$userName];
            // unset($user["password"]);
            // $_SESSION["type"] = $user;
            // header("Location: ../View/studentDashboard.php");
            // exit(0);
            
        //     $users = getUsers();
        //     $user = $users[$userName];
        //     unset($user["password"]);
        //     $_SESSION["type"] = "student";
        //     header("Location: ../View/studentDashboard.php");
        //     exit(0);

        //     $users = getUsers();
        //     $user = $users[$userName];
        //     unset($user["password"]);
        //     $_SESSION["type"] = "teacher";
        //     header("Location: ../View/teacherDashboard.php");
        //     exit(0);
        // }
        }
?>