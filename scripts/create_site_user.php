<?php
include '../controllers/Database_Controller.php';
include '../controllers/SiteUser_Controller.php';

$firstName = Database_Controller::escape($_POST['registerFirstName']);
$lastName = Database_Controller::escape($_POST['registerLastName']);
$email = Database_Controller::escape($_POST['registerEmail']);
$userPassword = Database_Controller::escape($_POST['registerUserPassword']);

if(isset($firstName) && isset($lastName) && isset($email) && isset($userPassword)) {
    $newUser = SiteUser_Controller::registerUser($firstName, $lastName, $email, $userPassword);
    if($newUser) {
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['userPassword'] = $userPassword;
        echo "true";
    } else {
        echo "false";
    }
}
?>