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
echo "</table>";

echo "陣列寫法";
$score=[
    "Judy"=>[
        "國文"=>95,"英文"=>64,"數學"=>70,"地理"=>90,"歷史"=>84
    ],
    "Amo"=>[
        "國文"=>88,"英文"=>78,"數學"=>54,"地理"=>81,"歷史"=>71
    ],
    "John"=>[
        "國文"=>45,"英文"=>60,"數學"=>68,"地理"=>70,"歷史"=>62
    ],
    "Peter"=>[
        "國文"=>59,"英文"=>32,"數學"=>77,"地理"=>54,"歷史"=>42
    ],
    "Hebe"=>[
        "國文"=>71,"英文"=>62,"數學"=>80,"地理"=>62,"歷史"=>64
    ]
    ];
echo "<pre>";print_r($score);echo "</pre>"

?>

<?php

// 九九乘法表用陣列表現
$x=[];
for($i=1;$i<=9;$i++)
{
    for ($j=1;$j<=9;$j++){
        echo  $x[]= $i . "x" . $j . "=".($i*$j) . "<br>";
    }
}
echo "<pre>";print_r($x);echo "<pre>";
?>

<?php
echo "<hr>";
echo "<table width='400' border='1'>";
for($i=0;$i<count($x);$i++){     
    //count 為計算($x)內有多少東西
    echo "<td>" . $x[$i] . " " . "</td>";
    if($i%9==8){
    echo "<tr>" . "<br>" . "</tr>";
    }
}
echo "</table>";

echo "<hr>";
// $a[i]=$a*$b

// foreach 會跑陣列每個數字 foreach ($x as $key => $d)
// $x  $key   $d
// $x[0]  0    '1x1=1'
// $x[1]  1    '1x2=2'
// $x[2]  2    '1x3=3'   以此類推
foreach($x as $key => $d){
    echo $d . " ";
    if($key%9==8){
        echo "<br>";
    }
}  

?>
