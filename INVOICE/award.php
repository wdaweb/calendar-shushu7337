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
// 期別轉換
$monthStr=[
  '1'=>"1 - 2",
  '2'=>"3 - 4",
  '3'=>"5 - 6",
  '4'=>"7 - 8",
  '5'=>"9 - 10",
  '6'=>"11 - 12",
];
//獎項基本資料
$awardType = array(
    1 => array(
          "name" => "特別獎",
          "rule" => "check_all",
        ),
    2 => array(
          "name" => "特獎",
          "rule" => "check_all",
        ),
    3 => array(
          "name" => "頭獎",
          "rule" => "check_part",
        ),
    4 => array(
          "name" => "增開六獎",
          "rule" => "check_all",
        ),
  );
  //獎項規則
  $awardRule = array(
    "check_all" => array(
      3 => 200,
      8 => array(
        1 => 10000000,
        2 => 2000000
      )),
    "check_part" => array(
      3 => 200,
      4 => 1000,
      5 => 4000,
      6 => 10000,
      7 => 40000,
      8 => 200000
    ),
  );
//這期的所有發票
$invoices=all("invoice",[
    "year"=>$_GET['year'],
    "period"=>$_GET['period'],
    ]);
//這期的開獎號碼
$award_numbers=all("award_number",[
    "year"=>$_GET['year'],  
    "period"=>$_GET['period'],
    "type"=>$award_type[$_GET['aw']][1]
    ]);

$awardList = array();   //來接中獎發票
$totalBounus = 0;       //計算中獎金額
foreach ($invoice as $i_key => $i_value) {
    foreach ($award_numbers as $a_key => $a_value) {
        // 取得開獎號碼的type值後，取得檢查方法為check_all 或是 check_part
        $check_method = $awardType[$a_value['type']]['rule'];

        //計算單筆中獎發票的金額
        $single_bounus = 0;     
        
        // 定義檢查方法為check_all || check_part時
        if($awardType[$a_value['type']]['rule'] == "check_all"){
            // 此期所有發票號碼、此期開獎號碼，此筆開獎號碼的type，獎項規則
            $single_bounus = check_all($a_value['number'], $i_value['number'],$a_value['type'],$awardRule);
        }

        if($awardType[$a_value['type']]['rule'] == "check_part"){
            // 此期所有發票號碼、此期開獎號碼，此筆開獎號碼的type，獎項規則
            $single_bounus = check_part($a_value['number'], $i_value['number'],$a_value['type'],$awardRule);
        }
        if($single_bouns > 0){
            // 如果中獎金額>0時，先加總到$totalbounus
            $totalbounus += $single_bounus;
            // 再將$i_value['number']依序塞到$awardList後面
            array_push($awardList,$i_value['number']);
        }
    }
}
// 正數轉負數&負數轉正數
function plus_minus_conversion($number=0){
    return ~$number + 1 ;
}

function check_all($award,$this_invocie_number,$type,$awardRule){
    
}
/////////////////////////////////////////
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
    // echo "<pre>";
    // print_r($award_money);
    // echo "</pre>";
    if(isset($_GET['period'])){
      $period=$_GET['period'];
  }
    
    $aw=$_GET['aw'];
    // echo "獎別:".$award_type[$aw][0]."<br>";
    // echo "年份:".$_GET['year']."<br>";
    // echo "期別:".$_GET['period']."<br>";
    ?>
    <div class="d-flex justify-content-center mt-5">
        <table class="table text-center table-bordered justify-content-center table-striped table-dark table-hover">
            <tr>
                <td>獎別</td>
                <td><?=$award_type[$aw][0];?></td>
            </tr>
            <tr>
                <td>年份</td>
                <td><?=$_GET['year'];?></td>
            </tr>
            <tr>
                <td>月份</td>
                <td><?=$monthStr[$period];?></td>
                <!-- <td><?=$_GET['period'];?></td> -->
            </tr>
            <!-- <tr>
                <td>獎號數量</td>
                <td>
                    <?php
                        // $award_nums=nums("award_number",[
                        //   "year"=>$_GET['year'],
                        //   "period"=>$_GET['period'],
                        //   "type"=>$award_type[$_GET['aw']][1]
                        // ]);
                        // echo $award_nums;
                    ?>
                </td>
            </tr> -->
            <tr>
                <td>本期兌獎獎號</td>

                <td class="num">
                    <?php
                    $t_num=[];
                    foreach($award_numbers as $num){
                        echo $num ['number']."&emsp;";
                        $t_num[]=$num ['number'];
                    }
                  ?>
                </td>
            </tr>
            <tr>
                <td>中獎發票號碼</td>
                <td class="num">
                    <?php
                        
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
                              echo $ins['code'].$ins['number']."&emsp;";
                              }else{
                                  // echo $ins['number']."再接再厲";
                              }
                          }//echo "<br>";
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
                    echo $money=$chk_num*$award_money[$aw][0];
                    ?>
                </td>
            </tr>

        </table>
    </div>

    <?php
    // ======我是分隔線======
    // 先算出要得獎號有幾筆，再來決定要用all or find
    // echo "<h3>獎號數量</h3>";
    // $award_nums=nums("award_number",[
    //     "year"=>$_GET['year'],
    //     "period"=>$_GET['period'],
    //     "type"=>$award_type[$_GET['aw']][1]
    //     ]);
        
    // ======我是分隔線======
    // echo "<h3>兌獎獎號</h3>";
    // $award_numbers=all("award_number",[
    //     "year"=>$_GET['year'],
    //     "period"=>$_GET['period'],
    //     "type"=>$award_type[$_GET['aw']][1]
    //     ]);
    
    // $t_num=[];
    // foreach($award_numbers as $num){
    //     echo $num ['number']."<br>";
    //     $t_num[]=$num ['number'];
    //     }

        // if($award_nums>1){
        //     $award_numbers=all("award_number",[
        //         "year"=>$_GET['year'],
        //         "period"=>$_GET['period'],
        //         "type"=>$award_type[$_GET['aw']][1]
        //         ]);
        // }else{
        //     $award_numbers=find("award_number",[
        //         "year"=>$_GET['year'],
        //         "period"=>$_GET['period'],
        //         "type"=>$award_type[$_GET['aw']][1]
        //         ]);
        // }

        // echo "<pre>";
        // print_r($award_numbers);
        // echo "</pre>";


        // ======我是分隔線======
        // echo "<h3>該期發票號碼</h3>";
        // $invoices=all("invoice",[
        //     "year"=>$_GET['year'],
        //     "period"=>$_GET['period'],
        //     ]);
          

        // foreach($invoices as $ins){

        //     foreach($t_num as $tn){
                
        //         $len=$award_type[$aw][2];
                
                
        //         $start=8-$len;
                
        //         // 針對增開六獎特別處理
        //         if($aw!=9){
        //             $target_num=mb_substr($tn,$start,$len);
        //         }else{
        //             // $tn 為增開六獎
        //             $target_num=$tn;
        //         }
        //         if(mb_substr($ins['number'],$start,$len) == $target_num){
        //         echo $ins['number']."恭喜中獎";
        //         }else{
        //             echo $ins['number']."再接再厲";
        //         }
        //     }echo "<br>";
            
        // }
        
        ?>

</body>

</html>
