<?php
/*
Given a string s consisting of words and spaces, return the length of the last word in the string.

A word is a maximal substring consisting of non-space characters only.

Example 1:

Input: s = "Hello World"
Output: 5
Explanation: The last word is "World" with length 5.

Example 2:
Input: s = "   fly me   to   the moon  "
Output: 4
Explanation: The last word is "moon" with length 4.

Example 3:
Input: s = "luffy is still joyboy"
Output: 6
Explanation: The last word is "joyboy" with length 6.

*/

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {

        $explode = explode(' ', $s); 

        for($i=count($explode)-1 ; $i>=0; $i--){

            if(!empty($explode[$i])){ return strlen($explode[$i]); }
        }
        
    }
}

$sol = new Solution();
$str = "Hello World";
// $str = "   fly me   to   the moon  ";
// $str = "luffy is still joyboy";
$return = $sol->lengthOfLastWord( $str );

echo 'last word is : ' . $return;
?>