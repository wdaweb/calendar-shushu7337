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

<?php

echo "<a href='月曆試做.php?year=" . ($year - 1) . "&month=" . $month . "><<</a>" . $year . "年<a href='月曆試做.php?year=" . ($year + 1) . "&month=" . $month . ">>></a>"; 

echo "<a href='月曆試做.php?month=" . ($month - 1) . "& year=" . $year . "><<</a>" . $month . "月<a href='月曆試做.php'?month=" . ($month + 1) . "&year=" . $year . ">>></a>"; //上下月

?>


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
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
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