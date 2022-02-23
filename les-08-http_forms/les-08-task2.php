<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 8. Protocol HTTP and forms. 
 * @link: https://php-start.com/lesson/php-start-theory/http-forms
 * 
 * @task 2. Forms using.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 23.02.2022
 * 
 * @link: 
 * 
 * -----------------------------------------------------
 */

if (isset($_POST['submit'])) {
    
    $p = "";
    $un = isset($_POST['user_name']) ? $_POST['user_name'] : "";
    $us = isset($_POST['user_surname']) ? $_POST['user_surname'] : "";;
    $g = isset($_POST['gender']) ? $_POST['gender'] : "";

    if ($g == "male") {
        $p = "мистер";
    } elseif ($g == "female") {
        $p = "мисcис";
    }
    
    echo "Добро пожаловать, {$p} {$us} {$un} !";
} 

?>
<head>
    <title>t2 l8</title>
    <meta charset = "utf-8">
</head>
<body>
    <h2>Давайте знакомится</h2>
    <form action="les-08-task2.php" method="post">
        <fieldset>
            <legend>Ваше имя</legend>
            <label for="name">Имя</label>
            <input type="text" id="name" name="user_name"><br>
            <label for="surname">Фамилия</label>
            <input type="text" id="surname" name="user_surname"><br>
        </fieldset>
        <fieldset>
            <legend>Кто Вы?</legend>
            <label><input type="radio" name="gender" value="male">муж.</label>
            <label><input type="radio" name="gender" value="female">жен.</label>
        </fieldset>
        <input type="submit" name="submit" value="submit">
   </form>
   <hr>
</body>

<?php

?>