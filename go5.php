<html>
<head>
<title>go5</title>
</head>
<body bgcolor="9370DB">
<?php
$a=$_POST['hssearch6'];
$b=$_POST['passtxt201'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select * from adminrecords where hs='$a'";
if(mysql_query($query_select,$conn))
{
$result=mysql_query($query_select);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
$r=0;
if($row['hs']===$a)
{
if($row['team']==="Pakistan")
{
?>
<form name="highsearch" method="post" action="<?php echo $row['players'];?>.php">
<input type="text" name="passtxt202" value="<?php echo $b;?>"hidden>
<input type="text" name="passtxt203" value="<?php echo $row['players'];?>"hidden>
<input type="image" src="<?php echo $row['players'];?>.JPG" width="450" height="400" onmouseover="thi.src='<?php echo $row['players'];?>.JPG'">
</form>
<?php
}
else
{
echo "Only Pakistan Cricketers";
}
}
}
}
mysql_close($conn);
$conn1=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select1="select hs from adminrecords";
$result1=mysql_query($query_select1,$conn1);
while($row1=mysql_fetch_array($result1,MYSQL_ASSOC))
{
if($a!=$row1['hs'])
{
$found=1;
}
else
{
$found=0;
break;
}
}
if($found===1)
{
echo "Search Invalid";
}
mysql_close($conn1);
?>
<form name="back500" method="post" action="Pakistan.php">
<input type="text" name="passtxt14" value="<?php echo $b;?>"hidden>
<input type="submit" name="h24" value="Back">
</form>
<form name="home60" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $b;?>"hidden>
<input type="submit" name="h60" value="Home">
</form>
</body>
</html>