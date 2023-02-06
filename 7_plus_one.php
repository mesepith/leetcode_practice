<?php
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        
        $last_index = count($digits) - 1;
        
        if($digits[$last_index] < 9){
            $digits[$last_index]++;
            return $digits;
        } 

        while($last_index >= 0){
            if($digits[$last_index] == 9){
                $digits[$last_index] = 0;
                $last_index--;
            } else {
                  $digits[$last_index]++;
                  return $digits;
            }
        }

        return ['1', ...$digits];
    }
}

$sol = new Solution();

$digits_arr = [1,2,3];
$digits_arr = [4,3,2,1];
$digits_arr = [9];
$digits_arr = [9,9];
$digits_arr = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6];
$output = $sol->plusOne($digits_arr);

echo '<br/>AAAAAA Output is AAAAAAA : <br/>';
echo '<pre>'; print_r($output);
?>