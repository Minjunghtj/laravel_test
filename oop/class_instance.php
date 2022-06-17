<?php
class YourFileObject{
private $filename
//public $filename
function __construct($fname){
 $this->filename = $fname;
 if(!file_exists($this->filename)){
     die('There is no file '.$this->filename);
 }
}   
 function isFile(){
     return is_file($this->filename);
     //$this-> instance($file)を呼び出すため必須
 }
}

/*
class MyFileObject{
    function isFile(){ //classが違うので同じメソッド使用可能・関数型→　重複不可能
        return is_file($this->filename);
    }
   }
*/

$file = new YourFileObject('data1.txt');
//$file = new YourFileObject();
//$file->filename = 'data.txt';
$file->filename = 'aksjdg.txt';
var_dump($file->isFile());
var_dump($file->filename);

/*
$file2 = new YourFileObject();
$file2->filename = 'data2.txt';
var_dump($file2->isFile());
var_dump($file2->filename);
*/

/*
MyFileObject : class
$file, $file2 : instance
isFile : method, bevavior
$this->filename : 
    instance variable, instance field, instance property
    status
*/


?>