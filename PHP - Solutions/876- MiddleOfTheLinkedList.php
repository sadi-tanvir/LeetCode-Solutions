<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>876. Middle of the Linked List</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>876. Middle of the Linked List</h1>

    <!-- https://leetcode.com/problems/middle-of-the-linked-list/description/ -->

    <?php

    class Node
    {
        public function __construct($val, $next = null)
        {
            $this->val = $val;
            $this->next = $next;
        }
    }
    $node = new Node(1);
    $node->next = new Node(2);
    $node->next->next = new Node(3);

    echo '<pre>' . json_encode($node) . '</pre>';

    class Solution
    {
         function middleNode ($head) {
            $slowPointer = $head; 
            $fastPointer = $head;

            while ($fastPointer != null && $fastPointer->next != null) {
                $slowPointer = $slowPointer->next;
                $fastPointer = $fastPointer->next->next;
            };

            return $slowPointer;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->middleNode($node)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>