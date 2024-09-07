<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>100. Same Tree</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>100. Same Tree</h1>

    <!-- https://leetcode.com/problems/same-tree/description/ -->


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

    // first tree
    $node_1_6 = new TreeNode(6);
    $node_1_7 = new TreeNode(7);
    $node_1_5 = new TreeNode(5, $node_1_6, $node_1_7);
    $node_1_9 = new TreeNode(9);
    $node_1_8 = new TreeNode(8, $node_1_9);
    $node_1_4 = new TreeNode(4);
    $node_1_2 = new TreeNode(2, $node_1_4, $node_1_5);
    $node_1_3 = new TreeNode(3, null, $node_1_8);
    $root1 = new TreeNode(1, $node_1_2, $node_1_3);

    // second tree
    $node_2_6 = new TreeNode(6);
    $node_2_7 = new TreeNode(7);
    $node_2_5 = new TreeNode(5, $node_2_6, $node_2_7);
    $node_2_9 = new TreeNode(9);
    $node_2_8 = new TreeNode(8, $node_2_9);
    $node_2_4 = new TreeNode(4);
    $node_2_2 = new TreeNode(2, $node_2_4, $node_2_5);
    $node_2_3 = new TreeNode(3, null, $node_2_8);
    $root2 = new TreeNode(1, $node_2_2, $node_2_3);

    // echo "<pre>" . json_encode($root1) . "</pre>";
    // echo "<pre>" . json_encode($root2) . "</pre>";


    class Solution
    {
        function isSameTree($p, $q)
        {
            if (!$p && !$q) return true;

            if ($p && $q && $p->val === $q->val) {
                return $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right);
            }

            return false;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->isSameTree($root1, $root2)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>