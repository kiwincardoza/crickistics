<html>
<head>
<title> Sehwagins </title>
</head>
<body>
<?php
$a=$_POST['virucomment'];
$b=$_POST['viruinp3'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('comments');
$query_insert="insert into viru122comments(user_name3,comment1) values('$b','$a')";
if($a==NULL)
{
echo "Check your comment";?>
<form name="viruback" method="post" action="sehwag122.php">
<input type="text" name="viruinp1" value="<?php echo $b;?>" hidden>
<input type="submit" name="virusub" value="Back">
</form>
<?php
}
else
{
if(mysql_query($query_insert,$conn))
{
echo "Comment added successfully";
?>
<form name="viruback1" method="post" action="sehwag122.php">
<input type="text" name="viruinp1" value="<?php echo $b;?>" hidden>
<input type="submit" name="virusub1" value="Back">
</form>
<?php
}
else
{
echo "Not successful......Only one comment allowed";?>
<form name="viruback2" method="post" action="sehwag122.php">
<input type="text" name="viruinp1" value="<?php echo $b;?>"hidden>
<input type="submit" name="virusub2" value="Back">
</form>
<?php
}
}
mysql_close($conn);
?>
</body>
</html>