<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points[0-100]:\n";
        $points = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if($points < 0 || $points < 50){       
            echo $points."\nfailed";                
        }elseif($points > 100){
            echo $points."\nincredible!";
        } else{
            echo $points."\n";
        }

    }
}
