<?php
class Genre_Controller 
{
    public static function getAllGenres()
    {
        $sqlQuery = 'SELECT * FROM Genre ORDER BY genreName ASC';
        return Database_Controller::query($sqlQuery);
    }
}