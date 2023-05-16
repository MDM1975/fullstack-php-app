<?php
class Database_Controller 
{
    public static function connect()
    {
        $connection = new mysqli('localhost', 'mdm1975', 'DD9rYt6PBA', 'mdm1975');
        if ($connection->connect_error) {
            die('Connection error' . $connection->connect_error);
        } else {
            return $connection;
        }
    }

    public static function query($query)
    {
        $connection = Database_Controller::connect();
        $result = $connection->query($query);
        return $result;
    }

    public static function insert($query)
    {
        $connection = Database_Controller::connect();
        $result = $connection->query($query);
        return $result;
    }

    public static function update($query)
    {
        $connection = Database_Controller::connect();
        $result = $connection->query($query);
        return $result;
    }

    public static function delete($query)
    {
        $connection = Database_Controller::connect();
        $result = $connection->query($query);
        return $result;
    }

    public static function escape($string)
    {
        $connection = Database_Controller::connect();
        $result = $connection->real_escape_string($string);
        return $result;
    }
}