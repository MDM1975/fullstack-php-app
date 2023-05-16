<?php
include '../controllers/Database_Controller.php';
include '../controllers/Book_Controller.php';

if(isset($_POST['bookId']))
{
    Book_Controller::deleteBook($_POST['bookId']);
}
?>