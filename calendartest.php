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
        background: #FFF;
    }
    table {
        margin: 15px;
        color: #fff;

    }
    .introy{
        display: flex;
        justify-content: center;
        align-items: center;
        color: #000;
        font-size:20px;
        
    }
    .introm{
        display: flex;
        justify-content: center;
        align-items: center;
        color: #000;
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
        color: #000;
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


if (isset($_GET["year"])) {
    $year = $_GET["year"];
} else {
    $year = date("Y");
}
if (isset($_GET["month"])) {
    $month = $_GET["month"];
} else {
    $month = date("n");
}   


// 上下月處理
if ($month < 1) {
    $month = 12;
    $year -= 1;
}
if ($month > 12) {
    $month = 1;
    $year += 1;
}

?>
<div class="introy">
<?php
echo "<a href=calendartest.php?year=" . ($year - 1) . "&month=" . $month . ">上一年</a>" . $year . "年<a href=calendartest.php?year=" .  ($year + 1) . "&month=" . $month . ">下一年</a>";
?>
</div>

<div class="introm">
<?php
echo "<a href=calendartest.php?month=" . ($month - 1) . "& year=" . $year . ">上個月</a>" . $month . "月<a href=calendartest.php?month=" . ($month + 1) . "&year=" . $year . ">下個月</a>";
?>
</div>

<a href="calendartest.php?year=<?= $year - 1;?>?month=<?= $month?>">上一年</a>
<span>&nbsp&nbsp&nbsp<?= $year; ?>&nbsp&nbsp&nbsp</span>
<a href="calendartest.php?year=<?= $year + 1;?>?month=<?= $month?>">下一年</a>
</div> 
<div class="introm">
<a href="calendartest.php?month=<?= $month -1 ?>?year=<?= $year?>">上一月</a>
<span>&nbsp&nbsp<?= $month; ?>&nbsp&nbsp</span>
<a href="calendartest.php?month=<?= $month +1 ?>?year=<?= $year?>">下一月</a> 

</div> 
<div class="calendar">
<table>
    <thead>
        <tr>
            <td>SUN</td>
            <td>MON</td>
            <td>TUE</td>
            <td>WED</td>
            <td>THU</td>
            <td>FRI</td>
            <td>SAT</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $firstDay = date("$year-$month-01");
        $firstDayWeek = date("w", strtotime($firstDay)); //第一天
        $WeekDays = date("t", strtotime($firstDay));  //總天數
        // 空白天數加上總天數除七
        if (date("Y", strtotime($firstDay)))
            for ($i = 0; $i < 6; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 7; $j++) {
                    if ($i == 0 && $j < $firstDayWeek) {
                        echo "<td>";
                        echo "</td>";
                    } else {
                        echo "<td>";
                        $day = $i * 7 + $j + 1 - $firstDayWeek;
                        if ($day <= $WeekDays) {
                            echo $day;
                        }
                        echo "</td>";
                    }
                }
                echo "</tr>";
            }
            // for ($i = date("w", mktime(0, 0, 0, $month, $i, $year)); $i <= 6; $i++)
            // 	echo "<td>&nbsp;</td>";
        ?>
    </tbody>
</table>
</div>