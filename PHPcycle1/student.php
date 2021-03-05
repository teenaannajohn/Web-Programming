<html>
<head></head>
<title<Student Registration</title>
<body>
<form method="post" action="student.php" >
<h1 style="text-align:center"><u>STUDENT REGISTRATION FORM</u></h1>

<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="sid"></td></tr>
<tr>
<td>Name of Student</td>
<td>:</td>
<td><input type="text" name="name"></td></tr>
<tr>
<td>BRANCH</td>
<td>:</td>
<td><input type="text" name="branch"></td></tr>
<tr>
<td>MARKS OBTAINED</td>
<td>:</td>
<td><input type="text" name="mark"></td></tr>
<tr>
<td>&nbsp;</td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" name="insert" value="insert"></td></tr>
</table>
</form>
<div align="center">
<form method="post" action="student.php">
<h1 style="text-align:center"><u>UPDATE DATA</u></h1>
<input type="text" name="search_id" >
<input type="submit" name="search" value="Search">
<input type="submit" name="view" value="view">
</form>
</div>
<?php
$con=mysqli_connect("localhost","20mca052","2765","20mca052");
if(isset($_POST['insert']))
{
if($con)
{
$sid=$_POST["sid"];
$sname=$_POST["name"];
$branch=$_POST["branch"];
$mark=$_POST["mark"];

$qry="insert into student(s_id,s_name,branch,mark) values('$sid','$sname','$branch','$mark')";
if(mysqli_query($con,$qry))
{
echo "inserted";
}
}
}
if(isset($_POST["search"]))
{
$id=$_POST["search_id"];
$qry="select*from student where id='$id'";
$data=mysqli_query($con, $qry);

?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>Sl.No</th>
<th>Student ID</th>
<th>Student Name</th>
<th>Branch</th>
<th>Mark</th>
</tr>
<?php
$res=mysqli_fetch_array($data);
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['s_id'];?></td>
<td><?php echo $res['s_name'];?></td>
<td><?php echo $res['branch'];?></td>
<td><?php echo $res['mark'];?></td>
<td><a href="update.php?id=<?php echo $res['id'];?>">update</a></td>
<td><a href="delete.php?id=<?php echo $res['id'];?>">Delete</a></td>
</tr>
</table>
<?php
}

if(isset($_POST["view"]))
{
$qry="select*from student";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>Sl.No</th>
<th>Student ID</th>
<th>Student Name</th>
<th>Branch</th>
<th>Mark</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['s_id'];?></td>
<td><?php echo $res['s_name'];?></td>
<td><?php echo $res['branch'];?></td>
<td><?php echo $res['mark'];?></td>
</tr>
<?php
}
}
?>
</table>



</body>
</html>
