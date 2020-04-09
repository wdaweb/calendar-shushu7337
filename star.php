<?php
// 迴圈圖形練習
echo "<hr>";
echo "直角三角型";
$n=6;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<$i;$j++){
        echo "$";
    }
    echo "<br>";
}





$n=6;
for($i=1;$i<=$n;$i++){ //控制層數
    for($j=1;$j<$i;$j++){ //控制每層的 “*” 數
        echo "*";
    }
    echo "<br>";    
}

echo "<hr>";
echo "倒直角三角形";
echo "<br>";
$n=6;

for($i=1;$i<=$n;$i++){
    for($j=6;$i<$j;$j--){
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";
echo "正三角形";
echo "<br>";

$n=6; 

for($i=1;$i<=$n;$i++){ 
    for($k=0;$k<$n-$i;$k++){ 
        echo "&nbsp&nbsp"; //輸出空格 
    } 
    for($j=1;$j<=($i-1)*2+1;$j++){ 
        echo "*"; 
    } 
    echo "<br>"; 
}

    echo "<hr>";
    echo "菱形";
    echo "<br>";

    $n=9;
for($i=1;$i<=$n;$i++){ 
    for($k=1;$k<=$n-$i;$k++){ 
            echo "&nbsp&nbsp"; //輸出空格  
    } 
    for($j=1;$j<=($i-1)*2+1;$j++){ 
            echo "*";  
    }
        echo "<br>";
}
    for($i=$n-1;$i>0;$i--){
        for($k=1;$k<=$n-$i;$k++){
                echo "&nbsp&nbsp";
        }
        for($j=1;$j<=($i-1)*2+1;$j++){
                echo "*";
        }
            echo "<br>";
    }
// 解法2
echo "<hr>";

for($i=0;$i<11;$i++){
    // 利用判斷式來決定t的值，再用t的值來決定空白及星星的數量
    if ($i<=4){
        $t=$i;
    }else{
        $t=8-$i;
    }
    for($k=0;$k<(4-$t);$k++){ 
            echo "&nbsp&nbsp"; //輸出空格  
    } 
    for($j=0;$j<($t*2+1);$j++){ 
            echo "*";  
    }
        echo "<br>";
}

    echo "<hr>";
    echo "矩形";
    echo "<br>";

for($i=0;$i<5;$i++){
    if($i==0 || $i==4){   
        for($j=0;$j<5;$j++){
            echo "*";
        }
    }else{
        for($k=0;$k<5;$k++){
            if($k==0 || $k==4){
                echo "*";
            }else{
               echo "&nbsp;&nbsp;";
            }
        }   
    }
    echo"<br>";
}

echo "<hr>";
    echo "矩形II";
    echo "<br>";

for($i=0;$i<5;$i++){
    if($i==0 || $i==4){   
        for($j=0;$j<5;$j++){
            echo "*";
        }
    }else{
        for($k=0;$k<5;$k++){
            if($k==$i || $k==(4-$i)){
                echo "*";
            }else{
               echo "&nbsp;&nbsp;";
            }
        }   
    }
    echo"<br>";
}

//矩形

$n =11;
echo "<hr>";
    echo "矩形 帶入變數";
    echo "<br>";

for($i=0;$i<$n;$i++){
    if($i==0 || $i==($n-1)){   
        for($j=0;$j<$n;$j++){
            echo "*";
        }
    }else{
        for($k=0;$k<$n;$k++){
            if($k==0 || $k==($n-1) || $k==$i || $k==($n-$i-1)){
                echo "*";
            }else{
               echo "&nbsp;&nbsp;";
            }
        }   
    }
    echo"<br>";
}
?>