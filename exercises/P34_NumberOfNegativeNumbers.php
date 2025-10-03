<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        // Write your code here
        $count = 0;
        while(true){                        
            echo "Give a number:";
            $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if($input === 0){
                break;
            }elseif($input < 0){
                $count++;
                continue;
            }
        }
        echo "Number of negative numbers: ".$count;
    }
}
