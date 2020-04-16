<h4>字串含式練習</h4>
<div>字串 qqww2345</div>
<?php
$str='qqww2345';
$str2="";
for($i=0;$i<strlen($str);$i++){

    $str2=$str2 . "$";
    
    echo "i=" . $i . "=>" . $str2 . "<br>";
}
echo $str2;

echo "<hr>";
$str3=str_repeat("$",strlen($str));
echo $str3;

echo "<hr>";
echo str_repeat("*",20);
?>