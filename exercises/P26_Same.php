<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
        echo "Enter the first string:\n";
        $inputFirts = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo "Enter the second string:\n";
        $inputSecond = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($inputFirts === $inputSecond) {
            echo "Same";
        }else{
            echo "Different";
        }
        
       
    }
}
