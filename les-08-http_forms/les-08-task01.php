<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 8. Protocol HTTP and forms. 
 * @link: https://php-start.com/lesson/php-start-theory/http-forms
 * 
 * @task 1. Request & Response
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 23.02.2022
 * 
 * @link: 
 * @link: https://www.php.net/manual/ru/faq.html.php
 * -----------------------------------------------------
 */

$p = [];
//print_r($_POST);
if (isset($_POST['submit'])) {

    for ($i = 1; $i <= 7; $i++) {
        $par = "par" . strval($i);
        $p += [$par => intval($_POST[$par])];
        //echo $par." - ".$p[$par];        
    }
    //var_dump($p);
    
    $sum=0;
    foreach($p as $k => $v){
        $sum += $v;
        echo "параметр ".$k." равен ".$v."<br>";
    }
    
    echo "наименьший параметр по значению: ".min($p)."<br>";
    echo "наибольший параметр по значению: ".max($p)."<br>";
    echo "среднее арифметическое значение параметров: ".strval($sum/7)."<br>";
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Task 01. Lesson 8.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            form {width: 25%;}
            label, input {
                        display: inline-block;
                        margin-top: 10px;
                        padding-top: 3px;
                        padding-bottom: 3px;
            }
        </style>
    </head>
    <body>
        <p>Введите данные в форму</p>
        <form action="les-08-task01.php" method="post">
            <span>1:</span><input type="text" name="par1"><br>
            <span>2:</span><input type="text" name="par2"><br>
            <span>3:</span><input type="text" name="par3"><br>
            <span>4:</span><input type="text" name="par4"><br>
            <span>5:</span><input type="text" name="par5"><br>
            <span>6:</span><input type="text" name="par6"><br>
            <span>7:</span><input type="text" name="par7"><br>
            
            <input type="submit" name="submit" value="submit">
        </form>   
    </body>
</html>

