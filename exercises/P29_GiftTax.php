<?php

class P29_GiftTax
{
    public function main(): void
    {
        // Write your code here
        echo "Value of the gift?\n";
        $gift = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if($gift > 5000 && $gift < 25000){
            $taxLimit = 100 + ($gift-5000)* 0.08;
            echo "The tax is ".$taxLimit;
        }elseif($gift > 25000 && $gift < 50000){
            
        }
    }
}
