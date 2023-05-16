<?php
class Author_Controller 
{
    public static function getAllAuthors()
    {
        $sqlQuery = 'SELECT * FROM Author ORDER BY lastName ASC';
        return Database_Controller::query($sqlQuery);
    }
}