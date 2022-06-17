<?php
//require_once 'greeting.php';
//class loading 다른 파일에 있는 클래스 로딩 방법

function autoloader($path){
    $path = $path.'.php';
    var_dump("path : {$path}");
    require_once '$path';

}
spl_autoload_register('autoloader');
new Hi();
new Bye();

?>