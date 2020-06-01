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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand h1 mb-0" href="index.php">Receipt Lottery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="invoice.php">發票兌獎</a>
        <a class="nav-item nav-link" href="add_invoice.php">獎號輸入</a>
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          發票獎號
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">1 - 2</a>
          <a class="dropdown-item" href="#">3 - 4</a>
          <a class="dropdown-item" href="#">5 - 6</a>
          <a class="dropdown-item" href="#">7 - 8</a>
          <a class="dropdown-item" href="#">9 - 10</a>
          <a class="dropdown-item" href="#">11 - 12</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="invoice.php">當期</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          發票列表
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">1 - 2</a>
          <a class="dropdown-item" href="#">3 - 4</a>
          <a class="dropdown-item" href="#">5 - 6</a>
          <a class="dropdown-item" href="#">7 - 8</a>
          <a class="dropdown-item" href="#">9 - 10</a>
          <a class="dropdown-item" href="#">11 - 12</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="list.php">當期</a>
        </div>
      </li>
      </div>
    </div>
    </div>
</nav>



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