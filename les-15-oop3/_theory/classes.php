<?php

abstract class Publication {

    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $author_name;
    public $preview;
    public $type;

    function __construct($row = NULL) {
        if ($row) {
            $this->id = $row['id'];
            $this->title = $row['title'];
            $this->date = $row['date'];
            $this->short_content = $row['short_content'];
            $this->content = $row['content'];
            $this->author_name = $row['author_name'];
            $this->preview = $row['preview'];
            $this->type = $row['type'];
        }
    }

}

class NewsPublication extends Publication {

    public function printItem() {
        echo "<br>Новость: ".$this->title;
        echo "<br>Дата: ".$this->date;
        echo "<p>".$this->short_content."</p>";
        echo "<hr>";
    }

}

class ArticlePublication extends Publication {

    public function printItem() {
        echo "<br>Стаья: ".$this->title;
        echo "<br>Автор: ".$this->author_name;
        echo "<p>".$this->short_content."</p>";
        echo "<hr>";        
    }

}

class PhotoReportPublication extends Publication {

    public function printItem() {
        $p = "http://localhost/pt.loc/les-15-oop3/_theory/".$this->preview;
        echo "<br>Фотоотчет: ".$this->title;
        echo "<br><img src=\"".$p."\" alt='' width='200px'>";
        echo "<p>".$this->short_content."</p>";
        echo "<hr>";        
    }

}

//testing
//$pub = ["id"=>"1", "title"=>"t1", "date"=>"d1", "short_content"=>"sc1", 
//    "content"=>"c1", "author_name"=>"an1", "preview"=>"p1", 
//    "type"=>"PhotoReportPublication", "xren"=>"ne xrena"];
//    последнее поле проверяет, что из массивы выберем нужное
//
//$pr = new PhotoReportPublication($pub);
//
//var_dump($pr);
//echo "<br>";
//var_dump($pr->type);

?>