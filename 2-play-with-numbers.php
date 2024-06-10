<?php 
//1 find prime number

function prime($val){
    $flag= 0;
    for($i=2;$i<=$val/2;$i++){
        if($val % $i==0){
            $flag=1;
        }
        if($flag==1){
            break;
        }
    }
    if($flag==1){
        echo $val.'is not prime';
    } else{
        echo $val.'is prime';
    }
}
prime(2);



echo '<br>';
//2 find perfect number

function perfectNumber($val){
    $sum=0;
    for($i=1;$i<=$val/2; $i++){
        $sum = $sum + $i;
    }
    if($val==$sum){
        echo "$val is perfect Number";
    }

}
perfectNumber(6);


echo '<br>';

//3. find even or odd
$arr=[8,7,5,3,2,1];
function isEven($arr=[]){
    for($i=0;$i<=count($arr)-1;$i++){
        if($arr[$i] % 2==0){
            echo $arr[$i].'->even ';
        }else{
            echo $arr[$i].'->odd ';
        }
    }
}
isEven($arr);


echo '<br>';


//4 armtrong number 

function isArmstrong($val){
    $sum=0;
    $temp=$val;
    $powerof = strlen((string)$val);
    while($temp>0){
        $reminder= $temp%10;
        $sum = $sum + pow($reminder, $powerof);
        $temp = $temp/10;
    }

    if($val  == $sum){
        echo $val.'is a armstrong number';
    } else{
        echo $val.'is not a armstrong number';
    }
}
isArmstrong(153);


echo '<br>';

//5. factorial

function factorial($val){
    if($val==0){
        return 1;
    } else{
       return $val * factorial($val-1);
    }
}
echo 'factorial of 5->'.factorial(5);

echo '<br>';

//6. fibonacci series
function febonaci($val, $a=0, $b=1){
    $c=0;
    echo 'fibonacci-> 0  1 ';
    for($i=1;$i<$val;$i++){
        $c=$a+$b;
        $a=$b;
        $b=$c;
        echo $c.' ';
    }

}
febonaci(5);



echo '<br>';
//7. Check if a number is a palindrome
function palindrome($val){
    $original= $val;
    $reverse=0;
    while($val != 0){
        $reminder= $val % 10 ;
        $reverse = $reverse*10 +$reminder;
        $val = (int)($val/10);
    }
    if($original == $reverse){
        echo "$original is a palindrome";
    } else {
        echo "$original is not a palindrome";
    }
}
palindrome(121);



echo '<br>';
//8 swap number without 3rd variable 
function swop($a,$b){
    $a= $a+$b;
    $b=$a-$b;
    $a=$a-$b;
    echo $a.' '.$b;
}
swop(20,10);


echo '<br>';
//9