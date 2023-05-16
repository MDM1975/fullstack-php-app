<?php
include '../controllers/Database_Controller.php';
include '../controllers/SiteUser_Controller.php';

session_start();
$_SESSION = array();
session_destroy();

?>