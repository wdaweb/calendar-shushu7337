
<style>
h4{
    text-align:center;
}
.box{}
table{
    margin:0;
}
table td{
    border:1px solid #ccc;
    padding:5px;
    text-align:center;
}
</style>
<h4>月曆製作</h4>
<div>年份:2020</div>

<?php
if(isset($_GET["year"])){
    $year=$_GET["year"];
}else{
    $year=date("Y");
}

echo "<h4 style='text-align:center'>西元".$year."年曆</h4>";

for($Q=1;$Q<=12;$Q++){
?>
<div>月份:<?=$Q;?></div>
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
        $firstDay=date("$year-$Q-01");
        $firstDayWeek=date("w",strtotime($firstDay));
        $WeekDays=date("t",strtotime($firstDay));
        
        if(date("Y",strtotime($firstDay)))
        for($i=0;$i<6;$i++) {
            echo "<tr>";
                for($j=0; $j<7;$j++) {
                    if($i==0 && $j<$firstDayWeek){
                        echo "<td>";
                        echo "</td>";
                    }else{
                        echo "<td>";
                        $dd=$i*7+$j+1-$firstDayWeek;
                        if($dd<=$WeekDays){
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
}
    ?>