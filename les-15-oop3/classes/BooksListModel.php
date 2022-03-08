<?php
require_once 'classes.php';

class BooksListModel {

    private $link;
    private $sql;
    private $sqladd;
    private $result = [];
    private $books = [];

    public function __construct($t = "") {

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->link = mysqli_connect("localhost", "root", "", "library_tst");
        mysqli_set_charset($this->link, "utf8mb4");

        if (mysqli_connect_errno()) {
            echo "Ошибка подключения к БД: " . mysqli_connect_error();
            exit();
        }

        if ($t == "" OR $t == "ALL" OR $t == "*") {
            $this->sqladd = '"ASM", "DB", "PHP", "TM", "WEB", "XML"';
        } elseif (iconv_strlen($t) > 3) {
            $t = str_replace(" ", "", $t);
            $t = implode('", "', explode(',', $t));
            $this->sqladd = '"' . $t . '"';
        } else {
            $this->sqladd = '"' . $t . '"';
        }

        $this->sql = 'SELECT bl.lng_code AS Book_Language, ' .
                'bt.book_type_name AS Book_Type, bt.file_ext AS EXT, ' .
                'bt.handler_name AS Book_Handler, t.short_name AS Book_Theme, ' .
                'b.name AS Book_Name, b.author AS Book_Author, ' .
                'b.stars_num AS Book_Rating, b.file_name AS Book_File ' .
                'FROM book AS b, book_language AS bl, book_type AS bt , theme AS t ' .
                'WHERE bl.book_language_id = b.book_language_id ' .
                'AND bt.book_type_id = b.book_type_id ' .
                'AND t.theme_id = b.theme_id ' .
                'AND t.short_name IN (' . $this->sqladd . ') ' .
                'ORDER BY b.theme_id, b.stars_num DESC;';

        $this->result = mysqli_query($this->link, $this->sql);

        if (!$this->result) {
            echo "Не получается получить данные" . mysqli_error($this->link);
            mysqli_close($this->link);
            exit();
        }

        while ($item = mysqli_fetch_array($this->result)) {
            $this->books[] = new $item['Book_Handler']($item);
        }

        mysqli_close($this->link);     
    }

    public function getList() {
        return $this->books;
    }

}
?>

