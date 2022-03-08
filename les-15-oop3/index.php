<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 15. OOP, part 3. 
 * @link: http://php-start.com/lesson/php-start-theory/object-oriented-programming-part-3
 * 
 * @task. Polymorphism.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 08.03.2022

 * -----------------------------------------------------
 */
require_once 'classes/BooksListController.php';
?>
<!doctype html>
<html>
    <head>
        <title>Library</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body>
        <header></header>
        <main>
            <h1>Рекомендации для самоподготовки</h1>
            <h2>Изучите следующие книги по PHP</h2>
            <?php
                BooksListController('PHP');
            ?>
            <h2>Изучите следующие книги по WEB</h2>
            <?php
                BooksListController('WEB');
            ?>
            <h2>Почитайте на досуге</h2>
            <?php
                BooksListController('ASM, DB, TM, XML');
            ?>
        </main>
        <footer></footer>
    </body>
</html>
