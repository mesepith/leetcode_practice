<?php
/*
Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string "".

Example 1:

Input: strs = ["flower","flow","flight"]
Output: "fl"
Example 2:

Input: strs = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.
 
Constraints:

1 <= strs.length <= 200
0 <= strs[i].length <= 200
strs[i] consists of only lowercase English letters.
*/

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        
        echo '<pre>'; print_r($strs);
        echo  'count($strs) : ' . count($strs);

        // if( count($strs) <2){ return ""; }

        $multi_arr = array();

        $longest_str = "";
        foreach( $strs AS $value ){

            if(strlen($value) <=0 ){ return $longest_str; }

            echo '<br/>  strlen($value) : ' . strlen($value)  . '<br/> <br/>';

            // if( empty(strlen($value))) { echo 'i m here'; continue;}

            if(count($strs) ==1 && strlen($value)==0 ){ return $longest_str; }

            if(count($strs) ==1 && strlen($value)==1 ){ return $longest_str = $value; }

            for($i=0; $i<strlen($value); $i++ ){

                $multi_key_arr[$i][]= $value[$i];

            }
        }
        if(empty(($multi_key_arr))) { return $longest_str; }
        echo 'count($multi_key_arr) : ' . count($multi_key_arr);
        echo '<pre>'; print_r($multi_key_arr);

        // if( count($multi_key_arr) ==1 ){ return $longest_str; }

        $not_common_found = 0;
        $long_array_count = 0;
        foreach( $multi_key_arr AS $f_key=>$f_value ){

            echo '$f_key : ' . $f_key . ' , f_value count: ' . count($f_value)  . '<br/> <br/>';
            echo '<pre>'; print_r($f_value)  . '<br/> <br/>';

            if( count($f_value) > $long_array_count){

                $long_array_count = count($f_value);
            }else if (count($f_value) < $long_array_count ){

                continue;
            }

            if(count($f_value) <2 ){ continue; }

            $compare='';
            for( $i = 0; $i<count($f_value); $i++ ){

                echo ' i : ' . $i   . '<br/> <br/>';

                if( $i==0 ){
                    
                    $compare = $f_value[$i];

                    echo 'i : '. $i . ', @@@@@@@ compare: ' . $compare . ' <br/>';
                }else if ( $f_value[$i] != $compare ){
                    echo 'i : '. $i . ', $f_value[$i] ' . $f_value[$i] . ' and compare ' . $compare . ' <br/>';
                    $not_common_found = 1;

                    break;
                }

                echo '$i : ' . $i . ' , f_value count: ' . count($f_value)  . '<br/> <br/>';

                if( count($f_value) == $i+1 && $not_common_found ==0 ){
                    echo 'i m here ' .  '<br/> <br/>';
                    $longest_str.=$f_value[$i];

                    echo 'longest_str i m here below :  ' .$longest_str  .  '<br/> <br/>';
                }

                echo  '<br/> -------------------X ---------------------<br/>';
            }
            
            echo '<br/> +++++++++++++++++++++++ X ++++++++++++++++++++++<br/>';
            if($not_common_found && empty($longest_str)){ return $longest_str; }else if($not_common_found) { return $longest_str; }

        }
        
        return $longest_str;

    }
}

$sol = new Solution();

$inputs = ["flower","flow","flight"];
// $inputs = ["dog","racecar","car"];
// $inputs = [""];
// $inputs = ["a"];
// $inputs = ["",""];
// $inputs = ["","b"];
$inputs = ["ab","a"];
$inputs = ["c","c"];
$inputs = ["aaa","aa","aaa"];
$inputs = ["abab","aba",""];
$return = $sol->longestCommonPrefix($inputs);

echo '$longest_str : ' . $return;


?>