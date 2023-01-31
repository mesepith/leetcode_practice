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
        echo '############### value of head is at start : ############### ';
        echo '<pre>'; print_r($head);

        echo '*************** value of L1 at start is : *************** ';
        echo '<pre>'; print_r($l1);

        echo '*************** value of L2 at start is : *************** ';
        echo '<pre>'; print_r($l2);

        $count =1;

        while($l1 != null && $l2 != null){

            echo '<br/><br/> ############################## while loop start : '.$count. ' ############################## <br/><br/>';

            echo '$$$$$$$$$$$$$$$$$ value of head at the start of while loop : $$$$$$$$$$$$$$$$$ ';
            echo '<pre>'; print_r($head);

            echo '<br/><br/> ===================== value of $merged_list Start =====================<br/><br/>';
            echo '<pre>'; print_r($merged_list);
            echo '<br/><br/> ===================== value of $merged_list End =====================<br/><br/>';

            echo '*************** value of L1 before if condition at start is : *************** ';
            echo '<pre>'; print_r($l1);

            echo '*************** value of L2 before if condition at start is : *************** ';
            echo '<pre>'; print_r($l2);

            echo ' $l1->val : ' . $l1->val . ' $l2->val : ' . $l2->val . '<br/>';

            if($l1->val < $l2->val){
                echo '<br/> !!!! im in if condition if($l1->val < $l2->val) !!!! <br/>';
                $merged_list->next = $l1;
                $l1 = $l1->next;
            }else{
                echo '<br/> !!!! im in else condition !!!! <br/>';
                $merged_list->next = $l2;
                $l2 = $l2->next;
            }

            echo '++++++++++++++++++++++++++ value of merged_list at end of while loop is : ---------------------------- ';
            echo '<pre>'; print_r($merged_list);

            echo '*************** value of L1 after first if condition is start : *************** ';
            echo '<pre>'; print_r($l1);

            echo '*************** value of L2 after first if condition is start : *************** ';
            echo '<pre>'; print_r($l2);
            $merged_list = $merged_list->next;

            echo '++++++++++++++++++++++++++ value of merged_list after assign merged_list->next at end of while loop is : ++++++++++++++++++++++++++ ';
            echo '<pre>'; print_r($merged_list);

            echo '$$$$$$$$$$$$$$$$$ value of head at the end of while loop : $$$$$$$$$$$$$$$$$ ';
            echo '<pre>'; print_r($head);

            $count++;
            echo '<br/><br/> ############################## while loop end : ############################## <br/><br/>';
        }
        if($l1 != null){
            echo '<br/> ~~~~~~~~~~~~~~~~~~ im in if condition  if ($l1 != null) ~~~~~~~~~~~~~~~~~~ <br/>';
            $merged_list->next = $l1;
        }
        if($l2 != null){
            echo '<br/> ~~~~~~~~~~~~~~~~~~ im in if condition  if ($l2 != null) ~~~~~~~~~~~~~~~~~~ <br/>';
            $merged_list->next = $l2;
        }
        echo '*************** value of L1 at end is : *************** ';
        echo '<pre>'; print_r($l1);

        echo '*************** value of L2 at end is : *************** ';
        echo '<pre>'; print_r($l2);

        echo '++++++++++++++++++++++++++ value of merged_list at end of function is : ++++++++++++++++++++++++++ ';
        echo '<pre>'; print_r($merged_list);

        echo '############### value of head is at end : ############### ';
        echo '<pre>'; print_r($head);

        echo '<br/><br/>-------------------------------- function end --------------------------------<br/><br/>';
        return $head->next;
    } 
}

//input is list1 = [1,2,4], list2 = [1,3,4] and output is [1,1,2,3,4,4]
/* You can assign this way also : start */
$l1 = new ListNode(1, new ListNode(2, new ListNode(4)));
$l2 = new ListNode(1, new ListNode(3, new ListNode(4)));
/* You can assign this way also : end */
$merged_list = new Solution();

// $l1 = new ListNode(1);
// $l1->next = new ListNode(2);
// $l1->next->next = new ListNode(4);
// echo '<pre>'; print_r($l1);

// $l2 = new ListNode(1);
// $l2->next = new ListNode(3);
// $l2->next->next = new ListNode(4);
// echo '<pre>'; print_r($l2);

echo '<pre>';
print_r($merged_list->mergeTwoLists($l1, $l2));







?>