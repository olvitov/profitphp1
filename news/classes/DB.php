<?php

/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 17.07.2016
 * Time: 15:44
 */
class DB
{
  protected $dbh;
    public function __construct()
    {
        $config = include (__DIR__ . '/../config.php');
        $dsn = 'mysql:host=' .$config['host'] . ';dbname=' . $config['dbname'];
        $this->dbh = new PDO(
            $dsn,
            $config['user'],
            $config['password']

        );
    }





}














