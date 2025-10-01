<?php

class P29_GiftTax
{
    public function main(): void
    {
        // Write your code here
        echo "Value of the gift?\n";
        $gift = (float)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if($gift < 5000){
            echo "No tax!";
        }elseif($gift >= 5000 && $gift < 25000){
            $taxLimit = 100 + ($gift-5000)* 0.08;
            echo "Tax: ".$taxLimit;    
        }elseif($gift >= 25000 && $gift < 55000){
            $taxLimit = 1700 + ($gift-25000)* 0.10;
            echo "Tax: ".$taxLimit;
        }elseif($gift >= 55000 && $gift < 200000){
            $taxLimit = 4700 + ($gift-55000)* 0.12;
            echo "Tax: ".$taxLimit;
        }elseif($gift >= 200000 && $gift < 1000000){
            $taxLimit = 22100 + ($gift-200000)* 0.15;
            echo "Tax: ".$taxLimit;
        }elseif($gift >= 1000000){
            $taxLimit = 142100 + ($gift-1000000)* 0.17;
            echo "Tax: ".$taxLimit;
        }
    }
}
