<?php

class Product{//class宣言、頭は大文字から


    //アクセス修飾子 private(外からアクセスできない), protected(自分・継承したクラスのみ), public(公開)  3つの中で1つ選ぶ、デフォルトはpublic


    //変数
    private $product = [];//クラス内で変数定義



    //関数

    function __construct($product = null){ // classを呼び出した初回に書く関数

        $this->product = $product;

    }

    public function getProduct(){ //function→関数、getProduct→関数名 public→アクセス修飾子
        echo $this->product; //this→このクラス　product→変数、＄は書かない
    }

    public function addProduct($item){ //addProduct→関数名
        $this->product .= $item; //このクラスの中の変数(product)に引数($item)追加
    }

    public static function getStaticProduct($str){
        echo $str;
    }
} 


    $instance = new Product('テスト');//instance化する方法、$instance変数内にinstanceが入る

    var_dump($instance);

    $instance->getProduct();
    echo '<br>';

    $instance->addProduct('追加分');
    echo'<br>';

    $instance->getProduct();
    echo'<br>';

    //静的(static) クラス名::関数名
    Product::getStaticProduct('静的');
    echo'<br>';

