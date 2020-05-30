<?php include "com/base.php"; 
$year=date("Y");
$period=ceil(date("n")/2);
// echo $period;
if(isset($_GET['year'])){
    $year=$_GET['year'];
}   
if(isset($_GET['period'])){
    $period=$_GET['period'];
}
// echo $period;
// echo $year;
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
<?php include "com/nav.php";?>  

<header class="mx-auto ">
<h1 class="top">Receipt  List</h1>

</header>

</div>
<?php
// $sql="select * from `invoice` where period ='$period'";
// $rows=$pdo->query($sql)->fetchALL();

$rows=all('invoice',['year'=>$year,'period'=>$period]);
// 注意上處不是用逗號分隔，是用=>
?>

<div class="px-5 py-2 my-3">
  <table class="table text-center table-bordered table-striped table-hover table-dark">
    <thead>
      <tr>
        <!-- <th scope="col">Id</th> -->
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
        <!-- <td scope="row"><?=$row['id'];?></td> -->
        <td><?=$row['year'];?></td>
        <td><?=$row['period'];?></td>
        <td><?=$row['code'];?></td>
        <td><?=$row['number'];?></td>
        <td><?=$row['expend'];?></td>
        <td colspan="2">
          <a href="com/base.php?user=<?=$row['id'];?>"><button>編輯</button>
          </a>
          
          <a href="del.php?id=<?=$row['id'];?>"><button>刪除</button>
        </a>

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