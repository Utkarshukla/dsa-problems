<?php

$arr= [8, 7, 2, 5, 3, 1];
$target= 10;
//now in array check 2 value sum is 10 or not like 8+2 or 7+3

//1. Brute force method
//n2 time complexity
function bruteForceCheck($arr=[],$target=0){
    for($i=0; $i < count($arr); $i++){
        for($j=$i+1; $j < count($arr) ; $j++){
            if($arr[$i]+$arr[$j]==$target){
                 echo $arr[$i].'+' . $arr[$j].'='. $target.'<br>';
            }
        }
    }
}

bruteForceCheck($arr, $target);
echo '<br>';
//2. by sorting array

function shortsum($arr=[],$target=0){
    sort($arr);
    $left=0;
    $right= count($arr)-1;
    while($left<$right){
        if($arr[$left]+$arr[$right]==$target){
            echo $arr[$left].'+'.$arr[$right].'='. $target.'<br>';
        }
        ($arr[$left]+$arr[$right]<$target)?$left++ : $right--;
    }
    
}
shortsum($arr, $target);

echo '<br>';
//3. Hashing 

function hashsort($arr=[],$target=0){
    $hash=[];
    for($i=0;$i<count($arr); $i++){
        $val = $target - $arr[$i];
        if (isset($hash[$val])) {
           echo $arr[$i].'+'.$val.'='.$target.'<br>' ;
        }
        $hash[$arr[$i]] = $i;
    }
}
hashsort($arr, $target);

