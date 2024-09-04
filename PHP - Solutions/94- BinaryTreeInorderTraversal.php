<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>94. Binary Tree Inorder Traversal</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>94. Binary Tree Inorder Traversal</h1>

    <!-- https://leetcode.com/problems/binary-tree-inorder-traversal/description/ -->

    <?php
    class TreeNode
    {
        public $val;
        public $left;
        public $right;
        public function __construct($val, $left = null, $right = null)
        {
            $this->val = $val;
            $this->left = $left;
            $this->right = $right;
        }
    }

    $node9 = new TreeNode(9);
    $node7 = new TreeNode(7);
    $node6 = new TreeNode(6);
    $node8 = new TreeNode(8, $node9);
    $node5 = new TreeNode(5, $node6, $node7);
    $node4 = new TreeNode(4);
    $node2 = new TreeNode(2, $node4, $node5);
    $node3 = new TreeNode(3, null, $node8);
    $root = new TreeNode(1, $node2, $node3);

    echo '<pre>' . json_encode($root) . '</pre>';


    class Solution
    {
        function inorderTraversal($root)
        {
            $res = [];
            $this->inOrder($root, $res);
            return $res;
        }

        function inOrder($root, &$res)
        {
            if ($root === null)
                return;
            $this->inOrder($root->left, $res);
            array_push($res, $root->val);
            $this->inOrder($root->right, $res);
        }
    }

    $solution = new Solution();
    echo "<pre>" . json_encode($solution->inorderTraversal($root)) . "<pre>";
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>