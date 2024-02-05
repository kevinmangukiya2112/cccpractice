<?php
class Book {
    public $title;
    public $author;

    public function displayInfo() {
        echo "Title: $this->title, Author: $this->author";
    }
}

class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function displayAllBooks() {
        foreach ($this->books as $book) {
            $book->displayInfo();
            echo "<br>";
        }
    }
}

// Example Usage:
$book1 = new Book();
$book1->title = "The Catcher in the Rye";
$book1->author = "J.D. Salinger";

$book2 = new Book();
$book2->title = "To Kill a Mockingbird";
$book2->author = "Harper Lee";

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);

$library->displayAllBooks();

class book1{
    public $name;
    public $author;
    public function display(){
        echo "Name: $this->name , Author: $this->author";
    } 
}

class book2{
    private $book=[];
    public function add(book1 $obj){
    $this->book[]=$obj;
    }
    public function displaybooks(){
    foreach($this->book as $boook){
        $boook->display();
        echo"<br>";
    }
    }
}
$obj=new book1();
$obj->name="BHAGWATGEETA";
$obj->author="VYAS";
$obj1=new book1();
$obj1->name="RAMAYANA";
$obj1->author="VALMIKI";
$ADD = new book2();
$ADD->add($obj);
$ADD->add($obj1);

$ADD->displaybooks();
?>