<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        echo "Password?\n";
        $userPass = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($userPass === 'Wattlebird') {
            echo "Off With you!";
        } elseif ($userPass === 'Caput Draconis') {
            echo "Welcome!";    
        }
    }
}
