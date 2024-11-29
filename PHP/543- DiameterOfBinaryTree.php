<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>543. Diameter of Binary Tree</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>543. Diameter of Binary Tree</h1>

    <!-- https://leetcode.com/problems/diameter-of-binary-tree/description/ -->


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

        /**
         * @param TreeNode $root
         * @return Integer
         */

        private $maxDiameter = 0;

        function diameterOfBinaryTree($root)
        {
            $this->heightOfTree($root);
            return $this->maxDiameter;
        }

        function heightOfTree($node)
        {
            if ($node === null) {
                return 0;
            }

            $leftHeight = $this->heightOfTree($node->left);
            $rightHeight = $this->heightOfTree($node->right);

            $this->maxDiameter = max($this->maxDiameter, $leftHeight + $rightHeight);
            return max($leftHeight, $rightHeight) + 1;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->diameterOfBinaryTree($root)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>