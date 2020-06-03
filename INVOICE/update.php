<?php
include_once "com/base.php" ;

    $id=$_POST['id'];
    $code=$_POST['code'];
    $number=$_POST['number'];
    $period=$_POST['period'];
    $expend=$_POST['expend'];
    $year=$_POST['year'];
$data=[
    'id'=>$id,
    'code'=>$code,
    'number'=>$number,
    'period'=>$period,
    'expend'=>$expend,
    'year'=>$year
];
save("invoice",$data);
echo "<pre>";
print_r($data);
echo "</pre>";
to("list.php?period=".$period);






?>