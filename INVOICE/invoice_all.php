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
<link rel="shortcut icon" href="imgs/dot.ico" type="image/x-icon" />
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Iceland&family=Noto+Sans+TC:wght@300;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="include/bootstrap.css">
<link rel="stylesheet" href="css/invoice.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="include/bootstrap.css">
<link rel="stylesheet" href="css/invoice.css">
<link rel="stylesheet" href="css/nav.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
</head>

<body>
<?php
include "com/nav.php";
?>

<?php
$num1=find('award_number',['period'=>$period,'year'=>$year,'type'=>1]);  //單筆
$num2=find('award_number',['period'=>$period,'year'=>$year,'type'=>2]);  //單筆
$num3=all('award_number',['period'=>$period,'year'=>$year,'type'=>3]);   //多筆
$num4=all('award_number',['period'=>$period,'year'=>$year,'type'=>4]);   //多筆
?>
<div class="container">
    <div class="d-flex justify-content-center mt-5">
    <form action="award_all.php" method="post">
    <table class="inv table text-center table-bordered justify-content-center table-striped table-dark table-hover">
    <tr>
        <td>年月份</td>
    <td  class="h3 num"><?=$year;?><span class="h5">年</span><?php echo "&emsp;"."/"."&emsp;";?> <?=$monthStr[$period];?><span class="h5">月</span></td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td class="h3 num">
            <?php
                if(!empty($num1['number'])){
                    echo $num1['number'];
                }
                ?>
        </td>
    </tr>
    <tr>
        <td>特獎</td>
        <td class="h3 num">
            <?php
                if(!empty($num1['number'])){
                    echo $num1['number'];
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td class="h3 num">
            <?php
                foreach($num3 as $num){
                    // 下方變數$num後面要接陣列 因為上方的$num3為二維陣列
                    echo $num['number'] . "<br>";
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>二獎</td>
        <td>末 7 位數號碼與頭獎中獎號碼末 7 位相同者</td>
    </tr>
    <tr>
        <td>三獎</td>
        <td>末 6 位數號碼與頭獎中獎號碼末 6 位相同者</td>
    </tr>
    <tr>
        <td>四獎</td>
        <td>末 5 位數號碼與頭獎中獎號碼末 5 位相同者</td>
    </tr>
    <tr>
        <td>五獎</td>
        <td>末 4 位數號碼與頭獎中獎號碼末 4 位相同者</td>
    </tr>
    <tr>
        <td>六獎</td>
        <td>末 3 位數號碼與頭獎中獎號碼末 3 位相同者</td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td class="h3 num">
            <?php
                foreach($num4 as $num){
                    echo $num['number'] . "&emsp;";
                }
            ?>     
        </td>
    </tr>
    <tr>
        <td colspan="2">
        <input class=" btn  btn-outline-light slt" type="submit" value="開獎" >     
        </td>
    </tr>
        <input type="hidden" id='year' name='year' value="<?=$year?>">
        <input type="hidden" id='period' name='period' value="<?=$period?>">
         <input type="hidden" id='num1' name='num1' value="<?=$num1['number']?>">
        <input type="hidden" id='num2' name='num2' value="<?=$num2['number']?>">
        <?php   
            $a=1;
            foreach($num3 as $num){
                echo "<input type='hidden' id='"."num3".$a."' "."name='"."num3".$a."' "."value='".$num['number']."'";
            }
        ?>
        <?php   
            $a=1;
            foreach($num4 as $num){
                echo "<input type='hidden' id='"."num4".$a."' "."name='"."num3".$a."' "."value='".$num['number']."'";
            }
        ?> 
    </table>
    </form>
    </div>
</div>
</body>

</html>