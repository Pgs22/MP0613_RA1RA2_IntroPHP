<?php

class P39_Counting
{
    public function main(): void
    {
        // Write your program here
        $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if($input >= 0){
            for($i = 0; $i <= $input; $i++)
            echo $i."\n";
        }                       

    }
}
