<?php
include '../controllers/Database_Controller.php';
include '../controllers/Book_Controller.php';

if(isset($_GET['bookId']))
{
    $books = Book_Controller::getBookById($_GET['bookId']);
    echo json_encode($books->fetch_all(MYSQLI_ASSOC));
}
?>