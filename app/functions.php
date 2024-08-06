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


/**
 * Time Ago func
 * @param $timestamp 
 */
function timeAgo($timestamp){

    // get timestamp to time
    $timestampNum = strtotime($timestamp);
    $currentTime = time();

    // find the time difference 
    $timeDiff = $currentTime - $timestampNum;

    // time ago unit 
    $sec = $timeDiff;
    $min = round($timeDiff / 60);
    $hour = round($min / 60);
    $day = round($hour / 24);
    $weeks = round($day / 7);
    $months = round($day / 30);
    $years = round($months / 12);


    if( $sec <= 10 ){
        echo  "Just Now";
    }else if( $sec > 10 && $sec < 60 ){
        echo  "{$sec} second ago";
    }else if( $min < 60 ){
        echo  "{$min} minute ago";
    }else if( $hour < 24 ){
        echo  "{$hour} hours ago";
    }else if( $day < 7 ){
        echo  "{$day} day ago";
    }else if( $weeks < 4 ){
        echo  "{$weeks} weeks ago";
    }else if( $months < 12 ){
        echo  "{$months} month ago";
    }else {
        echo  "{$years} years ago";
    }

 

}





?>