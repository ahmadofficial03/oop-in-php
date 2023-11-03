<?php 

class Connection {
    private static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        self::$count--;
    }

    public function getCount() {
        return self::$count;
    }
}

$connection1 = new Connection();
$connection2 = new Connection();
// print "Conection 1: " . $connection1->getCount();
// print "Conection 2: " . $connection1->getCount();
unset($connection2);
print $connection1->getCount();

