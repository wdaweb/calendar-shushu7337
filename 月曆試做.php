<style>
    h4 {
        text-align: center;
    }

    table {
        margin: 15px;

    }

    table td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }
</style>
<h4>月曆製作</h4>
<div>
    <form action="?" method="get">
        年份:<input type="number" name="year">
        <input type="submit" value="產生年曆">
    </form>
</div>

<?php
if (isset($_GET["year"])) {
    $year = $_GET["year"];
} else {
    $year = date("Y");
}

echo "<h4 style='text-align:center'>西元" . $year . "年曆</h4>";

if (isset($_GET["month"])) {
    $month = $_GET["month"];
} else {
    $month = date("m");
}


if ($month < 1) {
    $month = 12;
    $year -= 1;
}
if ($month > 12) {
    $month = 1;
    $year += 1;
}
?>

<a href="月曆試做.php?month=<?php echo month("Y-m",strtotime('-1 month',strtotime($YM)));?>">上一月(<?=$month-1;?>)</a>
<span>本月(<?=$month;?>)</span>
<a href="月曆試做.php?month=<?=$month+1;?>">下一月(<?=$month+1;?>)</a>

<!-- <a href="月曆試做.php?year=<?= $year - 1; ?>">上一年</a>
<span>今年(<?= $year; ?>)</span>
<a href="月曆試做.php?year=<?= $year + 1; ?>">下一年</a>
<br>

<a href="月曆試做.php?month=<?= $month - 1; ?>">上一月</a>
<span>本月(<?= $month; ?>)</span>
<a href="月曆試做.php?month=<?= $month + 1; ?>">下一月</a> -->
<div>月份:<?= $month; ?></div>
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
        $firstDayWeek = date("w", strtotime($firstDay));
        $WeekDays = date("t", strtotime($firstDay));
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
                        $dd = $i * 7 + $j + 1 - $firstDayWeek;
                        if ($dd <= $WeekDays) {
                            echo $dd;
                        }
                        echo "</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<?php
?>