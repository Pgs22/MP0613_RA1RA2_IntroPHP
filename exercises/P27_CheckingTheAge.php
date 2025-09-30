<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        // Write your code here
        echo "How old are you?";
        $age = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if($age < 0 || $age > 120){
            echo "Impossible!";
        }else{
            echo "Ok";
        }
       
    }
}
