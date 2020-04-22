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
        color: #fff;
    }
    body{
        background: #000;
        text-decoration: none;
    }
    table {
        margin: 15px;
        color: #fff;

    }
    /* .introy{
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size:36px;
        
    } */
    a{
        text-decoration: none;
    }
    a:link { color: white;} /*連結提示*/
    a:visited { color: white;} /*已拜訪過過*/
    a:hover { color: white;} /*滑過*/
    a:active { color: white;} /*按下瞬間*/

    .introm{
        display: flex;` 
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size:28px;
        font-family: 'Fredericka the Great', cursive,'Noto Sans TC', sans-serif;
        height: 50px;
    }
    .prev{ 
        right:100px;
        width:80px;
        height: 30px;
        border-radius: 30px;    
        border: 12px #fff;
        background: transparent;
    }
    .next{
        border: 1px #fff;
        
        background: transparent;
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
        border-radius: 50%;
        padding: 0px;
        text-align: center;
        color: #fff;
        width: 60px;
        height: 60px;
        box-shadow: 2px 2px 10px #fff;
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
    $month = date("M");
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
<!-- <div class="introy">
<a href="calendartest.php?year=<?= $year - 1;?>&month=<?= $month?>">Prev</a>
<span>&nbsp&nbsp&nbsp<?= $year; ?>&nbsp&nbsp&nbsp</span>
<a href="calendartest.php?year=<?= $year + 1;?>&month=<?= $month?>">Next</a>
</div>  -->
<div class="introm">
<span class="prev"><a href="calendartest.php?month=<?= $month -1 ?>&year=<?= $year?>">Prev</a></span>
<span>&nbsp&nbsp<?= $year; ?>&nbsp&nbsp</span>
<span>/</span>
<span>&nbsp<?= $month; ?>&nbsp</span>
<span class="next"><a href="calendartest.php?month=<?= $month +1 ?>&year=<?= $year?>">Next</a></span>

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
        $spaceDay=ceil(($firstDayWeek + $WeekDays) / 7);
        
        if (date("Y", strtotime($firstDay)))
            for ($i = 0; $i < $spaceDay; $i++) {
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