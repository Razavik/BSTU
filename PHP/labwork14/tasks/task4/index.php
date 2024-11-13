<?php
class Book
{
    public $title;
    public $author;
    public $genre = [];
    public $year;
    public $pages;
    public $condition = "new";

    public function __construct($title, $author, $year, $pages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->pages = $pages;
    }

    public function changeCondition($condition)
    {
        $this->condition = $condition;
    }

    public function addGenre($genre)
    {
        $this->genre[] = $genre;
    }

    public function rewriteGenres($genres)
    {
        $this->genre = $genres;
    }

    public function getInfo()
    {
        return "Название: {$this->title}, Автор: {$this->author}, Жанр: " . implode(", ", $this->genre) . ", Год издания: {$this->year}, Страниц: {$this->pages}, Состояние: {$this->condition}.";
    }
}

class EBook extends Book
{
    public $fileFormat;
    public $fileSize;

    public function __construct($title, $author, $year, $pages, $fileFormat, $fileSize)
    {
        parent::__construct($title, $author, $year, $pages);
        $this->fileFormat = $fileFormat;
        $this->fileSize = $fileSize;
    }

    public function setFileFormat($format)
    {
        $this->fileFormat = $format;
    }

    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    public function setFileSize($size)
    {
        $this->fileSize = $size;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function changeCondition($condition)
    {
        echo "Попытка изменения состояния ebook: Состояние электронной книги не изменяется.<br>";
    }

    public function getInfo()
    {
        return "Название: {$this->title}, Автор: {$this->author}, Жанр: " . implode(", ", $this->genre) . ", Год издания: {$this->year}, Страниц: {$this->pages}, Состояние: {$this->condition}, Формат файла: {$this->fileFormat}, Размер файла: {$this->fileSize} MB.";
    }
}

$book1 = new Book("1984", "Джордж Оруэлл", 1949, 328);
$book2 = new Book("Мастер и Маргарита", "Михаил Булгаков", 1967, 448);
$book3 = new Book("Преступление и наказание", "Фёдор Достоевский", 1866, 430);
$book4 = new Book("Война и мир", "Лев Толстой", 1869, 1225);

$eBook1 = new EBook("Краткая история времени", "Стивен Хокинг", 1988, 256, "PDF", 5);
$eBook2 = new EBook("Гарри Поттер и философский камень", "Дж.К. Роулинг", 1997, 320, "EPUB", 2);
$eBook3 = new EBook("Сага о ведьмаке", "Анджей Сапковский", 1992, 384, "MOBI", 3);

$book1->changeCondition("used");
$book2->changeCondition("old");

$book3->addGenre("Философия");

$book4->rewriteGenres(["Роман", "Исторический", "Драма"]);

$eBook1->setFileFormat("EPUB");
$eBook1->setFileSize(6);

$eBook2->setFileFormat("PDF");
$eBook2->setFileSize(2);

$eBook3->changeCondition("used");

echo $book1->getInfo() . "<br>";
echo $book2->getInfo() . "<br>";
echo $book3->getInfo() . "<br>";
echo $book4->getInfo() . "<br><br>";

echo $eBook1->getInfo() . "<br>";
echo $eBook2->getInfo() . "<br>";
echo $eBook3->getInfo() . "<br>";