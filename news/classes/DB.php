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
        $this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root', '');
    }





}














