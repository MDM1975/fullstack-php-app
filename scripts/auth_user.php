<?php
include '../controllers/Database_Controller.php';
include '../controllers/SiteUser_Controller.php';

$email = Database_Controller::escape($_GET['email']);
$userPassword = Database_Controller::escape($_GET['userPassword']);

$user = SiteUser_Controller::getUser($email, $userPassword);

if($user === true)
{
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['userPassword'] = $userPassword;
    echo "true";
}
else
{
    echo "false";
}
?>