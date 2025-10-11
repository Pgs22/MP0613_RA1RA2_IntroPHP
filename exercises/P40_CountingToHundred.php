<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        // Write your program here
        $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($input <= 100) {
            for($i = $input; $i <= 100; $i++){
                echo $i."\n";
            }                
        }        
    }
    
}
