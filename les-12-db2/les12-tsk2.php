<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 11. DB. 
 * @link: https://php-start.com/lesson/php-start-theory/databases-part-1
 * 
 * @task 2. DELETE statement.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 01.03.2022
 * 
 * @link: https://php-start.com/lesson/php-start-theory/databases-part-2
 * -----------------------------------------------------
 */

$con = mysqli_connect("localhost", "root", "", "news_site");
mysqli_set_charset($con, "utf8");

if(mysqli_connect_errno()) {
    echo "Ошибка подключения к БД: ".mysqli_connect_error();
} 
else {
    /*
    $sql = "SELECT * FROM news;";
    $result = mysqli_query($con, $sql);

    if(isset($result)) {
        echo "<pre>";
        var_dump($result);
        echo "</pre>";
        echo "<hr>";
        
        $count = mysqli_num_rows($result);
        
        if($count) {
            while($row = mysqli_fetch_array($result)) {
                echo "<h4>".$row['h1']."</h4>";
                echo ">> ".$row['category_id'].", ".$row['author_id'].
                        ", ".$row['date']."<br>";
                echo $row['short_content']."<br>";                
            }
        }
        
        echo "<hr>";
    }
    */
}
?>
<!--
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        /*
         * 
         */
        ?>
    </body>
</html>
-->