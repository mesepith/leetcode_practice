<?php
/*
Given an integer x, return true if x is a palindrome, and false otherwise.

Example 1:

Input: x = 121
Output: true
Explanation: 121 reads as 121 from left to right and from right to left.

Example 2:

Input: x = -121
Output: false
Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.

Example 3:

Input: x = 10
Output: false
Explanation: Reads 01 from right to left. Therefore it is not a palindrome.

Constraints:

-231 <= x <= 231 - 1
*/

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {

        if($x <0 ){ return false; }
        $rev_num;

        $input = $x;
        
        do{
            /* Cut last digit by taking modulo of 10 */
            $modulo = $x % 10;
            echo ' modulo : ' . $modulo . ' <br/>';
            $rev_num .= $modulo;

            /* divide the number by 10 and don't take after dot */
            echo 'divide_by_10 : ' . $divide_by_10 = $x / 10 . ' <br/>';
            $explode = explode(".",$divide_by_10);
            echo 'round : ' . $x = $explode[0] . ' <br/> <br/>';
            // echo 'round : ' . $x = round($divide_by_10) . ' <br/> <br/>';
            
        }
        while ($x !=0);
        echo 'value of x is ' . $input . ' and rev is ' . $rev_num . '<br/>';
        if($rev_num == $input){
            return true;
        }else{
            return false;
        }
    }
}

$sol = new Solution();

$var = 313;
$return = $sol->isPalindrome($var);

echo ( $return === true ) ? 'true' : 'false';
?>