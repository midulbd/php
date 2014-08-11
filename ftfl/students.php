<!doctype html>
<html>

<head>
 <title>Student Entry Result</title>
 
</head>

<body>
<div>
<?php
//var_dump($_POST);

$name = $_POST['name'];
echo $name;
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('ftfl02',$connect);


$query = "insert into students(name) values ('$name')";
$result = mysql_query($query);
if($result)
{
 echo "Data inserted, thank you";
}
?>
</div>
</body>
</html>