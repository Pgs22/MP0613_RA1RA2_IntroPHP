<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        // Write your program here
        echo "where to?\n";
        $numberTo = (float)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo "where from?\n";
        $numberFrom = (float)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for($i = $numberFrom; $i <= $numberTo; $i++){
                echo $i."\n";
        }

    }
}
