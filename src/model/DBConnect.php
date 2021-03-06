<?php

namespace App\model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=website_movie";
        $this->username = "root";
        $this->password = "1234";
    }

    public function connect()
    {
        return new PDO($this->dsn, $this->username, $this->password);
    }
}