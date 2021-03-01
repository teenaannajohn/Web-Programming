<?php
$username=$_POST["username"];
$password=$_POST["password"];
if($username=="phpusername" && $password=="phppassword")
{
session_start();
$_SESSION["Login"]="YES";
echo"<h1>YOU HAVE ENTERED CORRECT USERNAME AND PASSWORD</h1>";
}
else
{
session_start();
$_SESSION["Login"]="NO";
echo"<h1>INCORRECT USERNAME AND PASSWORD</h1>";
}
?>