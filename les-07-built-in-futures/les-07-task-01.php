<?php
require_once 'func_lib.php';

echo "Некоторые встроенные функции<br>";
$str = "Example";
var_dump($str);

//echo "<pre>";
//print_r(get_defined_vars());
//echo "</pre>";

$sum = round(22/7, 2);
printf("Сумма:%'_8s<br>", $sum);
printf("%04d-%02d-%02d и %3$02d-%2$02d-%1$04d<br>", 1975, 1, 22);

echo "<pre>";
for($i=0;$i<strlen($str);$i++){
    //echo "буква '{$str[$i]}' имеет код ".ord($str[$i])."<br>";
    printf("буква '%s' имеет ASCII-код %03d <br>", $str[$i], ord($str[$i]));
}
echo "</pre>";

echo date("d-m-yy")."<br>";
echo "<time datetime=".date(DATE_RFC822).">Время пошло</time><br>";

hello("Dad");


