<html>
<head>
<title>Delete</title>
</head>
<body>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select user_name from createaccount1";
$result=mysql_query($query_select);
?>
<form name="delsel" method="post" action="delete1.php">
<select name="disp">
<?php
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
?>
<option> <?php echo $row['user_name'];?> </option>
<?php
}
?>
</select>
<input type="submit" name="delsel1" value="Delete">
</form>
<form name="delsel2" action="adminhome.php">
<input type="submit" name="delsel3" value="Back">
</form>
</body>
</html>