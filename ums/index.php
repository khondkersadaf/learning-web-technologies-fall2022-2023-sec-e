<?php
require_once "Controller/functions.php";

session_start();
if(isset($_SESSION["ums_login"])) {
    header("Location: dashboard.php");
} else {
    header("Location: View/login.php");
}