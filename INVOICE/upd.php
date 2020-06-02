<?php
include_once "com/base.php";
?>
<?php
$id=$_GET['id'];
$period=$_GET['period'];
?>

<link rel="shortcut icon" href="imgs/dot.ico" type="image/x-icon" />
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="include/bootstrap.css">
<link rel="stylesheet" href="css/list.css">
<link rel="stylesheet" href="css/nav.css">
<link href="https://fonts.googleapis.com/css2?family=Iceland&family=Noto+Sans+TC:wght@300;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice edit</title>
</head>
<body>
<?php
include "com/nav.php";
?>
<div class="container mt-5">
    <div class="justify-content-center align-item-center ">
    <form action="save_number.php" method="post" class=" d-flex justify-content-center" >
        <table class="tb1 table table-bordered text-center justify-content-center table-dark ">
        <tr>
            <td >年月份</td>
            <td colspan="2">
                <div class="row">
                    <div class="col">
                        <select id="inputYear" class="a form-control mx-auto" name="year">
                        <option selected>請選擇月份...</option>
                            <option class="dropdown-item" value="2020" href="#">2020</option>
                            <option class="dropdown-item" value="2021" href="#">2021</option>
                            <option class="dropdown-item" value="2022" href="#">2022</option>
                        </select>
                    </div>
                    <div class="col">
                        <select id="inputMonth" class="a form-control mx-auto" name="period">
                            <option selected>請選擇月份...</option>
                            <option class="dropdown-item" value="1">1-2</option>
                            <option class="dropdown-item" value="2">3-4</option>
                            <option class="dropdown-item" value="3">5-6</option>
                            <option class="dropdown-item" value="4">7-8</option>
                            <option class="dropdown-item" value="5">9-10</option>
                            <option class="dropdown-item" value="6">11-12</option>
                        </select>
                    </div>
                        </select>
                </div>        
            </td>
        </tr>
        <tr>
            <td>獎號</td>
            <td><input class="ml-1 mr-3 slt" type="text" name="code" size="3px" placeholder="AA" required="required" value="<?=find("invoice",$id)['code'] ?>">
                <input class="slt" type="number" name="number" placeholder="12345678" required="required" value="<?=find("invoice",$id)['number'] ?>">
            </td>
        </tr>
        <tr>
            <td>花費</td>
            <td>
            <input class="ml-1 slt" type="number" name="expend" placeholder="請輸入金額" required="required" value="<?=find("invoice",$id)['expend'] ?>">
                

            </td>
        </tr>
        <tr>
          <td colspan="3">
            <input class="send h3 btn  btn-outline-light" type="submit" value="send<?=save("invoice",$id);?>">
          </td>
        </tr>
        </table>

    </form>
    </div>
</div>















</body>
</html>