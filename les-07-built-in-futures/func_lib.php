<?php

/* 
 Function library
 */

function hello($name = ""){
//    var_dump($name);
    if($name == "") {
        echo "Hi, Unknown!<br>";
    } 
    else {
        echo "Hello, {$name}!<br>";
    }
}

