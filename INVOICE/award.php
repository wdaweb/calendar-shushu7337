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

    if(empty($_GET)){
        echo "請選擇要兌獎的項目";
        echo "<br>";
        echo "<a href='invoice.php'>發票獎號</a>";
        exit();
    }

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
        <td>期別</td>
        <td><?=$monthStr[$period];?></td>
        <!-- <td><?=$_GET['period'];?></td> -->
      </tr>
      <tr>
        <td>獎號數量</td>
        <td>
          <?php
          $award_nums=nums("award_number",[
              "year"=>$_GET['year'],
              "period"=>$_GET['period'],
              "type"=>$award_type[$_GET['aw']][1]
            ]);
            echo $award_nums;
          ?>
        </td>
      </tr>
      <tr>
        <td>兌獎獎號</td>
        <td>
          <?php
            $award_numbers=all("award_number",[
            "year"=>$_GET['year'],  
            "period"=>$_GET['period'],
            "type"=>$award_type[$_GET['aw']][1]
            ]);
            $t_num=[];
            foreach($award_numbers as $num){
                echo $num ['number']."<br>";
                $t_num[]=$num ['number'];
            }
        ?>
        </td>
      </tr>
      <tr>
        <td>該期發票號碼</td>
        <td>
          <?php
            $invoices=all("invoice",[
              "year"=>$_GET['year'],
              "period"=>$_GET['period'],
              ]);
            
  
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
                  echo $ins['number']."恭喜中獎";
                  }else{
                      echo $ins['number']."再接再厲";
                  }
              }echo "<br>";
              
            }
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