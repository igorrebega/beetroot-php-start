<?php

class Connection
{
    public static function make($config)
    {
        $host = $config['host'];
        $db = $config['name'];
        $user = $config['user'];
        $pass = $config['password'];

        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        try {
            $pdo = new PDO(
                $dsn,
                $user,
                $pass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch (\PDOException $e) {
            echo 'Can`t connect to database because: ';
            echo $e->getMessage();
            die();
        }

        return $pdo;
    }
}
