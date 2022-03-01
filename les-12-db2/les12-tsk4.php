<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 11. DB. 
 * @link: https://php-start.com/lesson/php-start-theory/databases-part-1
 * 
 * @task 4. SELECT statement.
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

    $sql = "SELECT status AS STATUS, count(*) AS COUNT ".
    "FROM news GROUP by status;";
    $result = mysqli_query($con, $sql);

    if(isset($result)) {
 
        $count = mysqli_num_rows($result);
        
        if($count) {
            echo "STATUS - COUNT <br>";
            while($row = mysqli_fetch_array($result)) {
                echo $row['STATUS']." - ".$row['COUNT']."<br>";  
            }
        }
        echo "<hr>";
    }

}
?>
