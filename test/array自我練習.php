<?php

// 學生成績陣列練習

echo"學生成績陣列練習";

$class = array("姓名","國文","英文","數學","地理","歷史");
$num1 = array("judy",95,64,70,90,84);
$num2 = array("amo",88,78,54,81,71);
$num3 = array("john",45,60,68,70,62);
$num4 = array("peter",59,32,77,54,42);
$num5 = array("hebe",71,62,80,62,64);
$num = array($num1,$num2,$num3,$num4,$num5);
echo"<table width='500' border='1'>";
echo"<tr>";
for($i=0;$i<6;$i++){
    echo"<td align='center'>$class[$i]</td>";
}
echo"<tr>";
for($i=0;$i<5;$i++){
    echo"</tr>";
    $item=$num[$i][0];
    echo "<td>$item</td>";
    for($j=1;$j<=5;$j++){
        $item = $num[$i][$j];
        echo"<td>$item</td>";
    }
}
?>