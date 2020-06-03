<link rel="shortcut icon" href="imgs/dot.ico" type="image/x-icon" />
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./include/bootstrap.css">
<link rel="stylesheet" href="./css/stylein.css">
<link rel="stylesheet" href="css/nav.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receipt Lotter</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body >

<?php include "com/nav.php";?>



</body>

</html>
<?php
    include "./com/base.php";
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
    $res=save("invoice",$data);


    if($res==1){
        echo "新增成功<br>";
        echo "<a href='inovice.php'>繼續輸入</a><br>";
        echo "<a href='list.php'>發票列表</a>";
    }else{
        echo "新增失敗";
    }

?>