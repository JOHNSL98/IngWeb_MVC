<?php
    include_once("model/Book.php");

    class Model {
        public function getBookList() {
            return array(
                "Libro 1" => new Book("libro 1", "autor libro 1", "descripcion libro uno."),
                "Libro2" => new Book("libro 2", "autor libro 2", "descripcion libro dos"),
                "Libro 2" => new Book("libro 3", "autor libro 3", "descripcion libro tres")
            );
        }
        
        public function getBook($title) {
            $allBooks = $this->getBookList();
            return $allBooks[$title];
        }
    }
?>