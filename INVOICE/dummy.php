<?php
include_once "com/base.php";
$num=1000;
// 建立code 的陣列
$char=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",];



for($i=0;$i<$num;$i++){
    // 隨機存取
    $code=$char[rand(0,25)] . $char[rand(0,25)];
    $data=[
        'period'=>rand(1,6),
        'year'=>rand(2020,2021),
        'code'=>$code,
        'number'=>rand(10000000,77777777),
        'expend'=>rand(10,100),
      ];
    echo "已新增" . $data ["code"] . $data['number']. "<br>";
    save("invoice",$data);
}

?>