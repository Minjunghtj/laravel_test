<?php

/*数字 と 文字
数字は半角
*/
//123
echo(123);
echo'<br>';
echo('こんにちは');
echo'<br>';
echo('こちらはPHPです.');
echo'<br>';


//変数　動的型付、JAVA,Visual Basic　静的片付　
$test_1 = 123;
$test_2 = 456;
$test_3 = $test_1 . $test_2;
//先頭は英文字かアンダーバー
//$test = 'テストです';
var_dump($test_3);
//変数を２つくっつける場合は、文字として認識される）
echo $test_3;
echo'<br>','<br>';



//定数　変わらない数・文字
// constant
const MAX = 'テスト1';
echo MAX;
echo'<br>';
echo'<br>';


//配列　1行
$array_1 = ['ああ',2,3];

$array_2 = [
    ['赤','青','黄'],
    ['緑','紫','黒']
];

//0から始まる
//echo $array[1];

echo'<pre>';
echo $array_1[1];
echo'<br>';
echo'<br>';
var_dump($array_2);
echo '</pre>';

//echo $array_2[1][1];




//連想配列
$array_member = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];

echo $array_member['hobby'];
echo '<pre>';
var_dump($array_member);
echo '</pre>';

$array_member_2 = [
    '本田' => [
        'height'=> 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height'=> 165,
        'hobby' => 'サッカー'
    ]
];    

echo $array_member_2['香川']['height'];

echo '<pre>';
var_dump($array_member_2);
echo '</pre>';

$array_member_3 = [
    '1kumi' => [
        '本田'=> [
            'height'=> 170,
            'hobby' => 'サッカー'
        ],
        '香川'=> [
            'height'=> 165,
            'hobby' => 'サッカー'
         ]
        ],
    '2kumi' => [
        '長友' => [
            'height' => 160,
            'hobby' => 'サッカー'
        ],
        '乾' => [
            'height' => 158,
            'hobby' => 'サッカー'
        ]
    ]
];    

echo $array_member_3['2kumi']['長友']['height'];

echo '<pre>';
var_dump($array_member_3);
echo '</pre>';




//演算子
$test_4 = 7;
$test_5 = 3;
$test_6 = $test_4 % $test_5;
/*3つに分けたい
1
2
3・・余りが0
4
5
6・・余りが0
*/
echo $test_6;
echo'<br>';
echo'<br>';




/*if文
if (条件){
    条件が真なら実行
} else{
    条件が偽なら実行
}
*/

$height = 90;//数字

var_dump($height);
//== 一致
//=== 型も一致
if ($height === 91){//条件は数字
    echo '身長は' .  $height . 'cmです';
}else{
    echo '身長は' . $height . 'cmではありません';
}

//できるだけelseはifに代替

//if ($height >= 91){//条件は数字
    //echo '身長は' .  $height . 'cmです';
//}

//if ($height<= 90){
    //echo '身長は' . $height . 'cmになります。';
//}

if ($height !== 90){//形が同じかどうかによって＝か＝＝
    echo '身長は90㎝ではありません。';
}
//90ではなかったら、実行される
echo '<br>';




//データが入っているかどうか
// isset empty is_null
$test = '';
if(empty($test)){
    echo '変数は空です';
}
echo'<br>';

$test = '1';
if(!empty($test)){//変数が空ではなかったら、実行
    echo '変数は空ではありません';
}
echo'<br>';




// AND と OR

$signal_1 = 'red';
$signal_2 = 'blue';

if($signal_1 === 'red' && $signal_2 === 'blue'){//&はandマーク、||はorマーク
    echo '赤と青です';
}
echo'<br>';




//三項演算子（一行で書ける）
//if else
//条件 ? 真 : 偽
$math = 80;
$comment = $math > 80? 'good' : 'not good';
echo $comment;
echo'<br>';


$signal = 'blue';
if ($signal === 'red'){
    echo 'とまれ';
} else if($signal === 'yellow'){
    echo '一旦停止';    
} else{
    echo '進む';
}   
echo'<br>';

$speed = 80;

if ($signal === 'blue'){
    if ($speed >= 80){ //ネスト
        echo  'スピード違反';
    }    
}
echo'<br>';




//foreach（複数の値）
$members = [
    'name' => '本田',
    'height'=> 170,
    'hobby' => 'サッカー'
];

// バリューのみ表示
foreach($members as $member){
    echo $member;
}

echo '<br>';

//キーとバリューそれぞれ表示
foreach($members as $key => $value){
    echo $key . 'は' .  $value . 'です';
}
// = foreach($members as $member => $value){
  //  echo $member . 'は' $value . 'です';
//}

$members_2 = [
    '本田' => [
     'height'=> 170,
     'hobby' => 'サッカー'    
    ],
    '香川' => [
     'height'=> 165,
     'hobby' => 'サッカー'
    ]  
];

