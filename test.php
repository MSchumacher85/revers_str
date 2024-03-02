<?php

require_once('functions.php');

function testRevertStr($func = "revertStr")
{
    $testStr = "Тестовая строка!!!";
    $testRevert = "Яавотсет акортс!!!";

    if($func($testStr) == $testRevert){
        return "Тест выполнен успешно!!!";
    }
    else{
        return "Ошибка тестирования функции!!!";
    }
}

echo testRevertStr();
