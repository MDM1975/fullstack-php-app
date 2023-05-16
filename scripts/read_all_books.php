<?php
include '../controllers/Database_Controller.php';
include '../controllers/Book_Controller.php';

$books = Book_Controller::getAllBooks();
echo json_encode($books->fetch_all(MYSQLI_ASSOC));
?>