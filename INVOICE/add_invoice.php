<link rel="shortcut icon" href="imgs/dot.ico" type="image/x-icon" />
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Iceland&family=Noto+Sans+TC:wght@300;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="include/bootstrap.css">
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/add_i.css">
<script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
</head>


<body>

  <?php include "com/nav.php";?>
  <div class="container mt-5">
    <div class="justify-content-center align-item-center ">
    <form action="save_number.php" method="post" class=" d-flex justify-content-center" >
        <table class="tb1 table table-bordered text-center justify-content-center table-dark ">
        <tr>
            <td >年月份</td>
            <td colspan="2">
                <div class="row">
                    <div class="col">
                        <select id="inputYear" class="a form-control mx-auto slt" name="year">
                            <option selected>請選擇年份...</option>
                            <option class="dropdown-item" value="2020" href="#">2020</option>
                            <option class="dropdown-item" value="2021" href="#">2021</option>
                            <option class="dropdown-item" value="2022" href="#">2022</option>
                        </select>
                    </div>
                    <div class="col">
                        <select id="inputMonth" class="a form-control mx-auto slt" name="period">
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
            <td>特別獎</td>
            <td>
                <input  type="number" name="num1" placeholder="請輸入獎號" class="slt">
            </td>
            <td>一千萬元</td>
        </tr>
        <tr>
            <td>特獎</td>
            <td>
                <input  type="number" name="num2" placeholder="請輸入獎號" class="slt">
            </td>
            <td>兩百萬元</td>
        </tr>
        <tr>
            <td>頭獎</td>
            <td>
                <input  type="number" name="num3[]" placeholder="請輸入獎號" class="slt"><br>
                <input  type="number" name="num3[]" placeholder="請輸入獎號" class="slt"><br>
                <input  type="number" name="num3[]" placeholder="請輸入獎號" class="slt"><br>
            </td>
            <td>二十萬元</td>
        </tr>
        <tr>
            <td>二獎</td>
            <td>末 7 位數號碼與頭獎中獎號碼末 7 位相同者</td>
            <td>四萬元</td>
        </tr>
        <tr>
            <td>三獎</td>
            <td>末 6 位數號碼與頭獎中獎號碼末 6 位相同者</td>
            <td>一萬元</td>
        </tr>
        <tr>
            <td>四獎</td>
            <td>末 5 位數號碼與頭獎中獎號碼末 5 位相同者</td>
            <td>四千元</td>
        </tr>
        <tr>
            <td>五獎</td>
            <td>末 4 位數號碼與頭獎中獎號碼末 4 位相同者</td>
            <td>一千元</td>
        </tr>
        <tr>
            <td>六獎</td>
            <td>末 3 位數號碼與頭獎中獎號碼末 3 位相同者</td>
            <td>兩百元</td>
        </tr>
        <tr>
            <td>增開六獎</td>
            <td>
                <input type="number" name="num4[]" placeholder="請輸入獎號" class="slt"><span class="&emsp "></span>
                <input type="number" name="num4[]" placeholder="請輸入獎號" class="slt">
                <input type="number" name="num4[]" placeholder="請輸入獎號" class="slt">
            </td>
            <td>兩百元</td>
        </tr>
        <tr>
          <td colspan="3">
            <input class="send h4 btn  btn-outline-light slt" type="submit" value="send">
          </td>
        </tr>
        </table>

    </form>
    </div>
</div>
</body>

</html>