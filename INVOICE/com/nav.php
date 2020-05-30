<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <div class="container">
    <a class="navbar-brand  mb-0" href="index.php">Receipt Lottery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto mt-2 mt-lg-0">
        <a class="nav-item nav-link " href="invoice.php">發票兌獎</a>
        <a class="nav-item nav-link" href="add_invoice.php">獎號輸入</a>
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          發票獎號
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="invoice.php?period=1">1 - 2</a>
          <a class="dropdown-item" href="invoice.php?period=2">3 - 4</a>
          <a class="dropdown-item" href="invoice.php?period=3">5 - 6</a>
          <a class="dropdown-item" href="invoice.php?period=4">7 - 8</a>
          <a class="dropdown-item" href="invoice.php?period=5">9 - 10</a>
          <a class="dropdown-item" href="invoice.php?period=6">11 - 12</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="invoice.php?year=<?=date("Y");?>?period=<?=ceil(date("n")/2);?>">當期</a>
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
          <a class="dropdown-item" href="list.php?year=<?=date("Y");?>?period=<?=ceil(date("n")/2);?>?>">當期</a>
        </div>
      </li>
      </div>
    </div>
    </div>
</nav>