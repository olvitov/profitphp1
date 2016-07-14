<?php



class Table
{
    protected $color;
    public $legs;

    public function __construct($color)
    {
        $this->color = $color;


    }

    public function show()
    {

        echo 'Я - стол!';
        echo $this->color;


    }
}

$table1 = new Table('red');
$table1->show();
echo $table1->legs;


