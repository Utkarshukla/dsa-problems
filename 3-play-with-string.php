<?php

//check the frequncy of a number in string 
function charFrequency($str)
{
    $frequency = [];
    for ($i = 0; $i <= strlen($str); $i++) {
        $char = $str[$i];
        if (array_key_exists($char, $frequency)) {
            $frequency[$char]++;
        } else {
            $frequency[$char] = 1;
        }
    }
    return $frequency;
}

$frequencyArray = charFrequency("I am Utkarsh");
echo '<pre>';
print_r($frequencyArray);
echo '</pre>';
echo $frequencyArray['a'];



echo '<br>';
//sting is plandrome 
function palandrome($str){
    $str = preg_replace('/[^A-Za-z0-9]/', '', strtolower($str));
    
    if($str == strrev($str)){
        echo 'palandrome';
    } else {
        echo 'not palandrome';
    }
}
palandrome('a b c c b a');


echo '<br>';
// count vowels and consonant 
function countVowelsAndConsonants($str){
    $consonant = $str;
    $str =preg_match_all('/[aeiou]/i',$str);
    $consonant = preg_match_all('/[^aeiou ]/i',$consonant);
    print_r('vowels '.$str);
    print_r('Conso '.$consonant);
}
countVowelsAndConsonants('i am utkarsh');



echo '<br>';
