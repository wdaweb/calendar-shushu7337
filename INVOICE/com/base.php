<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,'root',"");
date_default_timezone_set("Asia/Taipei");
session_start();
?>

<!-- 遠端版 -->
<!-- 
 $dsn="mysql:host=localhost;charset=utf8;dbname=s1090205";
 $pdo=new PDO($dsn,'s1090205',"s1090205");
 date_default_timezone_set("Asia/Taipei");
 session_start(); -->


<!-- del 刪除資料-->
<?php
function del($table,$arg){
    global $pdo;
    $sql="delete from $table ";
    
    // 如果$arg為陣列的話
    if(is_array($arg)){
        $tmp=[];
        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql." where " . implode(" && ",$tmp);
        
    }else{
        $sql=$sql." where `id`='$arg'";
    }
    echo $sql;
    echo "<hr>";
    // exec只會回傳成功或失敗
    // return $pdo->exec($sql);
}
?>

<!-- num 計算筆數-->
<?php
function nums($table,...$arg){
    global $pdo;
    $sql="select count(*) from $table ";
    
    if(isset($arg[0]) && is_array($arg[0])){
        $tmp=[];
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql." where " . implode(" && ",$tmp);
    }
    if(isset($arg[1])){
        $sql=$sql . $arg[1];
    }
    return $pdo->query($sql)->fetchColumn();
}
?>

<!-- find 查詢單筆 -->

<?php
function find($table,$arg){
    global $pdo;

    $sql="select * from $table ";

    if(is_array($arg)){
        $tmp=[];
        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql." where " . implode(" && ",$tmp);
    }else{
        $sql=$sql." where `id`='$arg'";
    }
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}
?>

<!-- all 查詢全部 -->
<?php
function all($table,...$arg){
    global $pdo;
    $sql="select * from $table ";
    
    if(isset($arg[0]) && is_array($arg[0])){
        $tmp=[];
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql." where " . implode(" && ",$tmp);
    }
    if(isset($arg[1])){
        $sql=$sql . $arg[1];
    }
    echo $sql;
    return $pdo->query($sql)->fetchAll();
}
?>


<!-- save 新增或更新資料 -->
<?php
function save($table,$arg){
    global $pdo;

    if(isset($arg['id'])){
        // ****** update ******
        foreach($arg as $key => $value){
            if($key!='id'){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
        }
    
        $sql="update $table  set " .implode(',',$tmp)." where `id` ='".$arg['id']."'";
    }else{
        //* ****** insert *******
        $sql="insert into $table (`".implode('`,`',array_keys($arg))."`) values ('".implode("','",$arg)."')";
        
    }
    return $pdo->exec($sql);
}
?>

<!-- 導頁面 -->
<?php
// 導頁面函式
function to($url){
    header("location:".$url);
}
?>

<!-- 萬用查詢 -->
<?php
function q($sql){
    global $pdo;

    return $pdo->query($sql)->fetchALL();
}
?>