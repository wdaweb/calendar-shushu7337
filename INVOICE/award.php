<?php include_once "com/base.php";?>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./include/bootstrap.css">
<link rel="stylesheet" href="./css/stylein.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/style.css">
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
    
    $aw=$_GET['aw'];
    echo "獎別:".$award_type[$aw][0]."<br>";
    echo "年份:".$_GET['year']."<br>";
    echo "期別:".$_GET['period']."<br>";


    // 先算出要得獎號有幾筆，再來決定要用all or find
    echo "<h3>獎號數量</h3>";
    $award_nums=nums("award_number",[
        "year"=>$_GET['year'],
        "period"=>$_GET['period'],
        "type"=>$award_type[$_GET['aw']][1]
        ]);
        
        
    echo "<h3>兌獎獎號</h3>";
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
        echo "<h3>該期發票號碼</h3>";
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

</body>
</html>