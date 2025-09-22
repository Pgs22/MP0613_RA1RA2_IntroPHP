<?php

class P16_SpeedingTicket {
    public function main(): void {
        // Define the speed
        $speed = 121;

        // Check if the speed exceeds the limit
        // Write your code here
        $limitIf = 120;
        if($speed>=$limitIf){
            echo "Speeding ticket!\n";
        }else{
            echo "Not speeding ticket!\n";
        };
    }
}
