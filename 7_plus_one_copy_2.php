<?php
/*
You are given a large integer represented as an integer array digits, where each digits[i] is the ith digit of the integer. The digits are ordered from most significant to least significant in left-to-right order. The large integer does not contain any leading 0's.

Increment the large integer by one and return the resulting array of digits.

Example 1:

Input: digits = [1,2,3]
Output: [1,2,4]
Explanation: The array represents the integer 123.
Incrementing by one gives 123 + 1 = 124.
Thus, the result should be [1,2,4].
Example 2:

Input: digits = [4,3,2,1]
Output: [4,3,2,2]
Explanation: The array represents the integer 4321.
Incrementing by one gives 4321 + 1 = 4322.
Thus, the result should be [4,3,2,2].
Example 3:

Input: digits = [9]
Output: [1,0]
Explanation: The array represents the integer 9.
Incrementing by one gives 9 + 1 = 10.
Thus, the result should be [1,0].
 */

 class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        echo '<pre>'; print_r($digits);
        // $arr = strval($digits);
        // echo '<pre>'; print_r($arr);

        // $final_array = str_split(implode('',$digits)+1);
        // return $final_array;
        $int_str;
        for($i=0; $i<count($digits); $i++){
            $int_str.=$digits[$i];
            // echo $digits[$i] . '<br/>';
        }
        echo 'int_str after for loop : ' . ($int_str) . '<br/>';
        // echo (int)$int_str, "\n";
        // echo 'gettype : ' . gettype($int_str) . '<br/>';
        // settype($int_str, "integer");
        // echo 'gettype after settype: ' . gettype($int_str) . '<br/>';
        // echo $int_str . '<br/>';
        // $int_str_conv_to_int = (int)$int_str;
        $add_one = $int_str+1;
        echo ' $add_one : ' . $add_one . '<br/>';
    }
}

$sol = new Solution();

$digits_arr = [1,2,3];
// $digits_arr = [4,3,2,1];
// $digits_arr = [9];
$digits_arr = [9,9];
$digits_arr = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6];
// $output = $sol->plusOne($digits_arr);
//after 20th number implode

echo '<br/>AAAAAA Output is AAAAAAA : <br/>';
echo '<pre>'; print_r($output);

// $var = rand(1000000000000000000,9999999999999999999);
// echo '<br/> random number <br/> ';
echo $var; // prints a 9 digit value(largest possible)
?>