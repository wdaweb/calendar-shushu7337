
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="include/bootstrap.css">
<link rel="stylesheet" href="css/index.css">
<link href="https://fonts.googleapis.com/css2?family=Iceland&family=Noto+Sans+TC:wght@300;700&display=swap" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receipt Lotter</title>
</head>

<body >

<?php
include "com/nav.php";
?>
<header class="mx-auto mb-0">
<h1 class="top ">Receipt  Lottery</h1>
  <p class="h5">Welcome to this system !This page is for the matching invoice of the unified invoice, bless you to win the prize!</p>
</header>
<form action="save_invoice.php" method="post"> 
<div class="card  mx-auto shadow " style="height: 400px;width: 600px;">
    <div class="info row no-gutters">
      <div class="col-md">
          <div class="form-group m-0">
            <h2 class="form-group col-md mb-1 pt-3">  
              請輸入發票資訊 
            </h2>
          <div class="pb-2">
            <div class="year px-5 py-1 form-group col-md m-1 h3 " >
              <label for="inputYear p-1">Year</label>
              <select id="inputYear" class="form-control slt" name="year" required>
                <option selected >請選擇輸入年份</option>
                <option class="dropdown-item" value="2020" href="#">2020</option>
                <option class="dropdown-item" value="2021" href="#">2021</option>
                <option class="dropdown-item" value="2022" href="#">2022</option>
              </select>
            </div>
            <div class="month px-5 py-1 form-group col-md m-1 h3" >
              <label for="inputMonth">Month</label>
              <select id="inputMonth" class="form-control slt" name="period" required>
                <option selected require>請選擇輸入年份</option>
                <option class="dropdown-item" value="1">1-2</option>
                <option class="dropdown-item" value="2">3-4</option>
                <option class="dropdown-item" value="3">5-6</option>
                <option class="dropdown-item" value="4">7-8</option>
                <option class="dropdown-item" value="5">9-10</option>
                <option class="dropdown-item" value="6">11-12</option>
              </select>
            </div>
            </div>
            <div class="px-5 py-1">
              <div class="number form-group col p-0 mb-1">獎號</div>
                <input class="ml-1 mr-3 slt" type="text" name="code" size="3px" placeholder="AA" required="required">
                <input class="slt" type="number" name="number" placeholder="12345678" required="required">
              </div>
            <div class="px-5 py-1">
              <div class="expend form-group col p-0 mb-1">花費</div>
                <input class="ml-1 slt" type="number" name="expend" placeholder="請輸入金額" required="required">
                <input class="float-right btn  btn-outline-light slt" type="submit" value="儲存" required="required">
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>
  </form>

</body>

</html>