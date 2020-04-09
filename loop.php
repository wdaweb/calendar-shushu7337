<style>
table{
    border:1px solid #999;
    padding:10px;
}
table td{
    padding:5px;
    text-align:center;
    border:1px solid #eee;
}
table tr:nth-child(1),table td:nth-child(1){
    background:#aaa;
}

</style>

<?php
//for loop
    echo "for loop: <br>";
// for(初始值;判斷式;遞增值)
    for($i=1;$i<10;$i++){
            echo "hello" . $i . "<br>";
        }
    
   

//99乘法表
// type 1
    for($i=1;$i<=9;$i++){

        echo "<br>";
            for($j=1;$j<=9;$j++){
            
                echo $i. "x" . $j . " = " . ($i * $j) . "<br>";
            }
    }
    echo "<br>";
// type 2
    echo "<table border='1'>";
    
    for($j=0;$j<10;$j++){
        if($j==0){
            echo "<tr><td></td>";
        }
        else{
            echo "<td>" . "$j" . "</td>" ;
        }
    }
    for($j=1;$j<10;$j++){  
        echo "<tr>";   
        echo "<td>" . $j . "</td>";
        
        for($i=1;$i<10;$i++){
            echo "<td>" . ($i *$j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>