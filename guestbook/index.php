<?php

/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 13.07.2016
 * Time: 13:22
 */
class GuestBook
{
    public $text;
    public $path;
    protected $data;
    public function __construct($path)

    {
        $this->path = $path;
        
    }

    public function getData() {

        explode(' ', $this->path);

    }

    public function append($text) {
        
        
    }
    
    public function save() {
        
    }

}


$path_file = new GuestBook(__DIR__ . '/user.txt', FILE_IGNORE_NEW_LINES);

echo $path_file->path;

