<?php
require_once  "functions.php";
include "../Model/DatabaseConnection.php";
    
$firstName = "";
$firstNameError = "";
$lastName = "";
$lastNameError = "";
$gender = "";
$genderError = "";
$dob = "";
$dobError = "";
$presentAddress = "";
$presentAddress_error = "";
$permanentAddress = "";
$permanentAddress_error = "";
$phone = "";
$phoneError = "";
$email = "";
$emailError = "";
$department = "";
$departmentError = "";
$userName = ""; 
$userName_error = "";
$password = "";
$passwordError = "";
$confirmPassword = "";
$confirmPasswordError = "";
$type = "";
$type_error = "";
    $errors = array();

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        //Profile Information
        $firstName = $_REQUEST["first_name"];
        $lastName = $_REQUEST["last_name"];
        $gender = $_REQUEST["gender"];
        $dob = $_REQUEST["dob"];
        $presentAddress = $_REQUEST["present_address"];
        $permanentAddress = $_REQUEST["permanent_address"];
        $phone = $_REQUEST["phone"];
        $email = $_REQUEST["email"];
        $department = $_REQUEST["department"];
        $userName = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $confirmPassword = $_REQUEST["confirm_password"];
        $type = $_REQUEST["type"];
        //$firstName = isset($_POST["first_name"]) ? test_input($_POST["first_name"]) : "";
        //$lastName = isset($_POST["last_name"]) ? test_input($_POST["last_name"]) : "";
        //$gender = isset($_POST["gender"]) ? test_input($_POST["gender"]) : "";
       // $dob = isset($_POST["dob"]) ? test_input($_POST["dob"]) : "";
        //$presentAddress = isset($_POST["present_address"]) ? test_input($_POST["present_address"]) : "";
       // $permanentAddress = isset($_POST["permanent_address"]) ? test_input($_POST["permanent_address"]) : "";
       // $phone = isset($_POST["phone"]) ? test_input($_POST["phone"]) : "";
       // $email = isset($_POST["email"]) ? test_input($_POST["email"]) : "";
       // $department = isset($_POST["department"]) ? test_input($_POST["department"]) : "";
        //Login Credentials
       // $userName = isset($_POST["username"]) ? test_input($_POST["username"]) : "";
       // $password = isset($_POST["password"]) ? test_input($_POST["password"]) : "";
       // $confirmPassword = isset($_POST["confirm_password"]) ? test_input($_POST["confirm_password"]) : "";
       // $type = isset($_POST["type"]) ? test_input($_POST["type"]) : "";
        
        if(empty($firstName)) {
           $firstNameError = "First Name Cannot Be Empty";
        }
       else {
        $firstNameError = "";
       }

        if(empty($lastName)) {
            $lastNameError = "Last Name Cannot Be Empty";
        }
        else {
            $lastNameError = "";
        }
        if(empty($gender)) {
            $genderError = "Please Select Gender";
        }
        else {
            $genderError = "";
        }
        if(empty($dob)) {
            $dobError = "Date of Birth is required";
        }
        else {
            $dobError = "";
        }

        if(empty($presentAddress)) {
            $presentAddress_error = "Please Enter Present Address";
        }
        else {
            $presentAddress_error = "";
        }
        if(empty($permanentAddress)) {
            $permanentAddress_error = "Please Enter Permanent Address";
        }
        else {
            $permanentAddress_error = "";
        }

        if(empty($phone)) {
           $phoneError = "Phone Number is required";
        }
        else{
            $phoneError = "";
        }
        if(empty($email)) {
            $emailError = "Please Enter a Valid Email Address";
        }
        else{
            $emailError = "";
        }
        if(empty($department)) {
            $deparmentError = "Please Select Department";
        }
        else{
            $deparmentError = "";
        }
        if(empty($userName)) {
            $userName_error = "Please Enter Username";
         } 
       
         else{
            $userName_error = "";
        }
        if(empty($password)) {
            $passwordError = "Please Enter Password";
        }
        else{
            $passwordError = "";
        }
        if(empty($confirmPassword)) {
            $confirmPasswordError = "Please Re-Enter Password";
        } 
        else if($confirmPassword!=$password) {
            $confirmPasswordError = "Confirm Password doesn't match";
        }
        else{
        $confirmPasswordError = "";
        }
        if(empty($type)) {
            $type_error = "Please Select User Type";
         }
         else{
            $type_error = "";
        }
        if(empty($errors)) {

            $connection=new DatabaseConnection();
            $conobj=$connection->OpenCon();
            $userQuery=  $connection->InsertData($conobj,"Users",$firstName,$lastName,$gender,$dob,$presentAddress,$permanentAddress,$phone,$email,$department,$userName,$password,$type);

            $connection->CloseCon($conobj);



            // $user = array(
            //     "firstName" => $firstName,
            //     "lastName" => $lastName,
            //     "gender" => $gender,
            //     "dob" => $dob,
            //     "presentAddress" => $presentAddress,
            //     "permanentAddress" => $permanentAddress,
            //     "phone" => $phone,
            //     "email" => $email,
            //     "userName" => $userName,
            //     "password" => $password
            // );
            // if(appendUser($user)) {
            //     unset($user["password"]);
            //     $_SESSION["bnk_register"] = $user;
            //     header("Location: login.php");
            //     exit(0);
            // }
        }
    }
?>