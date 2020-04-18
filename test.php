<?php

//<-------GET方法提交變更月份,年份;開始-------->
if ($_GET['year'] == "") {
	$_GET['year'] = date("Y");
}
if ($_GET['month'] == "") {
	$_GET['month'] = date("n");
}
$month = $_GET['month'];
$year = $_GET['year'];
//<-------GET方法提交變更月份,年份;結束-------->

if ($year < 1971) //年度最少到1971年，小於1971年，則需回到今年的日曆
{
	echo "<p>已至尾端，請回原頁面</p>";
	echo "<a href=$_SERVER[PHP_SELF]>回原頁面</a>"; //$_SERVER[PHP_SELF]為執行伺服器預定變數，當前正在執行腳本的文件名。
	exit();
}
?>
<div align="center">
	<table class="calendar_table1" cellpadding="0" cellspacing="0" width="80%" border=1>
		<tr align="center">
			<td colspan="7">
				<table width="100%" border=0>
					<tr>
						<td align=center>
							<?php
							//<-------月份超出1至12的處理;開始------->
							if ($month < 1) {
								$month = 12;
								$year -= 1;
							}
							if ($month > 12) {
								$month = 1;
								$year += 1;
							}
							//<-------月份超出1至12的處理;結束------->

							//<---------上一年,下一年,上月,下月;開始--------->
							echo "<a href=$_SERVER[PHP_SELF]?year=" . ($year - 1) . "&month=" . $month . "><<</a>" . $year . "年<a href=$_SERVER[PHP_SELF]?year=" . ($year + 1) . "&month=" . $month . ">>></a>"; //上下年
							?>
						</td>
						<td align=center><a href=<?= $_SERVER['PHP_SELF'] ?>>今日</a></td>
						<td align=center>
							<?php
							echo "<a href=$_SERVER[PHP_SELF]?month=" . ($month - 1) . "& year=" . $year . "><<</a>" . $month . "月<a href=$_SERVER[PHP_SELF]?month=" . ($month + 1) . "&year=" . $year . ">>></a>"; //上下月
							//<--------上一年,下一年,上月,下月;結束--------->
							?>
						</td>
					</tr>
				</table>
		<tr align=center class="week_text">
			<?php
			echo "<td class='red_text'>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td>";
			echo "</tr>";
			echo "<tr>";
			$d = date("d");
			$FirstDay = date("w", mktime(0, 0, 0, $month, 1, $year)); //取得任何一個月的一號是星期幾，來計自一號從第幾格開始。
			$bgtoday = date("d");
			function font_color($month, $today, $year) //計算星期天的字體顏色。
			{
				$sunday = date("w", mktime(0, 0, 0, $month, $today, $year));
				if ($sunday == "0")
					$FontColor = "red";
				else
					$FontColor = "black";

				return $FontColor;
			}
			function bgcolor($month, $bgtoday, $today_i, $year) //計算當日的背景顏色。
			{
				$show_today = date("d", mktime(0, 0, 0, $month, $today_i, $year));
				$sys_today = date("d", mktime(0, 0, 0, $month, $bgtoday, $year));
				if ($show_today == $sys_today)
					$bgcolor = "bgcolor=#6699FF";
				else
					$bgcolor = "";
				return $bgcolor;
			}

			function font_style($month, $today, $year) //計算星期天的字體風格。
			{
				$sunday = date("w", mktime(0, 0, 0, $month, $today, $year));
				if ($sunday == "0")
					$FontStyle = "<strong>";
				else
					$FontStyle = "";
				return $FontStyle;
			}
			$today = date('Y-m-d'); //今天
			for ($i = 0; $i <= $FirstDay; $i++) //用for輸出每個月一號的位置
			{
				for ($i; $i < $FirstDay; $i++) {
					echo "<td align=center>&nbsp;</td>\n";
				}
				if ($i == $FirstDay) {
					echo "<td align=center " . bgcolor($month, $bgtoday, 1, $year) . "><font color=" . font_color($month, 1, $year) . ">" . font_style($month, 1, $year);
					$nowday = "$year-$month-$i"; //顯示的日期
					if (strtotime($nowday) > strtotime($today)) //如果日期是未來就產生連結
						echo "<a href=$_SERVER[PHP_SELF]?select_day=$nowday>1</a>";
					else
						echo "1";
					echo "</font></td>\n";
					if ($FirstDay == 6) //判斷1號是否星期六
					{
						echo "</tr>";
					}
				}
			}
			$countMonth = date("t", mktime(0, 0, 0, $month, 1, $year)); //某月的總天數
			for ($i = 2; $i <= $countMonth; $i++) //輸出由1號定位,隨後2號直至月尾的所有號數
			{
				echo "<td align=center " . bgcolor($month, $bgtoday, $i, $year) . "><font color=" . font_color($month, $i, $year) . ">" . font_style($month, $i, $year);
				$nowday = "$year-$month-$i"; //顯示的日期
				if (strtotime($nowday) > strtotime($today)) //如果日期是未來就產生連結
					echo "<a href=$_SERVER[PHP_SELF]?select_day=$nowday>$i</a>";
				else
					echo $i;
				echo "</font></td>\n";
				if (date("w", mktime(0, 0, 0, $month, $i, $year)) == 6) //判斷該日是否星期六
				{
					echo "</tr>\n";
				}
			}
			//將最後空白的天數顯示空白
			for ($i = date("w", mktime(0, 0, 0, $month, $i, $year)); $i <= 6; $i++)
				echo "<td>&nbsp;</td>";
			?>
	</table>
</div>