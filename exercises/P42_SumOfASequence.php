<?php

class P42_SumOfASequence
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;
        echo "Last number?\n";
        $n = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo "The sum is ";
        for($i = 1; $i <= $n; $i++){
            $sum += $i;            
        }
        echo $sum;
    }
}
