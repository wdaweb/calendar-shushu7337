
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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand h1 mb-0" href="index.php">Receipt Lottery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="invoice.php">發票兌獎</a>
        <a class="nav-item nav-link" href="add_invoice.php">獎號輸入</a>
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          發票獎號
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">1 - 2</a>
          <a class="dropdown-item" href="#">3 - 4</a>
          <a class="dropdown-item" href="#">5 - 6</a>
          <a class="dropdown-item" href="#">7 - 8</a>
          <a class="dropdown-item" href="#">9 - 10</a>
          <a class="dropdown-item" href="#">11 - 12</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="invoice.php">當期</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          發票列表
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="list.php?period=1">1 - 2</a>
          <a class="dropdown-item" href="list.php?period=2">3 - 4</a>
          <a class="dropdown-item" href="list.php?period=3">5 - 6</a>
          <a class="dropdown-item" href="list.php?period=4">7 - 8</a>
          <a class="dropdown-item" href="list.php?period=5">9 - 10</a>
          <a class="dropdown-item" href="list.php?period=6">11 - 12</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="list.php?period=<?=ceil(date("n")/2);?>">當期</a>
        </div>
      </li>
      </div>
    </div>
    </div>
</nav>



<header class="mx-auto">
<h1 class="top">Receipt  Lottery</h1>
  <p>Welcome to this system !<p>This page is for the matching invoice of the unified invoice, bless you to win the prize!</p>
</header>
<form action="save_invoice.php" method="post"> 
<div class="card  mx-auto shadow " style="height: 400px;width: 600px;">
    <div class="info row no-gutters">
      <div class="col-md">
          <div class="form-group m-0">
            <h1 class="form-group col-md m-3">  
              2020 Receipt Lottery
            </h1>
          <div class="py-1">
            <div class="year px-5 py-1 form-group col-md m-1" >
              <label for="inputYear p-1">Year</label>
              <select id="inputYear" class="form-control" name="year">
                <option selected>Choose...</option>
                <option class="dropdown-item" value="2020" href="#">2020</option>
                <option class="dropdown-item" value="2021" href="#">2021</option>
                <option class="dropdown-item" value="2022" href="#">2022</option>
              </select>
            </div>
            <div class="month px-5 py-1 form-group col-md m-1" >
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
            <div class="px-5 py-1">
              <div class="number form-group col p-0 m-1">獎號</div>
                <input type="text" name="code" size="3px">
                <input type="number" name="number">
              </div>
            <div class="px-5 py-1">
              <div class="expend form-group col p-0 m-1">花費</div>
                <input type="number" name="expend">
                <input type="submit" value="儲存">
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