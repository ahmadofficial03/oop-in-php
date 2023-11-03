<?php

class Calender {
    public $name;
    public static $daysInFebrary = 28;
    private const MONTH_IN_YEAR = 12;
    public static $count = 0;

    public ?float $weeksInYear = null;

    public function getMonthInYear() {
        return self::MONTH_IN_YEAR;
    }

    public function __construct(){
        self::$count++;
    }
}

$calender = new Calender();
$calender->name = "Your Planner";
print var_dump($calender->weeksInYear);

// print Calender::$daysInFebrary . PHP_EOL;
// Calender::$daysInFebrary++;
// print Calender::$daysInFebrary . PHP_EOL;

$calerder2 = new Calender();
print $calender2->count;

$calender3 = new Calender();
print $calender3->count;

print Calender::$count . PHP_EOL;
print Calender::$count . PHP_EOL;



// print Calender::MONTH_IN_YEAR . PHP_EOL;      //Calling rirectly to Class with scope resolution operator
// print $calender->getMonthInYear();