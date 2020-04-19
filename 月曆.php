<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
<style>
    h1 {
        text-align: center;
        font-family: 'Fredericka the Great', cursive;
        font-size: 40px;
        color: #fff;
    }
    .callyear{
        text-align: center;
        font-family: 'Fredericka the Great', cursive,'Noto Sans TC', sans-serif;
        font-size: 25px;
        color: #fff
    }
    body{
        background: #000;
    }
    table {
        margin: 15px;
        color: #fff

    }
    .introy{
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff
    }
    .introm{
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff
    }
    div.calendar{
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    thead{
        font-family: 'Monoton', cursive;
        font-size: 25px;
    }
    th:nth-of-type(7),td:nth-of-type(7){
        color: #B2EBF2;
    }
    th:nth-of-type(1),td:nth-of-type(1){
        color: #F8BBD0;
    }
    table td {
        border: 1.5px solid #ccc;
        border-radius: 15px;
        padding: 10px;
        text-align: center;
        color: #fff;
        width: 150px;
        height: 50px;
    }
</style>
<h1>Calendar</h1>
<div class="callyear">
    <form action="?" method="get">
        years:<input type="number" name="year">
        <input type="submit" value="SEND">
    </form>
</div>

<?php
// 判斷給值
// 若程式碼有'YM'取值，設變數$Ym為'YM'取值
if(isset($_GET['YM'])){
    $YM=$_GET['YM'];
}else{
    // 若無上述內容，宣告變數YM為今(年-月)
    $YM=date('Y-m');
}

// 檢查時間戳
$timestamp = strtotime($YM,"-01");
// 如果變數timestamp數值型別及變數有與其不相等時，返回false，並將變數timestamp 設為返回現在時間的時間戳
if ($timestamp === false){
    $timestamp = time();
}

// 今天
$today=date('Y-m-d',time());

// 上個月&下個月
// mktime函式用法:mktime(hour,minute,second,month,day,year,is_dst);
$prev = date('Y-m', mktime(0,0,0,date('m',$timestamp)-1),1,date('Y', $timestamp));
$next = date('Y-m', mktime(0,0,0,date('m',$timestamp)+1),1,date('Y', $timestamp));