<?php
namespace greeeting\en;
class Hi{
    function __construct(){
        echo '<h1>Hi</h1>';
    }
}

namespace greeting\ja;
class Hi{
    function __construct(){
        echo '<h1>こんにちは</h1>';
    }
}

/*
use \greeting\en, \greeting\ja;
new en\Hi();
new ja\Hi();
*/

use \greeting\en\Hi as HiEn;
use \greeting\ja\Hi as HiKO
new HiEn();
new HiJa();


?>