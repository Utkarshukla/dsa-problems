<?php

//bubble sort 
// How to remember: bubbling the largest unsorted element to its correct position at the end of the array.
//space complexity O(1)
//time complexity Best: O(n) Worst: O(n^2)
/* Example 
Let’s say you have an array: [5, 3, 8, 4, 2].

First pass: [5, 3, 8, 4, 2] → [3, 5, 8, 4, 2] → [3, 5, 4, 8, 2] → [3, 5, 4, 2, 8].
The largest element, 8, is in its correct position at the end.

Second pass: [3, 5, 4, 2, 8] → [3, 4, 5, 2, 8] → [3, 4, 2, 5, 8].
5 is now in its correct position.

Third pass: [3, 4, 2, 5, 8] → [3, 2, 4, 5, 8].
4 is now in its correct position.

Fourth pass: [3, 2, 4, 5, 8] → [2, 3, 4, 5, 8].
Now everything is sorted.
*/
echo "--------------------bubble sort--------------------------";
// $arr = [15, 16, 8, 5, 6];
$arr = [5, 3, 8, 4, 2];
$n = count($arr);
$count = 0;
for ($i = 0; $i < $n - 1; $i++) {
    $swapped = false;
    for ($j = 0; $j < $n - 1 - $i; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j + 1];
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $temp;
            $swapped = true; 
        }
        ++$count;
    }
    if (!$swapped) {
        break;
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';
echo $count;


//insertion sort 
// How to remember: Imagine sorting a hand of playing cards. You pick one card at a time and place it in the correct position relative to the cards you've already sorted. You insert it into its correct position by shifting the larger cards to the right.
// Best Case (Already Sorted): O(n), where the outer loop runs once for each element, and the inner loop does nothing.
// Average and Worst Case: O(n²), which occurs when the array is in reverse order, and each element needs to be shifted past every other element.
// space O(1)
/* Example:
Imagine you have the following unsorted array: [5, 4, 10, 1, 6, 2].

Start at the second element: Compare 4 with 5. Since 4 is smaller than 5, shift 5 to the right, and place 4 in the first position.

Now the array looks like this: [4, 5, 10, 1, 6, 2].

Move to the third element (10): It’s already in the correct position because it's greater than both 4 and 5, so leave it.

Move to the fourth element (1): Compare it with 10, 5, and 4. Since 1 is smaller than all of them, shift them all to the right and place 1 in the first position.

Now the array looks like this: [1, 4, 5, 10, 6, 2].

Continue this process for all the elements.
*/
echo '<br>';
echo "------------------insertion sort --------------------------";
$arr = [5,4 ,10 ,1 ,6 ,2];
$n = count($arr);
$count =0;
for ($i=1; $i < $n; $i++) { 
    $temp = $arr[$i];
    $j=$i-1;
   if ($arr[$j] > $temp) {
        while ($j >= 0 && $arr[$j] > $temp) {
            $arr[$j + 1] = $arr[$j];
            $j--;
            $count++;
        }
        $arr[$j + 1] = $temp;
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';
echo $count;


// selection sort 
// How to remember
// Best, Average, and Worst Case: O(n²), as with the original implementation.
// Space Complexity: O(1), since we only use a fixed number of extra variables.
/*
Given the input array [7, 4, 10, 8, 3, 1]:

The outer loop starts at index 0. We look for the smallest element from index 0 to 5. The smallest element is 1 at index 5, so we swap 1 and 7.

Array after first iteration: [1, 4, 10, 8, 3, 7]
Next, the outer loop moves to index 1. We look for the smallest element from index 1 to 5. The smallest element is 3 at index 4, so we swap 3 and 4.

Array after second iteration: [1, 3, 10, 8, 4, 7]
We continue this process until the array is fully sorted.
*/
echo '<br>';
echo "-------------------selection sort-------------------------";
$arr= [7,4,10 ,8, 3,1 ];
$n = count($arr);
$count =0;

for ($i=0; $i < $n-1; $i++) {
    $min =$i;
    for ($j=$i+1; $j <= $n-1; $j++) { 
        if ($arr[$j] < $arr[$min]) {
           $min=$j;
           $count++;
        } 
    }
    if($min != $i){
        $temp = $arr[$min];
        $arr[$min]= $arr[ $i];
        $arr[$i]= $temp;
    }

}
echo '<pre>';
print_r($arr);
echo '</pre>';
echo $count;



echo '<br>';
echo "---------------------quick sort-------------------------";
$arr = [10, 16, 8, 12, 15, 6, 3, 9, 5];
$n = count($arr);

function swap(&$arr, $i, $j) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}

function partition(&$arr, $l, $h) {
    $pivot = $arr[$l];  // Pivot element
    $i = $l;  // Start pointer
    $j = $h;  // End pointer

    while ($i < $j) {
        // Move i right while it's less than or equal to pivot
        do {
            $i++;
        } while ($arr[$i] <= $pivot && $i < $h);  // Check to stay within bounds

        // Move j left while it's greater than or equal to pivot
        do {
            $j--;
        } while ($arr[$j] > $pivot && $j > $l);  // Check to stay within bounds

        // Swap if i is less than j
        if ($i < $j) {
            swap($arr, $i, $j);
        }
    }

    // Place pivot in the correct position
    swap($arr, $l, $j);
    return $j;
}

function quickSort(&$arr, $l, $h) {
    if ($l < $h) {
        $j = partition($arr, $l, $h);  // Partition the array
        quickSort($arr, $l, $j - 1);   // Sort the left side
        quickSort($arr, $j + 1, $h);   // Sort the right side
    }
}

// Call quickSort on the entire array
quickSort($arr, 0, $n - 1);

echo '<pre>';
print_r($arr);  // Print the sorted array
echo '</pre>';
