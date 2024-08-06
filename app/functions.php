<?php 


/**
 * This is a dev info func
 * @param $name
 * @param $age
 * @param $skill
 */
function info(string $name, int $age, string $skill = null){

    if( $skill ){
        echo  "Hello {$name}, You are {$age} years old and you are a {$skill} Devs";
    }else {
        echo  "Hello {$name}, You are {$age} years old";
    }


}


/**
 * Elementor header Element func
 * @param $title
 */
 function createTitle(string $title, string $tag = 'h1', string $align = 'center', string $family='subway', string $size = '30px', string $color = 'red', string $bg = 'black' ){

    echo "<{$tag} style=\"text-align:{$align}; font-family:{$family}; font-size:{$size}; color:{$color}; background-color:{$bg  }; \">{$title}</{$tag}>";

 }


/**
 * Generate OTP 
* @param opt
*/
function createOTP(){

    // opt string 
    $optstring = '0123456789';
    // rand opt
    $randOTP = str_shuffle($optstring);
    // create OTP and return 
    return substr($randOTP, 2,5);


}








?>