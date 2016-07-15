<?php

require __DIR__ . '/GuestBookRecords.php';

class GuestBook
{
    protected $file;
    public function __construct($file)
    {
        $this->file = $file;
    }

    public function getAll()
    {
        $data = file($this->file);
        $ret = [];
        foreach ($data as $line) {
            $ret[] = new GuestBookRecords($line);
        }
        return $ret;
    }
}
