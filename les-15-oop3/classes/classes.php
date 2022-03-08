<?php

abstract class Book {

    public $language;
    public $type;
    public $ext;
    public $handler;
    public $theme;
    public $name;
    public $author;
    public $rating;
    public $file_name;

    public function __construct($book) {
        $this->language = $book['Book_Language'];
        $this->type = $book['Book_Type'];
        $this->ext = $book['EXT'];        
        $this->handler = $book['Book_Handler'];
        $this->theme = $book['Book_Theme'];
        $this->name = $book['Book_Name'];
        $this->author = $book['Book_Author'];
        $this->rating = $book['Book_Rating'];
        $this->file_name = $book['Book_File'];
    }

    public function fullPath() {
        //$fp = str_replace("classes", "library/", __DIR__);
        //$fp = str_replace("\\", "/", $fp);
        $fp = "library/";
        $fp = "{$fp}{$this->file_name}";
        return $fp;
    }
  
    public function iconPath() {
        //$fp = str_replace("classes", "img/", __DIR__);
        //$fp = str_replace("\\", "/", $fp);
        $fp = "img/";
        $fp = "{$fp}".mb_strtolower($this->ext).".png";
        return $fp;        
    }

}

class BookTxt extends Book {
    public function getBook() {
        $s = $this->fullPath();
        $str = '<a href="'.$s.'" download target="_blank">'.
                'Скачать TXT-файл: '.$this->file_name.'</a>';
        return $str;
    }
}

class BookPdf extends Book {
    public function getBook() {
        $s = $this->fullPath();
        $str = '<a href="'.$s.'" target="_blank">'.
                'Открыть PDF-файл: '.$this->file_name.'</a>';
        return $str;
    }
}

class BookFb2 extends Book {
    public function getBook() {
        $s = $this->fullPath();
        $str = '<a href="'.$s.'" download target="_blank">'.
                'Скачать FB2-файл: '.$this->file_name.'</a>';
        return $str;
    }
}

class BookEpub extends Book {
    public function getBook() {
        $s = $this->fullPath();
        $str = '<a href="'.$s.'" download target="_blank">'.
                'Скачать EPUB-файл: '.$this->file_name.'</a>';
        return $str;
    }
}

class BookDjvu extends Book {
    public function getBook() {
        $s = $this->fullPath();
        $str = '<a href="'.$s.'" download target="_blank">'.
                'Скачать DJVU-файл: '.$this->file_name.'</a>';
        return $str;
    }
}

class BookRtf extends Book {
    public function getBook() {
        $s = $this->fullPath();
        $str = '<a href="'.$s.'" target="_blank">'.
                'Открыть RTF-файл: '.$this->file_name.'</a>';
        return $str;
    }
}

class BookDoc extends Book {
    public function getBook() {
        $s = $this->fullPath();
        $str = '<a href="'.$s.'" target="_blank">'.
                'Открыть DOC-файл: '.$this->file_name.'</a>';
        return $str;
    }
}

class BookDocx extends Book {
    public function getBook() {
        $s = $this->fullPath();
        $str = '<a href="'.$s.'" target="_blank">'.
                'Открыть DOCX-файл: '.$this->file_name.'</a>';
        return $str;
    }
}

?>
