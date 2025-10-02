<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        // Write your code here
        while(true){                        
            echo "Give a number:";
            $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if($input === 0){
                break;
            }
            if($input < 0){
                echo "Unsuitable number\n";
                continue;
            }elseif(($input % 2 === 0)){
                $inputPar = $input * $input;
                echo $inputPar;
            }
        }
    }
}
