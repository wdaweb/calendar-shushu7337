<?php
    include "com/base.php";
    // 可以將$_POST進來的資料設立新變數來做檢查，避免php混亂
    // 如：
    // $period=htmlspecialchars() trim($_POST['period']);
    // $period=str_replace trim($_POST['period']);
    
    
    // $sql="insert into invoice (`period`,
    // `year`,
    // `code`,
    // `number`,
    // `expend`) values(
    //     '".$_POST['period']."',
    //     '".$_POST['year']."',
    //     '".$_POST['code']."',
    //     '".$_POST['number']."',
    //     '".$_POST['expend']."')";
    // echo $sql;
    // $res=$pdo->exec($sql);

    $data=[
      'period'=>$_POST['period'],
      'year'=>$_POST['year'],
      'code'=>$_POST['code'],
      'number'=>$_POST['number'],
      'expend'=>$_POST['expend'],
    ];
    save("invoice",$data);
    // $res=save("invoice",$data);
  
    // to("index.php");
    
    
    // if($res==1){
    //   //  echo "新增成功<br>";
    //   //  echo "<a href='inovice.php'>繼續輸入</a><br>";
    //   //  echo "<a href='list.php'>發票列表</a>";
    //    to("list.php");
    // }else{
    //     echo "新增失敗";
    // }

?>