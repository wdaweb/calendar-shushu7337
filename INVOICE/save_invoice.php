<?php
    include "./com/base.php";
    // 可以將$_POST進來的資料設立新變數來做檢查，避免php混亂
    // 如：
    // $period=htmlspecialchars() trim($_POST['period']);
    // $period=str_replace trim($_POST['period']);
    $sql="insert into invoice (`period`,
    `year`,
    `code`,
    `number`,
    `expend`) values(
        '".$_POST['period']."',
        '".$_POST['year']."',
        '".$_POST['code']."',
        '".$_POST['number']."',
        '".$_POST['expend']."')";
    echo $sql;
    $res=$pdo->exec($sql);

    if($res==1){
        echo "新增成功";
    }else{
        echo "新增失敗";
    }

?>
