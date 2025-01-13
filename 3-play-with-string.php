<?php


// string functions 
echo strlen("Hi y o "); //7
echo '<br>';
echo strrev("Hello GeeksforGeeks!"); 
echo '<br>';
echo str_replace("Geeks", "World", "Hello GeeksforGeeks!"), "\n";
echo '<br>';
echo str_replace("for", "World", "Hello GeeksforGeeks!"), "\n";
echo '<br>';
echo strpos("Hi y o ",'y'); //3, y is at 3rd index
echo '<br>';
echo trim("Hello World!", "Hed!"); // llo Worl
echo '<br>';
$input  = "Welcome to geeksforgeeks";
print_r(explode(" ",$input));//string to Array ( [0] => Welcome [1] => to [2] => geeksforgeeks )
echo '<br>';
$input  = "WELCOME TO GEEKSFORGEEKS";
  
echo strtolower($input);
echo '<br>'; 
$input  = "Welcome to geeksforgeeks";
  
echo strtoupper($input);
echo '<br>';
echo str_word_count('Hi y o '); //3
echo '<br>';
echo(substr($input,3));// Welcome -> come
echo '<br>';
echo '<br>';
echo '<br>';


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
 