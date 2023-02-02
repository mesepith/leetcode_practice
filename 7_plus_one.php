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
        $add_one_to_last_digit = $digits[count($digits)-1]+1;

        $array_split = str_split($add_one_to_last_digit);

        $remove = array_pop($digits);
        $final_array = array_merge($digits, $array_split);

        return $final_array;
    }
}

$sol = new Solution();

$digits_arr = [1,2,3];
$digits_arr = [4,3,2,1];
$digits_arr = [9];
$output = $sol->plusOne($digits_arr);

echo '<br/>AAAAAA Output is AAAAAAA : <br/>';
echo '<pre>'; print_r($output);
?>