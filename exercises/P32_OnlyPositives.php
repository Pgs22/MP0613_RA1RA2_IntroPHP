<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here
        $count = 4;                
        while(true){

            if($input === 0 || $count === 0){
                break;
            }                      
 
            echo "Give a number:";
            $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if($input < 0){
                echo "Unsuitable number\n";
                continue;                
            }

            if(($input > 0)){
                $inputPar = $input * $input;
                echo $inputPar;
                $count--;
            }
        }        
            
    }
}