echo '<br>';





//多段階の配列を展開
foreach($members_2 as $member_1){
    foreach($member_1 as $member => $value){
    echo $member . 'は' . $value . 'です';
    }    
}
echo '<br>';





//for　繰り返す数が決まっていたら
// while　繰り返す数が決まっていないあったら
//continue, break 
for($i = 0; $i < 10; $i++ ){ //0からスタート、10より少ない間は繰り返す、iを1つづつ増やしていく
    
    if($i === 5){
    //break;　5番目まで　できるだけ使わない
    //continue; 5番目だけ飛ばされる　できるだけ使わない
    }
    echo $i;
}
echo '<br>';

//while
$j = 0;
while($j < 5){
    echo $j;
    $j++;
}
if($data === 1){
    echo '1';
}
echo '<br>';



//switch
//if文のほうが好ましい

//==　switch
$data = 1;//'1'文字にしても＝＝処理する
switch($data){
    case 1://厳密にしたい場合は、$data === 1;と書かないといけない
        echo '1です';
        break; //毎回書かなきゃいけない
    case 2:
        echo '2です';
        break; 
    case 3:
        echo '3です';
        break; 
    default://1,2,3じゃない場合
        echo '1-3ではありません';  

}
echo '<br>';

if($data === 1){
    echo '1';
}
if($data === 2){
    echo '2';
}
if($data === 3){
    echo '3';
}
echo '<br>';



//関数（何らかの処理）
//組み込み関数→順見してある関数、ユーザー定義関数→自由に作れる関数

//　インプット引数　なし
// アウトプット戻り値　なし

function test(){//(引数)
    //処理

    echo'テスト';
    //return 戻り値；
}

test();
echo '<br>';

//インプット引数あり
//アウトプット戻り値　なし

$comment = 'コメント２';//引数と違ってもオッケ

function getComment($string){//(引数)
    //処理
    echo $string;//引数と同じ

    //return 戻り値；
}
    getComment($comment);

echo '<br>';

//インプット引数なし
//アウトプット戻り値あり

getComment($comment3);

function getNumberOfComment(){
        return 5;
}

$commentNumber = getNumberOfComment();
//echo getNumberOfComment();
echo $commentNumber;
echo '<br>';

//引数2つ
//戻り値あり
function sumPrice($int1,$int2){
$int3 = $int1 + $int2;
return $int3;
}

$total = sumPrice(3,5);
echo $total;
echo '<br>';


//文字列の長さ
//マルチバイト
//日本語　UTF-8　3~6バイト
$text = 'あいうえお';
//echo strlen($text);　→3バイトX5＝15
echo mb_strlen($text); //5
echo '<br>';

//文字列の置換
$str = '文字列を置換します';
echo str_replace('置換','ちかん', $str); 
// str_replace (mixed $search , mixed $replace, mixed $subject)
//subjectの中のsearhを全てreplaceに置換します。


//指定文字列で分割
$str_2 = '指定文字列で、分割します';
echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';
//explode(string $delimiter , string $string)
//stringを文字列delimiterで区切った部分文字列

//文字列をくっつける→　implode

//正規表現（文字かどうか、数字かどうか）
//メールアドレスか(@tと.が入ってるか) test@gmail.com
$str_3 = '特定の文字列が含まれるか確認する';
echo preg_match('/文字列/',$str_3);//1→　入ってある
echo '<br>';

// 指定文字列から文字列を取得する
echo substr('abcde', 1);//bcde
echo '<br>';
echo substr('abcde', 2);//cde
echo '<br>';

echo substr('あいう',2);
echo mb_substr('かきくけこ',2);
echo '<br>';


//配列に配列を追加する
$array = ['りんご','みかん'];
array_push($array, 'ぶどう','なし');

echo '<pre>';
var_dump($array);
echo '</pre>';


$postalCode = '123-4567';

//camelCase
function checkPostalCode($str){
    $replaced = str_replace('-','',$str);
    $length = strlen($replaced);

    if($length === 7){
        return true;
    }
    return false;
}

var_dump(checkPostalCode($postalCode));

//snakeCase
//check_postal_code()



//変数のスコープ
$globalVariable = 'グローバル変数です';

function checkScope($str){
 $localVariabe = 'ローカル変数です';
 //global $globalVariable;
 echo $str;
}

echo $globalVariable;
echo $localVariable;//表示されない,関数の中でだけ使える

checkScope($globalVariable);//関数を実行することで、関数の中にある変数も使える



//ファイルの読み込み

require 'common.php';//'../common/common.php'; commonフォルダー、../　→もう一つ上の階層
// require _DIR_ . '/common/common.php'; →　絶対パスで指定できる
echo $commonVariable;
echo _DIR_; //絶対パス見れる
// echo _FILE_; ファイル名まで見れる
commonTest();

?>