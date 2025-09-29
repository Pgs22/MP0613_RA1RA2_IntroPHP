<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points[0-100]:\n";
        $points = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        switch (true) {
            case $points < 0:
                echo $points . "\nimpossible!";
                break;
            case $points >= 0 && $points < 50:
                echo $points . "\nGrade: failed";
                break;
            case $points >= 50 && $points < 60:
                echo "1\n";
                break;
            case $points >= 60 && $points < 70:
                echo "2\n";
                break;
            case $points >= 70 && $points < 80:
                echo "3\n";
                break;
            case $points >= 80 && $points < 90:
                echo "4\n";
                break;
            case $points >= 90 && $points <= 100: 
                echo "5\n";
                break;
            case $points > 100:
                echo $points . "\nGrade: incredible!";
                break;
            default:
            break;
        }

    }
}
