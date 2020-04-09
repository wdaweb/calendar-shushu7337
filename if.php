<?php
// if 判斷式
echo "---IF 判斷式---<br>";
    $a=50;
   if ($a>=60) {
       echo"PASS";
   } else {
       echo"FAIL";
   }
   $result="";
   if($a>=60){
       $result= "Pass";
   }
   else{
       $result= "Fail";
   }
   echo $result;
   echo"<hr>";


// 三元運算子
echo "---三元運算子---<br>";
echo ($a>=60)?"Pass":"Fail";
echo "<br>";


//判斷成績等級
echo "---判斷成績等級---<br>";
    $a=0;
   if ($a>=90) {
       echo"A";
   } else if ($a>=75) {
       echo"B";
   } else if ($a>=60) {
       echo"C";
   } else   {
       echo"D";
   }
   
    // //100~90 A
    //   90~75 B
    //   75~60 C
    //   59~0 D
    echo"<hr>";
    $a=70;
      if ($a>=90&&$a<=100){
          echo "A";
      }
      else{
          if($a>=75&&a<=90){
              echo "B";
          }
          else {
              if($a>=60&&$a<75){
                  echo "C";
              }
              else{
                  echo "D";
              }
          }
      }
    
    echo "<hr>";
    echo "---閏年判斷---<br>";
    //   閏年判斷
    // 1.公園年份除以4不可整除，為平年。
    //   **->公園年份除以4可整除，為閏年。**
    // 2.公元年份除以4可整除但除以100不可整除，為閏年。
    //   **->公元年份除以4可整除，<並且>除以100不可整除，為閏年。**
    // 3.公元年份除以100可整除但除以400不可整除，為平年。
    //   **->公元年份除以4可整除，<並且>(除以100不可整除，<或>除以400可整除)，為閏年。**
    // 4.公元年份除以400可整除但除以3200不可整除，為閏年。


    // <1>
    echo "1.公園年份除以4不可整除，為平年。<br>";

    $year=2054;
    echo "西元年:".$year;
    echo "<br>";
    // type 1
    echo "type 1: 以平年為條件<br>";
    if($year%4 !=0 ){
        echo "平年";
    }
    else{
        echo "潤年";
    }
    echo "<br>";
    // type 2
    echo "type 2: 以閏年為條件<br>";

    if($year%4 ==0){
        echo "潤年";
    }
    else{
        echo "平年";
    }
    
    echo"<br>";
    // <2>
    echo "2.公元年份除以4可整除但除以100不可整除，為閏年。<br>";
    echo "type 1: 以閏年為條件<br>";

    if($year%4 ==0 && ($year%100 !=0 || $year%400 ==0) ){
        echo "潤年";
    }
    else{
        echo "平年";
    }
    // type 2
    echo "<hr>";
    echo "type 2: 以平年為條件<br>";

    if($year%4 !=0 ||($year%100 ==0 && $year%400 !=0)){
        echo "平年";
    }
    else{
        echo "閏年";
    }


    echo "<hr>";

    $a=90;
   if ($a>=90) {
       $a="A";
   } else if ($a>=75) {
       $a="B";
   } else if ($a>=60) {
       $a="C";
   } else   {
       $a="D";
   }
   echo "<br>";
   echo "---switch 搭配應用--- <br>";
    switch($a){
        case "A":
            echo "Score Grade: A .";
            echo "<br>";
            echo "very, good keep going.";
        break;
        case "B":
            echo "Score Grade: B .";
            echo "<br>";
            echo "nice play, but can be grater.";
        break;
        case "C":
            echo "Score Grade: C .";
            echo "<br>";
            echo "be harder";
        break;
        case "D":
            echo "Score Grade: D .";
            echo "<br>";
            echo "come' on.";
        break;
        }
?> 