<?php include_once "com/base.php";?>
<!-- <link rel="shortcut icon" href="imgs/dot.ico" type="image/x-icon" />
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="include/bootstrap.css">
<link rel="stylesheet" href="css/award.css">
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script> -->
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
// include "com/nav.php";
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
    echo "<hr>";
    
    $t_num=[];
    $last[]="";
    
    $aw=5;
function check($aw){
        $chk_num=0;
    if(isset($_POST['year'])){
        $year=$_POST['year'];
    }
      if(isset($_POST['period'])){
        $period=$_POST['period'];
    }
    $award_type=[
        1=>["特別獎",1,8,10000000],
        2=>["特獎",2,8,2000000],
        3=>["頭獎",3,8,200000],
        4=>["二獎",3,7,40000],
        5=>["三獎",3,6,10000],
        6=>["四獎",3,5,4000],
        7=>["五獎",3,4,1000],
        8=>["六獎",3,3,200],
        9=>["增開六獎",4,3,200],
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
    
    ////////////////本期所有發票
    $invoices=all("invoice",[
        "year"=>$_POST['year'],
        "period"=>$_POST['period'],
        ]);
    ////////////////本期開獎發票
    $award_numbers=all("award_number",[
        "year"=>$_POST['year'],
        "period"=>$_POST['period'],
        ]);
    foreach($award_numbers as $num){
        $t_num[]=$num ['number'];
    }

    foreach($invoices as $ins){
        foreach($t_num as $tn){
            $len=$award_type[$aw][2];
            $start=8-$len;
          if($aw!=9){
              $target_num=mb_substr($tn,$start,$len);
          }else{
            
          }
          if(mb_substr($ins['number'],$start,$len) == $target_num){
            $chk_num++;
            $last[]=$target_num;
            $NewArray=array_diff($last,$ins);
        }
    }
}

// echo count($last);
echo "last";
echo "<pre>";
print_r($last);
echo "</pre>";

echo "<hr>";
echo "target_num";
echo "<pre>";
print_r($target_num);
echo "</pre>";
// echo $chk_num;
echo "<hr>";
echo "NewArray";
echo "<pre>";
print_r($NewArray); 
echo "</pre>";
}
?>
<?php
// 特別獎
// check(8);
// echo "<hr>";
// unset($last);
?>
<?php
// 特獎
// check(2);
// echo "<hr>";
// unset($last);
?>
<?php
// 增開六獎
// check(9);
// echo "<hr>";
// unset($last);
?>
<?php
// 頭獎-六獎
$i=8;
for($i>9;$i<2;$i--){
    check(i);
}
check(8);
check(7);
check(6);
check(5);
check(4);
check(3);


?>




