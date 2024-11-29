<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>108 Convert Sorted Array to Binary Search Tree</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>108. Convert Sorted Array to Binary Search Tree</h1>

    <!-- https://leetcode.com/problems/convert-sorted-array-to-binary-search-tree/description -->


    <?php

    class TreeNode
    {
        public $val;
        public $left;
        public $right;

        public function __construct($val = 0)
        {
            $this->val = $val;
            $this->left = null;
            $this->right = null;
        }
    }

    $nums = [-10, -3, 0, 5, 9];

    class Solution
    {
        function sortedArrayToBST($nums)
        {
            return $this->sortArray($nums, 0, count($nums) - 1);
        }

        function sortArray($nums, $left, $right)
        {
            $mid = floor(($left + $right) / 2);

            $newNode = new TreeNode($nums[$mid]);
            if ($left > $right) {
                return null;
            }

            $newNode->left = $this->sortArray($nums, $left, $mid - 1);
            $newNode->right = $this->sortArray($nums, $mid + 1, $right);

            return $newNode;
        }
    }

    $solution = new Solution();

    echo "<pre>" . json_encode($solution->sortedArrayToBST($nums)) . "</pre>";


    ?>


    <!-- php -S localhost:8000 -->

</body>

</html>