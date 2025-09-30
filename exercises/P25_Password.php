<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        echo "Password?\n";
        $userPass = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($userPass === "Caput Draconis") {
            echo "Welcome!";   
        }else{            
            echo "Off with you!"; 
        }
    }
}
