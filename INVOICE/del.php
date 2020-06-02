<?php
include_once "com/base.php";
?>
<?php
$id=$_GET['id'];
$period=$_GET['period'];
del("invoice",$id);

to("list.php?period=".$period);

?>