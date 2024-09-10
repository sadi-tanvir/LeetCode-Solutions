<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>103. Binary Tree Zigzag Level Order Traversal</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>103. Binary Tree Zigzag Level Order Traversal</h1>

    <!-- https://leetcode.com/problems/binary-tree-zigzag-level-order-traversal/description/ -->

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

    $node6 = new TreeNode(2);
    $node7 = new TreeNode(2);
    $node5 = new TreeNode(2, $node6, $node7);
    $node9 = new TreeNode(2);
    $node8 = new TreeNode(2, $node9);
    $node4 = new TreeNode(2);
    $node2 = new TreeNode(2, $node4, $node5);
    $node3 = new TreeNode(2, null, $node8);
    $root = new TreeNode(2, $node2, $node3);

    // echo "<pre>" . json_encode($root) . "</pre>";


    class Solution
    {
        function isUnivalTree($root)
        {
            if ($root === null) return true;
            $queue = [$root];
            $universal = $root->val;
            while (count($queue)) {
                $node = array_shift($queue);
                if ($node->val !== $universal) return false;
                if ($node->left) array_push($queue, $node->left);
                if ($node->right) array_push($queue, $node->right);
            }

            return true;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->isUnivalTree($root)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>