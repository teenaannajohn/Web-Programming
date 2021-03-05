<html>
<head></head>
<title>customer information</title>
<body>
<h1 style="text-align:center"><u>CUSTOMER INFORMATION</u></h1>
<form method="post" action="customer.php">
<table align="center">
<tr>
<td>Customer Number</td>
<td>:</td>
<td><input type="text" name="c_no"></td></tr>
<tr>
<td>Name of the Customer</td>
<td>:</td>
<td><input type="text" name="c_name"></td></tr>
<tr>
<td>Item Purchased</td>
<td>:</td>
<td><input type="text" name="item_purchased"></td></tr>
<tr>
<td>Mobile Number</td>
<td>:</td>
<td><input type="text" name="mobile_number"></td></tr>
<tr>
<td colspan="2" style="text-align:center"><input type="submit" name="insert" value="insert"></td>

<td colspan="2" style="text-align:center"><input type="submit" name="view" value="view"</td></tr>
</table>
</form>
<?php
$con=mysqli_connect("localhost","20mca052","2765","20mca052");
if(isset($_POST["insert"]))
{
if($con)
{
$c_no=$_POST["c_no"];
$c_name=$_POST["c_name"];
$item_purchased=$_POST["item_purchased"];
$mobile_number=$_POST["mobile_number"];

$qry="insert into customer(c_no,c_name,item_purchased,mob_no) values('$c_no','$c_name','$item_purchased','$mobile_number')";
if(mysqli_query($con,$qry))
{
echo "inserted";
}
}
}
if(isset($_POST["view"]))
{
$qry="select*from customer";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>CUSTOMER DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>Customer Number</th>
<th>Customer Name</th>
<th>Item Purchased</th>
<th>Mobile Number</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res[1];?></td>
<td><?php echo $res[2];?></td>
<td><?php echo $res[3];?></td>
<td><?php echo $res[4];?></td>
</tr>
<?php
}
}
?>
</body>
</html>