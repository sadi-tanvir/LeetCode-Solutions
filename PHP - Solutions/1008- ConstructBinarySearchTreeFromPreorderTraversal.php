<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1008. Construct Binary Search Tree from Preorder Traversal</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>1008. Construct Binary Search Tree from Preorder Traversal</h1>

    <!-- https://leetcode.com/problems/construct-binary-search-tree-from-preorder-traversal/ -->

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


    class Solution
    {
        function bstFromPreorder ($preorder) {
            $root = null;
            for ($i = 0; $i < count($preorder); $i++) {
                $newNode = new TreeNode($preorder[$i]);
                $root = $this->addTree($root, $newNode);
            }
            return $root;
        }
        
        function addTree($root, $newNode) {
            if ($root === null) {
                $root = $newNode;
                return $root;
            };
        
            if ($root->val < $newNode->val) {
                if ($root->right === null) {
                    $root->right = $newNode;
                } else {
                    $this->addTree($root->right, $newNode);
                }
            } else {
                if ($root->left === null) {
                    $root->left = $newNode;
                } else {
                    $this->addTree($root->left, $newNode);
                }
            }
        
            return $root;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->bstFromPreorder([8,5,1,7,10,12])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>