<?php
class SiteUser_Controller
{
    public static function getAllUsers()
    {
        $sqlQuery = "SELECT * FROM SiteUser";
        return Database_Controller::query($sqlQuery);
    }

    public static function getUser($email, $userPassword)
    {
        $sqlQuery = "SELECT * FROM SiteUser WHERE email = '$email' AND userPassword = '$userPassword'";
        $result = Database_Controller::query($sqlQuery);
        if($result->num_rows === 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function registerUser($firstName, $lastName, $email, $userPassword)
    {
        $sqlQuery = "INSERT INTO SiteUser (firstName, lastName, email, userPassword) 
                     VALUES ('$firstName', '$lastName', '$email', '$userPassword')";
        return Database_Controller::insert($sqlQuery);
    }
}