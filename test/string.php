<h4>字串處理</h4>
<hr>
<h5>1.子字串 substr() / mb_substr()</h5>
<?php
$s="Hello World";
echo $s;
echo "<br>";
echo substr($s,5,5);
echo "<br>";

echo "<hr>";

$s="新世紀福音戰士";
echo $s;
echo "<br>";
echo mb_substr($s,3,4);
echo "<br>";

echo "<hr>";
?>

<h5>2.去除頭尾空白 trim()</h5>
<?php
$a = "Hello World!";
echo $a . "<br>";
echo trim($a,"Hel");
?>

<hr>

<h5>3.重複指定字元 str_repeat()</h5>
<?php
    echo str_repeat("俺有30公分",5);
?>

<hr>

<h5>4.取代字串 str_replace()</h5>
<?php
    echo $s;
    echo "<br>";
    $ss =str_replace("新世紀","舊年代",$s);
    echo $ss;
?>

<hr>
<h5>5.特定字串/字元分割字串 explode</h5>
<?php
$str = "哈囉 今天天氣好嗎? 我很好"; 
$str_split=explode("今",$str);
echo "<pre>";print_r($str_split);echo "</pre>";



?>