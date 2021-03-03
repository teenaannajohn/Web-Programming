<html>
<head></head>
<title>Student Registration</title>
<body>
<?php
$con=mysqli_connect("localhost","20mca052","2765","20mca052");
if($con)
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
<td><a href="update.php?id=<?php echo $res['id'];?>">update</a></td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>
