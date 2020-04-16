<h4>字串"好的，中國武漢肺炎"，請將"武漢肺炎"四字放大並變色</h4>
<?php
$str="好的，中國武漢肺炎";
echo "<br>";

echo str_replace("武漢肺炎","<span style= 'color:red;font-size:24px'>武漢肺炎</span>",$str);

// 另類修改方法
echo"<hr>";
$str="好的，中國武漢肺炎";
$search="武漢肺炎";
$target="<span style= 'color:red;font-size:24px'>武漢肺炎</span>";
echo str_replace($search,$target,$str);
?>

<h4>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</h4>

<?php
$str="“學會PHP網頁程式設計，薪水會加倍，工作會好找”";
$search="程式設計";
$target="<span style= 'color:red;font-size:24px'>程式設計</span>";
echo str_replace($search,$target,$str);




?>