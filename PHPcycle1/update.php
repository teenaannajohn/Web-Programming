<html>
<head></head>
<title<Student Registration</title>
<body>
<?php 
 $id=$_GET['id'];
$con=mysqli_connect("localhost","20mca052","2765","20mca052");
$qry="select*from student where id='$id'";
$res=mysqli_query($con, $qry);
$r=mysqli_fetch_array($res);
?>
<form method="post" action="update_process.php" >
<h1 style="text-align:center"><u>STUDENT REGISTRATION FORM</u></h1>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="sid" value="<?php echo $r['s_id'];?>"></td></tr>
<tr>
<td>Name of Student</td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $r['s_name'];?>"></td></tr>
<tr>
<td>BRANCH</td>
<td>:</td>
<td><input type="text" name="branch" value="<?php echo $r['branch'];?>"></td></tr>
<tr>
<td>MARKS OBTAINED</td>
<td>:</td>
<td><input type="text" name="mark" value="<?php echo $r['mark'];?>"></td></tr>
<tr>
<td>&nbsp;</td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="update"></td></tr>
</table>
</form>

</body>
</html>
