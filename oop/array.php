<h1>Function Style</h1>
<?php
$adata = array('a','b','c');
array_push($adata,'d'); //配列に値追加

foreach($adata as $item){//adataの配列の値を引き出し,$itemとして使える
    echo $item.'<br>';
}

var_dump(count($adata));//値の数数える
?>

<h1>Object Style</h1>
<?php
$odata = new ArrayObject(array('a','b','c'));
$odata->append('d');
foreach($odata as $item){
    echo $item.'<br>';
}

var_dump($odata->count());
?>

