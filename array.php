<?php
//陣列
//$a=arryay();
// $a=[1,2,3,4];
// $a=["Jash","Bull","Ray","Kotu"];
// $a=["Jaybu"=>22,"Lin"=>43,"Pei"=>33];


// $a[]=11;
// $a[]=23;
// $a[強]=433;

// $a["大強"]=55;
// $a["大恩"]=66;
// $a["大華"]=77;

// print_r($a);

// echo "<pre>";print_r($a);"</pre>";
// echo "<pre>";print_r($b);"</pre>";
// echo $a[Pei];
// echo "<br>";
// echo $a["Jaybu"];

// echo $a[2];
// echo $a["大華"];

//陣列的維度

// $a=[[1,2,3],[4,5,6],[7,8,9]];
$a=["小明"=>["身高"=>160,"體重"=>60,"座號"=>1],
    "小強"=>["身高"=>189,"體重"=>40]
];
$b="AAAAA";
echo "<pre>";print_r($a);echo "</pre>";
echo "<hr>";
// 陣列函式
echo "count(\$a)=>";
echo count($a);
echo "<hr>";
echo is_array($a);
echo "<hr>";
echo "in_array(\$a)=>";
echo in_array(["身高"=>160,"體重"=>60,"座號"=>1],$a);
echo "<hr>";

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