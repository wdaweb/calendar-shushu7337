<h4>威力彩號碼 </h4>
<hr>
<?php
//亂數函式
$num=[];

for($i=0;$i<6;$i++){
    $num[]=rand(1,49);
}
foreach($num as $n){
    echo $n . ",";
}
?>

<?php
$lottery=[];
for($i=1;$i<50;$i++){
    $lottery[]=$i;
}
$xx=array_rand($lottery,6);
for($j=0;$j<=6;$j++){
    echo $lottery[$xx] . ',';
}

?>