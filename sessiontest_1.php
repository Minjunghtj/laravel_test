<?php
session_start();
?>

<html>
<head></head>
<body>

<?php

if(!isset($_SESSION['visited'])){ //設定していなかったら
    echo '初回訪問です';

    $_SESSION['visited'] = 1; //連想配列
    $_SESSION['date'] = date('c'); //現在の日付  
} else{

    $visited = $_SESSION['visited'];
    $visited++;
    $_SESSION['visited'] = $visited;

    echo $_SESSION['visited'].'回目の訪問です<br>';

    if(isset($_SESSION['date'])){
        echo '前回訪問は'.$_SESSION['date'].'です';
        $_SESSION['date'] = date('c');
    }

}

setcookie("id",'aaa', ,'/');

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';



?>

</body>
</html>

