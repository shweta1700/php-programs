PHP Examples
PHP Program - Power of a Number
PHP Program - To Check Whether a Number is Palindrome or Not
PHP Program - To Check Whether a String is Palindrome or Not
PHP Program - Heap Sort
PHP Program - Quick Sort
PHP - Swap Two Numbers without using Temporary Variable
PHP Program - Find LCM of Two Numbers without GCD
PHP Program - Heap Sort

Heap sort uses property of heap to sort the array. It involves building a max heap for increasing order sorting which contains largest element of the heap at the root. For decreasing order sorting min heap is used which contains smallest element of the heap at the root. The process step of for increasing order sorting of heap sort is summarized below:

Step 1: Build a max heap which contains largest element of the heap at the root
Step 2: Swap the last element of heap with root element and remove the last element from the heap. With the remaining elements repeat the step 1.
Example:
To understand the heap sort, lets consider an unsorted array [10, 1, 23, 50, 7, -4] and discuss each step taken to sort the array in ascending order.

In the below figure, the heap structure of input array and max heap is shown. The index number of the root element of the heap is 0. In max heap, the largest element of the heap always resides at the root.

Heap Sort Diagram
After building the initial max heap, the last element of heap is swapped with the root element and the last element which contains the largest number of the array is removed from the heap. After that, the heapify function is used on the remaining elements of the heap to make it as a max heap and the number of elements will reduce by one. This process is continued until the number of elements in the heap is one. At this point, the array will be sorted.

Heap Sort
The above figure describes elimination of largest element from the heap and formation of the max heap from the remaining elements of the heap. The final outcome of the process is an increasing order sorted array.

Implementation of Heap Sort
<?php
// function for heap sort which calls heapify function 
// to build the max heap and then swap last element of 
// the max-heap with the first element
// exclude the last element from the heap and rebuild the heap
function heapsort(&$Array, $n) {
  for($i = (int)($n/2); $i >= 0; $i--) {
    heapify($Array, $n-1, $i);
  }
  
  for($i = $n - 1; $i >= 0; $i--) {
    //swap last element of the max-heap with the first element
    $temp = $Array[$i];
    $Array[$i] = $Array[0];
    $Array[0] = $temp;

    //exclude the last element from the heap and rebuild the heap 
    heapify($Array, $i-1, 0);
  }
}

// heapify function is used to build the max heap
// max heap has maximum element at the root which means
// first element of the array will be maximum in max heap
function heapify(&$Array, $n, $i) {
  $max = $i;
  $left = 2*$i + 1;
  $right = 2*$i + 2;

  //if the left element is greater than root
  if($left <= $n && $Array[$left] > $Array[$max]) {
    $max = $left;
  }

  //if the right element is greater than root
  if($right <= $n && $Array[$right] > $Array[$max]) {
    $max = $right;
  }

  //if the max is not i
  if($max != $i) {
    $temp = $Array[$i];
    $Array[$i] = $Array[$max];
    $Array[$max] = $temp;
    //Recursively heapify the affected sub-tree
    heapify($Array, $n, $max); 
  }
}

// function to print array
function PrintArray($Array, $n) { 
  for ($i = 0; $i < $n; $i++) 
    echo $Array[$i]." "; 
  echo "\n";
} 

// test the code
$MyArray = array(10, 1, 23, 50, 7, -4);
$n = sizeof($MyArray); 
echo "Original Array\n";
PrintArray($MyArray, $n);

heapsort($MyArray, $n);
echo "\nSorted Array\n";
PrintArray($MyArray, $n);
?>