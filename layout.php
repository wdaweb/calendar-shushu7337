<style>
  * {
    margin: 0;
    padding: 0;
    text-decoration: none;
  }

  .calendar {
    background: #111;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
  }
  table td {
        border-radius: 50%;
        padding: 0px;
        text-align: center;
        color: #000;
        width: 50px;
        height: 50px;
        box-shadow: 1px 1px 3px #000;
    }

  .tt{
    display: flex;
    align-content: center;
    justify-content: center;
    background: #FFF;
    width: 400px;
    height: 400px
  }
  table{
    background: #888;
    display: flex;
    justify-content: center;
    align-content: center;
    color: #FFF;
    width: 100%;
    height: 100%;
    text-align: center;
    flex-wrap: wrap;
    flex-direction: column;

  }

  .pic {
    display: flex;
    content: "";
    width: 200px;
    height: 400px;
    background: #555;
    justify-content: center;
    margin: 30px;
    align-items: center;

  }
</style>
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
if (
  $month >
  12
) {
  $month = 1;
  $year += 1;
}
?>
<h1>Calendar</h1>
<div class="callyear">
  <div class="introm">
    <span class="prev"><a href="layout.php?month=<?= $month - 1 ?>&year=<?= $year ?>">Prev</a></span>
    <span>&nbsp&nbsp<?= $year; ?>&nbsp&nbsp</span>
    <span>/</span>
    <span>&nbsp<?= date('M', $month); ?>&nbsp</span>
    <span class="next"><a href="layout.php?month=<?= $month + 1 ?>&year=<?= $year ?>">Next</a></span>
  </div>
</div>
<div class="calendar">
  <div class="pic">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga maiores libero
    veritatis odio obcaecati ducimus maxime vitae quaerat nam delectus debitis,
    quibusdam eligendi? Iusto perferendis officiis voluptatibus mollitia cumque
    fuga!
  </div>
    <div class="tt">
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
          $WeekDays =date("t", strtotime($firstDay));
          //總天數 
          $spaceDay = ceil(($firstDayWeek + $WeekDays) / 7);
          if (date("Y", strtotime($firstDay)))
            for ($i = 0; $i <
              $spaceDay; $i++) {
              echo "
          <tr>
            ";
              for ($j = 0; $j < 7; $j++) {
                if ($i == 0 && $j < $firstDayWeek) {
                  echo "
            <td>";
                  echo "</td>
            ";
                } else {
                  echo "
            <td>
              ";
                  $day = $i * 7 + $j + 1 - $firstDayWeek;
                  if ($day <= $WeekDays) {
                    echo $day;
                  }
                  echo "
            </td>
            ";
                }
              }
              echo "
          </tr>
          ";
            } ?>
        </tbody>
      </table>
    </div>
  <div class="pic">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis quo placeat
    odio perspiciatis nesciunt ea, optio assumenda libero repellat saepe quod
    harum hic commodi impedit nihil minus consectetur laborum mollitia.
  </div>
</div>