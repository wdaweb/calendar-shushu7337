<h4>五百年內的閏年</h4>
<hr>


<?php

$year=[];

for($i=2000;$i<2520;$i++){
    if($i%4 ==0 && ($i%100 !=0 || $i%400==0)){
        echo "閏年";
        $year[]=$i;
    }else{
        echo "平年";
        }
    }
    echo "<br>";

echo "閏年陣列";
echo "<pre>";print_r($year);echo "</pre>";

$testYear=rand(2020,2520);
if(in_array($testYear,$year)){
    echo $testYear . "是閏年";
}else{
    echo $testYear . "是平年";
}

?>