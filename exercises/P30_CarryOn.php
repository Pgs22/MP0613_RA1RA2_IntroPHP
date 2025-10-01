<?php

class P30_CarryOn
{
    public function main(): void
    {
        // Write your code here
        while(true){
            echo "Shall we carry on?";
            $input= trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if($input === "no"){
                echo $input;
                break;
            }else{
                echo $input;
                continue;
            }            
        }       
    }
}
