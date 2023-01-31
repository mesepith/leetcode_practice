<?php
/*
You are given the heads of two sorted linked lists list1 and list2.

Merge the two lists in a one sorted list. The list should be made by splicing together the nodes of the first two lists.

Return the head of the merged linked list.

Example 1:
https://assets.leetcode.com/uploads/2020/10/03/merge_ex1.jpg

Input: list1 = [1,2,4], list2 = [1,3,4]
Output: [1,1,2,3,4,4]

Example 2:

Input: list1 = [], list2 = []
Output: []
Example 3:

Input: list1 = [], list2 = [0]
Output: [0]
*/

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

 // Definition for a singly-linked list.
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;

        echo '<br/> zahir : $this->val : '.$this->val.'<br/>';
    }
}
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    //Merge the two lists in a one sorted list. The list should be made by splicing together the nodes of the first two lists. Return the head of the merged linked list.
    function mergeTwoLists($l1, $l2) {
        echo '<br/><br/>-------------------------------- function start --------------------------------<br/><br/>';
        $merged_list = new ListNode();
        $merged_list->next = null;
        $merged_list->val = 0;
        $head = $merged_list;

        echo '**************** value of merged_list is at start : **************** ';
        echo '<pre>'; print_r($merged_list);
        echo '**************** value of head is at start : **************** ';
        echo '<pre>'; print_r($head);
        
        var_dump($head);
        var_dump($merged_list);

        $count = 1;
        while($l1 != null && $l2 != null){

            echo '<br/><br/> ############################## while loop start : '.$count. ' ############################## <br/><br/>';

            echo '$$$$$$$$$$$$$$$$$ value of head at the start of while loop : $$$$$$$$$$$$$$$$$ ';
            echo '<pre>'; print_r($head);

            if($l1->val < $l2->val){
                
                $merged_list->next = $l1;
                $l1 = $l1->next;
            }else{
                
                $merged_list->next = $l2;
                $l2 = $l2->next;
            }

            echo ' %%%%%%%%%%%%%%%%% value of head after if condition : %%%%%%%%%%%%%%%%% ';
            echo '<pre>'; print_r($head);
            var_dump($head);

            echo ' %%%%%%%%%%%%%%%%% value of merged_list after if condition : %%%%%%%%%%%%%%%%% ';
            echo '<pre>'; print_r($merged_list);
            var_dump($merged_list);

            $merged_list = $merged_list->next;

            echo ' @@@@@@@@@@ value of head after $merged_list = $merged_list->next condition : @@@@@@@@@@ ';
            echo '<pre>'; print_r($head);
            echo ' @@@@@@@@@@ value of merged_list after $merged_list = $merged_list->next condition : @@@@@@@@@@ ';
            echo '<pre>'; print_r($merged_list);

            $count++;

            echo '<br/><br/> ############################## while loop end : ############################## <br/><br/>';

        }
        if($l1 != null){
            $merged_list->next = $l1;
        }
        if($l2 != null){
            $merged_list->next = $l2;
        }
        echo '<br/><br/>-------------------------------- function end --------------------------------<br/><br/>';
        return $head->next;
    } 
}


$l1 = new ListNode(1, new ListNode(2, new ListNode(4)));
$l2 = new ListNode(1, new ListNode(3, new ListNode(4)));

$merged_list = new Solution();

echo '<pre>';
print_r($merged_list->mergeTwoLists($l1, $l2));







?>