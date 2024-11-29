<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>104. Maximum Depth of Binary Tree</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>104. Maximum Depth of Binary Tree</h1>

    <!-- https://leetcode.com/problems/maximum-depth-of-binary-tree/description/ -->

    <?php

    class TreeNode
    {
        public $val;
        public $left;
        public $right;
        public function __construct($val = 0, $left = null, $right = null)
        {
            $this->val = $val;
            $this->left = $left;
            $this->right = $right;
        }
    }

    $node6 = new TreeNode(6);
    $node7 = new TreeNode(7);
    $node5 = new TreeNode(5, $node6, $node7);
    $node9 = new TreeNode(9);
    $node8 = new TreeNode(8, $node9);
    $node4 = new TreeNode(4);
    $node2 = new TreeNode(2, $node4, $node5);
    $node3 = new TreeNode(3, null, $node8);
    $root = new TreeNode(1, $node2, $node3);

    echo "<pre>" . json_encode($root) . "</pre>";


    class Solution
    {
        function maxDepth($root)
        {
            if ($root === null)
                return 0;

            $leftDepth = $this->maxDepth($root->left);
            $rightDepth = $this->maxDepth($root->right);

            return max($leftDepth, $rightDepth) + 1;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->maxDepth($root)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>