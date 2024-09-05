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

    $node6 = new TreeNode(6);
    $node7 = new TreeNode(7);
    $node5 = new TreeNode(5, $node6, $node7);
    $node9 = new TreeNode(9);
    $node8 = new TreeNode(8, $node9);
    $node4 = new TreeNode(4);
    $node2 = new TreeNode(2, $node4, $node5);
    $node3 = new TreeNode(3, null, $node8);
    $root = new TreeNode(1, $node2, $node3);

    // echo "<pre>" . json_encode($root) . "</pre>";


    class Solution
    {
        function zigzagLevelOrder($root)
        {
            if ($root === null)
                return [];
            $res = [];
            $queue = [];
            array_push($queue, $root);
            array_push($queue, null);
            array_push($res, []);
            $order = true;

            while (count($queue)) {
                $currentNode = array_shift($queue);
                if ($currentNode === null) {
                    if (count($queue) === 0) {
                        break;
                    } else {
                        array_push($queue, null);
                        array_push($res, []);
                        $order = !$order;
                    }
                } else {
                    if ($order) {
                        $res[count($res) - 1][] = $currentNode->val;
                    } else {
                        array_unshift($res[count($res) - 1], $currentNode->val);
                    }
                    if ($currentNode->left)
                        array_push($queue, $currentNode->left);

                    if ($currentNode->right)
                        array_push($queue, $currentNode->right);
                }
            }

            return $res;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->zigzagLevelOrder($root)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>