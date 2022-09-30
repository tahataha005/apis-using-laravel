<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FourFunctions extends Controller{
    
    function sorter($num){    

        $value = 1; // Flag to flip between negative and postive number cases
        $length = strlen(strval($num))-1; // length of the inputed number
        $array = [];

        if($num < 0){
            $value = -1;
            $num *= -1;
            $length -= 1;
        }

        while($num !=0 ){
            $part = (floor($num / 10**$length))*$value;
            $num = $num%10**$length;
            $array[] = $part*10**$length;
            $length--;
        }

        return $array;
    }

    function binary($s){
        $nums = "";
        
        for($i = 0; $i < strlen($s);$i++){
            if (is_numeric($s[$i])){
                // echo $a/2;
                $nums = $nums . $s[$i];
                $bin = decbin($nums);
                $split =explode($nums,$s);
                $overall = $split[0] . $bin . $split[1];
            }
        }
        return $overall;
    }
}
