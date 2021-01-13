<?php


class Book 
{
    public $isbn;
    public $title;
    public $author;
    public $available;

    public function __construct (
        string $title,
        string $author,
        float $isbn,
        int $available
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->available = $available;
    }

    public function printableTitle(): string
    {
        $result = "<i>{$this->title}</i> - {$this->author}";
        if (!$this->available) {
            $result .= " <b>not available</b>";
        }
        return $result;
    }

    public function getCopy(): bool
    {
        if ($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }
}


$book = new Book("1984", "George Orwell", 2255555555557, 0.5);
echo $book->printableTitle();



// $book2 = new Book();
// $book2->title = "To Kill A Mockingbird";
// $book2->author = "Rasmus Eldblad";
// $book2->available = true;
// echo $book2->printableTitle();



// var_dump($book);
// var_dump($book2);


?>