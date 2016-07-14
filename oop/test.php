<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, user-scalable=, initial-scale=, maximum-scale=, minimum-scale=">
    <meta http-equiv="X-UA-Compatible" content="ie=">
    <title></title>
</head>
<body>

<?php

class GuestBookRecord
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
}

class GuestBook
{
    protected $file;
    public function __construct($file)
    {
        $this->file = $file;


    }

    public function getAll() {



            $data = file($this->file);
            $ret[] = [];
            foreach ($data as $line) {
                $ret[] = new GuestBookRecord($line);


            }

            return $ret;

    }
}

        $gb = new GuestBook(__DIR__ . '/user.txt', FILE_IGNORE_NEW_LINES);

var_dump($gb->getAll());


?>


</body>

</html>
