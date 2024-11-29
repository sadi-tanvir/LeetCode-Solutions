<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1290. Convert Binary Number in a Linked List to Integer</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>1290. Convert Binary Number in a Linked List to Integer</h1>

    <!-- https://leetcode.com/problems/convert-binary-number-in-a-linked-list-to-integer/description/ -->

    <?php
    // making linked list
    class Node
    {
        public $val;
        public $next;
        public function __construct($val, $next = null)
        {
            $this->val = $val;
            $this->next = $next;
        }
    }

    $node = new Node(1);
    $node->next = new Node(0);
    $node->next->next = new Node(1);
    echo '<pre>' . json_encode($node) . '</pre>';



    class Solution
    {
        function getDecimalValue($head)
        {
            $total = 0;
            while ($head) {
                $total = ($total << 1) | $head->val;
                // $total = $total * 2 + $head->val;
                $head = $head->next;
            }

            return $total;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->getDecimalValue($node)) . '</pre>';
    /* 
    echo '<pre>' . json_encode($solution->intToRoman(58)) . '</pre>';
    echo '<pre>' . json_encode($solution->intToRoman(1994)) . '</pre>'; */
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>