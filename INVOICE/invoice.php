<?php
include_once "com/base.php";
$period=ceil(date("n")/2);
$monthStr=[
    '1'=>"1 - 2",
    '2'=>"3 - 4",
    '3'=>"5 - 6",
    '4'=>"7 - 8",
    '5'=>"9 - 10",
    '6'=>"11 - 12",
];
// echo $period;   
if(isset($_GET['period'])){
    $period=$_GET['period'];
}
$year=date("Y");
?>
<link href="https://fonts.googleapis.com/css2?family=Iceland&family=Noto+Sans+TC:wght@300;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="include/bootstrap.css">
<link rel="stylesheet" href="css/add_i.css">
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
          <a class="dropdown-item" href="list.php?period=1">1 - 2</a>
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

<?php
$num1=find('award_number',['period'=>$period,'year'=>$year,'type'=>1]);  //單筆
$num2=find('award_number',['period'=>$period,'year'=>$year,'type'=>2]);  //單筆
$num3=all('award_number',['period'=>$period,'year'=>$year,'type'=>3]);   //多筆
$num3=all('award_number',['period'=>$period,'year'=>$year,'type'=>4]);   //多筆
?>

<div class="">
    <table class="table table-bordered">
    <tr>
        <td>年月份</td>
        <td><?=$year;?><?$monthStr[$period];?></td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td>
            <?php
                if(!empty($num1['number'])){
                    echo $num1['number'];
                }
                ?>
        </td>
        <td>
            <a href="award.php?aw=1&year=<?=$year;?>&period=<?=$period?>">兌獎</a>
        </td>
    </tr>
    <tr>
        <td>特獎</td>
        <td>
            <?php
                if(!empty($num1['number'])){
                    echo $num1['number'];
                }
            ?>
        </td>
        <td>
            <a href="award.php?aw=2&year=<?=$year;?>&period=<?=$period?>">兌獎</a>
        </td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td>
            <?php
                foreach($num3 as $num){
                    // 下方變數$num後面要接陣列 因為上方的$num3為二維陣列
                    echo $num['number'] . "<br>";
                }
            ?>
        </td>
        <td>
            <a href="award.php?aw=3&year=<?=$year;?>&period=<?=$period?>">兌獎</a>
        </td>
    </tr>
    <tr>
        <td>二獎</td>
        <td>
            <a href="award.php?aw=4&year=<?=$year;?>&period=<?=$period?>">兌獎</a>
        </td>
    </tr>
    <tr>
        <td>三獎</td>
        <td>
            <a href="award.php?aw=5&year=<?=$year;?>&period=<?=$period?>">兌獎</a>
        </td>
    </tr>
    <tr>
        <td>四獎</td>
        <td>
            <a href="award.php?aw=6&year=<?=$year;?>&period=<?=$period?>">兌獎</a>
        </td>
    </tr>
    <tr>
        <td>五獎</td>
        <td>
            <a href="award.php?aw=7&year=<?=$year;?>&period=<?=$period?>">兌獎</a>
        </td>
    </tr>
    <tr>
        <td>六獎</td>
        <td>
            <a href="award.php?aw=8&year=<?=$year;?>&period=<?=$period?>">兌獎</a>
        </td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td>
            <?php
                foreach($num4 as $num){
                    echo $num['number'] . "<br>";
                }
            ?>     
        </td>
        <td>
            <a href="award.php?aw=9&year=<?=$year;?>&period=<?=$period?>">兌獎</a>
        </td>
    </tr>


    </table>
</div>
</body>

</html>