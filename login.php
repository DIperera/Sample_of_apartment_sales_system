<?php
$name = $_POST["name"];
$pass = $_POST["pass"];

session_start();
if($name==="ishira" && $pass==="123"){
    $_SESSION["username"] = $name;
    header("Location:apartment_listing.php");
} else {
    header("Location:login.html");
}
?>