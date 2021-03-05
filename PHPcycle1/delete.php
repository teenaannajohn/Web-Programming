<?php
$con=mysqli_connect("localhost","20mca052","2765","20mca052");
$id=$_GET["id"];
if($con)
{

$qry1="delete from student where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
} 
}
?>