<?php

require_once 'BooksListModel.php';

function BooksListController($theme = "") {

    $books = new BooksListModel($theme);
    $books_list = $books->getList();

    foreach ($books_list AS $book) {
        // Без использования полиморфизма
        // вариант 1
        // $iconPath = "img/".$book->ext.".png";
        // вариант 2
        $iconPath = $book->iconPath();
        // с использлванием полиморфизма
        $getBook = $book->getBook();
        // getBook() у разных классов меняет вывод счачать / открыть 
        // *****************************
        $sectionBlock = <<<END
        <section class='book_block'>
                <div class='book_block-left'>
                    <img class='book_icon' src='$iconPath' alt='ico $book->ext'>
                    <p class='book_file'>$book->file_name</p>
                    <p class='book_rating'>Рейтинг: $book->rating</p>
                </div>
                <div class='book_block-right'>
                    <h3 class='book_name'>$book->name</h3>
                    <p class='book_author'>$book->author</p>
                    <div class='book_info'>
                        Язык: <span>$book->language</span>
                        Формат: <span>$book->ext</span>
                    </div>    
                    <div class='book_link'>
                        $getBook
                    </div>
                </div>
            </section>
        END;        
       //var_dump($sectionBlock);
        echo $sectionBlock;
    }
}

?>
