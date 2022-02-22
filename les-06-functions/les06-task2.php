<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 6. Functions. 
 * @link: https://php-start.com/lesson/php-start-theory/user-functions
 * 
 * @task 1. Information about products in the cart.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 22.02.2022
 * 
 * @link: https://www.php.net/manual/ru/language.functions.php
 * 
 * -----------------------------------------------------
 */

$products = [   [ "name" => "Телевизор", "price" => "400", "quantity" => 1 ],
                [ "name" => "Телефон", "price" => "300", "quantity" => 3 ],
                [ "name" => "Кроссовки", "price" => "150", "quantity" => 2 ]
            ];

$cart = [];

$cart = total_in_cart($products);

echo "Общая сумма покупок: ".$cart["total_price"]."<br>";
echo "Общее количество выбранных товаров: ".$cart["total_quantity"]."<br>";

//functions block
function total_in_cart($prod){

    $total_price = 0;
    $total_quantity = 0;

    foreach ($prod as $val) {
        //print_r($val["price"]." - ".$val["quantity"]."<br>");
        $total_price += intval($val["price"]);
        $total_quantity += intval($val["quantity"]);
    }

    return ["total_price" => $total_price, 
            "total_quantity" => $total_quantity];    
}

