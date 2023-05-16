<?php
class Book_Controller 
{
    public static function getAllBooks()
    {
        $sqlQuery = "SELECT b.bookId AS Id, b.title AS title, b.publishDate AS publishDate,
                         b.bookDescription AS bookDescription,
                         a.authorId AS authorId, 
                         g.genreId AS genreId, 
                         CONCAT(a.firstName,' ', a.lastName) AS authorName,
                         g.genreName AS genre
                     FROM Book b
                     INNER JOIN Author a ON a.authorId = b.bookAuthor
                     INNER JOIN Genre g ON g.genreId = b.bookGenre
                     ORDER BY b.bookId DESC";
        return Database_Controller::query($sqlQuery);
    }

    public static function getBookById($bookId)
    {
        $sqlQuery = "SELECT b.bookId AS Id, b.title AS title, b.publishDate AS publishDate,
                         b.bookDescription AS bookDescription,
                         a.authorId AS authorId, 
                         g.genreId AS genreId, 
                         CONCAT(a.firstName,' ', a.lastName) AS authorName,
                         g.genreName AS genre
                     FROM Book b
                     INNER JOIN Author a ON a.authorId = b.bookAuthor
                     INNER JOIN Genre g ON g.genreId = b.bookGenre
                     WHERE b.bookId = $bookId";
        return Database_Controller::query($sqlQuery);
    }

    public static function insertBook($title, $publishDate, $bookDescription, $bookAuthor, $bookGenre)
    {
        $sqlQuery = "INSERT INTO Book (title, publishDate, bookDescription, bookAuthor, bookGenre)
                     VALUES ('$title', '$publishDate', '$bookDescription', '$bookAuthor', '$bookGenre')";
        return Database_Controller::insert($sqlQuery);
    }

    public static function updateBook($bookId, $title, $publishDate, $bookDescription, $bookAuthor, $bookGenre)
    {
        $sqlQuery = "UPDATE Book
                     SET title = '$title', publishDate = '$publishDate', bookDescription = '$bookDescription', bookAuthor = '$bookAuthor', bookGenre = '$bookGenre'
                     WHERE bookId = $bookId";
        return Database_Controller::update($sqlQuery);
    }

    public static function deleteBook($bookId)
    {
        $sqlQuery = "DELETE FROM Book WHERE bookId = $bookId";
        return Database_Controller::delete($sqlQuery);
    }
}