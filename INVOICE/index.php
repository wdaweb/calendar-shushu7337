<link rel="stylesheet" href="./include/bootstrap.css">
<link rel="stylesheet" href="./css/stylein.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>統一發票管理系統</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="d-flex justify-content-around align-items-center flex-column" style="height: 100vh;">
<form action="save_invoice.php" method="post"> 
<div class="card  mx-auto shadow " style="height: 300px;width: 800px;">
    <div class="info row no-gutters">
      <div class="col-md">
          <div class="form-group">
            <div class="form-group col-md" >
              <label for="inputYear">Year</label>
              <select id="inputYear" class="form-control" name="year" >
                <option selected>Choose...</option>
                <option class="dropdown-item" value="2020" href="#">2020</option>
                <option class="dropdown-item" value="2021" href="#">2021</option>
                <option class="dropdown-item" value="2022" href="#">2022</option>
              </select>
            </div>
            <div class="form-group col-md" >
              <label for="inputMonth">Month</label>
              <select id="inputMonth" class="form-control" name="period">
                <option selected>Choose...</option>
                <option class="dropdown-item" value="1">1-2</option>
                <option class="dropdown-item" value="2">3-4</option>
                <option class="dropdown-item" value="3">5-6</option>
                <option class="dropdown-item" value="4">7-8</option>
                <option class="dropdown-item" value="5">9-10</option>
                <option class="dropdown-item" value="6">11-12</option>
              </select>
            </div>
          </div>
          <div class="col">獎號</div>
          <input type="text" name="code" size="3px">
          <input type="number" name="number">
          <div class="col">花費</div>
          <input type="number" name="expend">
          <input type="submit" value="儲存">
        </div>
      </div>
    </div>
  </div>
  </div>
  </form>

</body>

</html>