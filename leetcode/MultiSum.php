<?php
class Solution {

    /*
     * 两数之和
     * 给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
     * 你可以假设每种输入只会对应一个答案。但是，你不能重复利用这个数组中同样的元素。
     */
    //冒泡法
    function twoSumBubble($nums, $target) {
        $n = count($nums);
        for ($i=0; $i< $n; $i++) {
            for ($j=0; $j< $i; $j++) {
                if(($nums[$i] + $nums[$j]) == $target){
                    return $arr = array($i,$j);
                } else {
                    continue;
                }
            }
        }
    }

    function twoSumMiddle($nums, $target) {
    
    }

    /*
     * 给定一个包含 n 个整数的数组 nums，判断 nums 中是否存在三个元素 a，b，c ，使得 a + b + c = 0 ？找出所有满足条件且不重复的三元组。
     */
    function threeSum($nums){
    
    
    
    }





}

