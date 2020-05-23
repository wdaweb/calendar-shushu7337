<?php include "./com/base.php"; 

$period=ceil(date("n")/2);
// echo $period;   
if(isset($_GET['period'])){
    $period=$_GET['period'];
}
// echo $period;
?>
<link href="https://fonts.googleapis.com/css2?family=Iceland&family=Noto+Sans+TC:wght@300;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./include/bootstrap.css">
<link rel="stylesheet" href="css/list.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
</head>
<body>
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
        <a class="dropdown-item" href="invoice.php?period=1<?=($period==1)?>">1 - 2</a>
          <a class="dropdown-item" href="invoice.php?period=2<?=($period==2)?>">3 - 4</a>
          <a class="dropdown-item" href="invoice.php?period=3<?=($period==3)?>">5 - 6</a>
          <a class="dropdown-item" href="invoice.php?period=4<?=($period==4)?>">7 - 8</a>
          <a class="dropdown-item" href="invoice.php?period=5<?=($period==5)?>">9 - 10</a>
          <a class="dropdown-item" href="invoice.php?period=6<?=($period==6)?>">11 - 12</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="invoice.php">當期</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          發票列表
        </a>
        <div class="dropdown-menu" >
            
        <!-- php判斷式在上面 -->
        <!-- <a class="dropdown-item" href="list.php?period=1" style="backgroud:<?//=($period==1)?'lightgreen':'white';?>">1 - 2</a> -->
        <!-- <a class="dropdown-item" href="list.php?period=1" style="backgroud:<?//=($period==2)?'lightgreen':'white';?>">3 - 4</a> -->
        <!-- ... -->
          <a class="dropdown-item" href="list.php?period=1 ">1 - 2</a>
          <a class="dropdown-item" href="list.php?period=2">3 - 4</a>
          <a class="dropdown-item" href="list.php?period=3">5 - 6</a>
          <a class="dropdown-item" href="list.php?period=4">7 - 8</a>
          <a class="dropdown-item" href="list.php?period=5">9 - 10</a>
          <a class="dropdown-item" href="list.php?period=6">11 - 12</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="list.php?period=<?=ceil(date("n")/2);?>">當期</a>
        </div>
      </li>
      </div>
    </div>
    </div>
</nav>

<header class="mx-auto ">
<h1 class="top">Receipt  List</h1>

</header>

</div>
<?php
// $sql="select * from `invoice` where period ='$period'";
// $rows=$pdo->query($sql)->fetchALL();

$rows=all('invoice',['period'=>$period]);
// 注意上處不是用逗號分隔，是用=>
?>

<div class="px-5 py-2 my-3">
  <table class="table text-center table-bordered table-striped table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">年份</th>
        <th scope="col">月份</th>
        <th scope="col">英文碼</th>
        <th scope="col">數字</th>
        <th scope="col">花費</th>
        <th scope="col">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($rows as $row){
          ?>
      <tr>
        <td scope="row"><?=$row['id'];?></td>
        <td><?=$row['year'];?></td>
        <td><?=$row['period'];?></td>
        <td><?=$row['code'];?></td>
        <td><?=$row['number'];?></td>
        <td><?=$row['expend'];?></td>
        <td colspan="2">
          <a href="edit_user.php?user=<?=$row['id'];?>"><button>編輯</button></a>
          
          <a href="delete_user.php?user=<?=$row['id'];?>"><button>刪除</button></a>
          
        </td>
      <?php
        }
      ?>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>