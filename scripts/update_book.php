<?php
include '../controllers/Database_Controller.php';
include '../controllers/Book_Controller.php';

if(isset($_POST['bookId']) && isset($_POST['title']) && isset($_POST['publishDate']) && isset($_POST['bookDescription']) && isset($_POST['bookAuthor']) && isset($_POST['bookGenre']))
{
    $bookId = $_POST['bookId'];
    $title = Database_Controller::escape($_POST['title']);
    $publishDate = Database_Controller::escape($_POST['publishDate']);
    $bookDescription = Database_Controller::escape($_POST['bookDescription']);
    $bookAuthor = Database_Controller::escape($_POST['bookAuthor']);
    $bookGenre = Database_Controller::escape($_POST['bookGenre']);
    Book_Controller::updateBook($bookId, $title, $publishDate, $bookDescription, $bookAuthor, $bookGenre);
}
?>