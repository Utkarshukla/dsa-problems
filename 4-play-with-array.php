<?php
//array to string , sting to array
$arr = array('Hello','World!','Beautiful','Day!');
$str= implode(" ",$arr);
echo $str;
$arr = explode(' ', $str);
print_r($arr);

echo '<br>';

//multi dimention array 
$data =[
    [1, "ram", true],
    [2, "ram1", true],
    [3, "ram2", false],
];
foreach($data as $v1){
    foreach($v1 as $v2){
        echo $v2;
    }
}

echo '<br>';
// multi dimensional assoc array
$marks =[
    "ram"=>["Maht"=>10,"English"=>20],
    "sita"=>["math"=>10,"English"=>20],
];
foreach($marks as $key => $v1){
    foreach( $v1 as $key2 =>$v2){
        echo $key.' '. $key2.' '.$v2.'<br>';
    }
}



echo '<br>';
//search in array 
$array = ['sci', 'math', 'bio', 'eng', 'hindi'];

if(in_array("math",$array)){ //return bool
    echo 'found';
}

echo '<br>';
$val= array_search("sci",$array);//this search return index value
echo "found at $val";

echo '<br>';
//replace array
$alpha= ['a','b','c','d'];
$replace=['x','y'];
$newAr= array_replace($alpha,$replace); // a b get replaced 
print_r($newAr);
echo '<br>';

//size of array
$val= count($alpha); //sizeof($arr)
echo $val;

//push and pop from first
array_shift($alpha);
array_unshift($alpha,'a');

//merge indexed and associative array 
array_merge();
array_merge_recursive();//use in multidimention arrays

