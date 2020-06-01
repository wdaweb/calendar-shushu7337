<?php
include_once "com/base.php";
$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,'root',"");
date_default_timezone_set("Asia/Taipei");
session_start();

?>
<?php
$id=$_GET['id'];
$period=$_GET['period'];
del("invoice",$id);

to("list.php?period=".$period);

?>