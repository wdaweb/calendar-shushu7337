<h4>威力彩號碼 </h4>
<hr>
<?php
//亂數函式
$num=[];

for($i=0;$i<6;$i++){
    $num[]=rand(1,49);
}
echo "<pre>";print_r($num);echo "</pre>";
for($i=0;$i<6;$i++){
    for($j=0;$j<6;$j++){
        if($i!=$j && $num[$j]==$num[$i]){
            // unset($num[$j]);
            // array_splice($num,$j,1);
            $num[$j]=rand(1,49);
        }
    }
}
foreach($num as $n){
    echo $n . ",";
}

echo "<pre>";print_r($num);echo "</pre>";
echo "<hr>";
?>
<?php
$num=[];
while(count($num)<6){
    if(count($num)>0){
        $tmp=rand(1,38);

        if(!in_array($tmp,$num)){
            $num[]=$tmp;
        }
    }else{
        $num[]=rand(1,38);
    }
}
$num[]=rand(1,8);
foreach($num as $n){
    echo $n;
    echo ",";
    }
    echo "<br>";
    echo "<pre>";print_r($num);echo "</pre>";



?>
