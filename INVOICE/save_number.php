<?php

include "com/base.php";
// 基本上這裡不會有顯示任何東西
echo "<pre>";
print_r($_POST);
echo "</pre>";
$table="award_number";
$year=$_POST['year'];
$period=$_POST['period'];

// 特別獎
$num1=$_POST['num1'];
$data=[
    "year"=>$year,
    "period"=>$period,
    "number"=>$num1,
    "type"=>1,
];  

save($table,$data); 

$num2=$_POST['num2'];
$data=[
    "year"=>$year,
    "period"=>$period,
    "number"=>$num2,
    "type"=>2,
];  
save($table,$data); 

// 這裡有多筆,所以使用foreach
$num3=$_POST['num3'];
foreach($num3 as $num){
$data=[
    "year"=>$year,
    "period"=>$period,
    "number"=>$num,
    "type"=>3,
];  
save($table,$data); 
}
// 每一個迴圈取出結束後，儲存

// 這裡有多筆,所以使用foreach
$num4=$_POST['num4'];
foreach($num4 as $num){
$data=[
    "year"=>$year,
    "period"=>$period,
    "number"=>$num,
    "type"=>4,
];  
save($table,$data); 
}

// 每一個迴圈取出結束後，儲存

to("invoice.php");   
?>


<!-- 補充 -->
<!-- 
年份     year
期數     period
特別獎   num1
特獎     num2
頭獎     num3  可能多筆
增開六獎  num4 可能多筆 且只有三碼 -->