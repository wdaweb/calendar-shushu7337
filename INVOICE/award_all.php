<?php include_once "com/base.php";?>
<link rel="shortcut icon" href="imgs/dot.ico" type="image/x-icon" />
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="include/bootstrap.css">
<link rel="stylesheet" href="css/award.css">
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
include "com/nav.php";
$monthStr=[
  '1'=>"1 - 2",
  '2'=>"3 - 4",
  '3'=>"5 - 6",
  '4'=>"7 - 8",
  '5'=>"9 - 10",
  '6'=>"11 - 12",
];
?>

    <?php 

    $award_type=[
        1=>["特別獎",1,8],
        2=>["特獎",2,8],
        3=>["頭獎",3,8],
        4=>["二獎",3,7],
        5=>["三獎",3,6],
        6=>["四獎",3,5],
        7=>["五獎",3,4],
        8=>["六獎",3,3],
        9=>["增開六獎",4,3],
    ];
    // 中獎金額
    $award_money=[
        1=>[10000000],
        2=>[2000000],
        3=>[200000],
        4=>[40000],
        5=>[10000],
        6=>[4000],
        7=>[1000],
        8=>[200],
        9=>[200],
    ];
    
    if(isset($_POST['year'])){
      $year=$_POST['year'];
  }
    if(isset($_POST['period'])){
      $period=$_POST['period'];
  }
    ?>
    <div class="d-flex justify-content-center mt-5">
        <table class="table text-center table-bordered justify-content-center table-striped table-dark table-hover">
            <tr>
                <td>年份</td>
                <td><?=$year;?></td>
            </tr>
            <tr>
                <td>月份</td>
                <td><?=$monthStr[$period];?></td>
            </tr>

            <!-- <tr>
                <td>本期兌獎獎號</td>

                <td class="num">
                
                    <?php
                    // 撈出本期中獎號碼
                    $aw=1;
                        
                    $award_numbers=all("award_number",[
                    "year"=>$_POST['year'],
                    "period"=>$_POST['period'],
                    ]);
                    $t_num=[];
                    foreach($award_numbers as $num){
                        // echo $num ['number']."&emsp;";
                        $t_num[]=$num ['number'];
                    }
                  ?>
                </td>
            </tr> -->
            <tr>
                <td>中獎發票號碼</td>
                <td class="num">
                    <?php
                        $invoices=all("invoice",[
                          "year"=>$_POST['year'],
                          "period"=>$_POST['period'],
                          ]);
                          // 設立變數來接有?中獎
                        $chk_num=0;
                        echo "<hr>";
                        for($aw>0;$aw<10;$aw++){
                        foreach($invoices as $ins){
                            foreach($t_num as $tn){
                                $len=$award_type[$aw][2];
                                $start=8-$len;
                              // 針對增開六獎特別處理
                              if($aw!=9){
                                  $target_num=mb_substr($tn,$start,$len);
                              }else{
                                  // $tn 為增開六獎
                                  $target_num=$tn;
                              }
                              if(mb_substr($ins['number'],$start,$len) == $target_num){
                              $chk_num++;
                              echo $ins['number']."&emsp;";
                              }else{
                                  // echo $ins['number']."再接再厲";
                              }
                            }//echo "<br>";
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>中獎筆數</td>
                <td>
                    <?php
                    echo $chk_num;
                    ?>
                </td>
            </tr>
            <tr>
                <td>中獎金額</td>
                <td>
                    <?php
                    // echo $award_money[$aw][0];
                    // echo $money=$chk_num*$award_money[$aw][0];
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <?php
        
        ?>

</body>

</html>