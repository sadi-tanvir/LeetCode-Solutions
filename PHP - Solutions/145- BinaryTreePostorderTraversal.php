<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>145. Binary Tree Postorder Traversal</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>145. Binary Tree Postorder Traversal</h1>

    <!-- https://leetcode.com/problems/binary-tree-postorder-traversal/description/ -->


    <?php
    class Node
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

    $node6 = new Node(6);
    $node7 = new Node(7);
    $node5 = new Node(5, $node6, $node7);
    $node9 = new Node(9);
    $node8 = new Node(8, $node9);
    $node4 = new Node(4);
    $node2 = new Node(2, $node4, $node5);
    $node3 = new Node(3, null, $node8);
    $root = new Node(1, $node2, $node3);
    // echo '<pre>' . json_encode($root) . '</pre>';
    

    class Solution
    {
        function postorderTraversal($root)
        {
            $res = [];
            $this->postOrder($root, $res);
            return $res;
        }

        function postOrder($root, &$res)
        {
            if ($root === null)
                return;
            $this->postOrder($root->left, $res);
            $this->postOrder($root->right, $res);
            array_push($res, $root->val);
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->postorderTraversal($root)) . '</pre>';

    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>