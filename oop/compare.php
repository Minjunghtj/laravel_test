<h1>Function</h1>
<?php //fileの制御関数
var_dump(is_file('data.txt')); //fileの存在確認
var_dump(is_dir('data.txt')); //directoryか確認
var_dump(file_get_contents('data.txt'));
file_put_comtents('data.txt', rand(1,100))
?>


<h1>Object</h1>
<?php
$file = new SplFileObject('data.txt'); //objectを作る
var_dump($file->isFile());
var_dump($file->is_Dir());
var_dump($file->fread($file->getSize()));
$file->fwrite(and(1,100));

$file2 = new SplFileObject('data2.txt'); //objectを作る
var_dump($file2->isFile());
var_dump($file2->is_Dir());
var_dump($file2->fread($file->getSize()));
$file2->fwrite(and(1,100));

//SplFileObject : class
// $file, $file2 : instance
// isFile, isDir, fread : method(function)
// data.txt, data2.txt: state
?>


