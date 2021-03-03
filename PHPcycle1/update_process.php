
<?php
$con=mysqli_connect("localhost","20mca052","2765","20mca052");
if($con)
{
$id=$_POST["id"];
$sid=$_POST["sid"];
$sname=$_POST["name"];
$branch=$_POST["branch"];
$mark=$_POST["mark"];

$qry1="update student set s_id='$sid',s_name='$sname',branch='$branch',mark='$mark' where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data updated successfully<br>";
} 
}
?>