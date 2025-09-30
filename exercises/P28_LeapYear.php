<?php

class P28_LeapYear
{
    public function main(): void
    {
        // Write your code here
        echo "Give a year:";
        $number = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if($number % 4 !== 0){
            echo "The year is not a leap year.";
        }elseif($number % 400 === 0){
            echo "The year is a leap year.";
        }elseif($number % 100 === 0){
            echo "The year is not a leap year.";
        }else{
            echo "The year is a leap year.";
        }
    }
}
