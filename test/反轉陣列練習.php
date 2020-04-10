<h4>反轉陣列練習</h4>
<hr>

<?php
    $a=[2,4,6,1,8,9,5];
    echo "<pre>";print_r($a);echo "</pre>";
    $len=count($a);
    for($i=0;$i<$len/2;$i++){
        $tmp=$a[$i];
        $a[$i]=$a[$len-$i-1];
        $a[$len-$i-1] = $tmp;
    }

    echo "<pre>";print_r($a);echo "</pre>";


?>

<h4>交換變數</h4>
<hr>
$a=5<br>
$b=10<br>
<?php

$a=5;
$b=10;

$tmp=$a;
$a=$b;
$b=$tmp;

echo '$a=' . $a . "<br>";
echo '$b=' . $b;