<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <style>
        body{
            margin:0;
        }
        form{
            margin: auto;
            width: 200px;
            height: 110px;
            display:block;
            padding: 5px;
            border-radius: 10px;
            border: 2px solid #999;
            text-align:center;
        }
        form div input{
            font-size: 15px;
            padding: 1px 1px;
            
        }
        form div input[type='submit'],
        form div input[type='reset']{
            width: 20%;
            margin: auto;
        }
    </style>   

</head>
<body>
    <?php
    $showLoginForm=true;
    if(isset($_GET['status'])){
        switch($_GET['status']){
            case "login":
                echo "你已登入";
                $showLoginForm=false;
            break;
            case "fail":
                echo "帳號密碼錯誤";
            break;
        }
    }
    
    ?>
    <?php
    if($showLoginForm){
    ?>
    <form action="user.php" method="post">
        <div>帳號:<input type="text" name="acc"></div>
        <div>密碼:<input type="paswword" name="pw"></div>
        <div>
            <input type="submit" value="登入">
            <input type="reset" value="重置">
        </div>
    </form>
    <?php
    }else{
    ?>
    <h1>!GHOST!</h1>
    <?php
    }
    ?>
</body>
</html>