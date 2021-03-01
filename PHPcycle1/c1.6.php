<html>
<head></head>
<title>session count</title>
<body>
<?php
if(isset($_SESSION["counter"]))
{
$_SESSION["counter"]=+1;
}
else
{
$_SESSION["counter"]=1;
}
echo"you have visited".$_SESSION["counter"]."times";
?>
</body>
</html>