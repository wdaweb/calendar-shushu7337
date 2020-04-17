<?php

// $weight=$_GET['weight'];
// $height=$_GET['height'];
//isset() or empty()
if(isset($_POST['weight']) && isset($_POST['height'])){

    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $BMI= $weight / ($height / 100 * $height / 100);
    echo "輸入的身高是:".$height."<br>";
    echo "輸入的體重是:".$weight."<br>";
    
    if(!empty($height) || !empty($weight) ){
        echo "BMI為:". round($BMI,2) . "<br>";
    }else{
        echo "<span style='color:red'>請輸入正確身高體重值</span>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單傳值</title>
</head>
<body>
    <!-- form>input:text*2+input.submit*1 -->
    <!-- ↑在form表單有兩個文字要輸入&一個送出按鈕↑ -->
    <!-- 在action內輸入要傳給誰 -->
    <h4>BMI計算機</h4>
    <form action="?" method="post">
        身高<input type="number"  min="0" max="999" name="height" id=""><br>
        體重<input type="number"  min="0" max="999" name="weight" id=""><br>
        <input type="submit" value="送出">
    </form>
</body>
</html>