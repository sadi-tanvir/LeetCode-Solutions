<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23. Merge k Sorted Lists</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>23. Merge k Sorted Lists</h1>

    <!-- https://leetcode.com/problems/merge-k-sorted-lists/description/ -->

    <?php
    // making linked list
    class ListNode
    {
        public $val;
        public $next;
        public function __construct($val, $next = null)
        {
            $this->val = $val;
            $this->next = $next;
        }
    }

    $node1 = new ListNode(1);
    $node1->next = new ListNode(4);
    $node1->next->next = new ListNode(5);
    echo '<pre>' . json_encode($node1) . '</pre>';


    $node2 = new ListNode(1);
    $node2->next = new ListNode(3);
    $node2->next->next = new ListNode(4);
    echo '<pre>' . json_encode($node2) . '</pre>';

    $node3 = new ListNode(2);
    $node3->next = new ListNode(6);
    echo '<pre>' . json_encode($node3) . '</pre>';



    class Solution
    {
        function mergeKLists($lists)
        {
            $listArr = [];
            $sortedList = null;
            $current = $sortedList;

            for ($i = 0; $i < count($lists); $i++) {
                while ($lists[$i]) {
                    array_push($listArr, $lists[$i]->val);
                    $lists[$i] = $lists[$i]->next;
                }
            }

            sort($listArr);

            for ($j = 0; $j < count($listArr); $j++) {
                $newNode = new ListNode($listArr[$j]);
                if (!$sortedList) {
                    $sortedList = $newNode;
                    $current = $newNode;
                } else {
                    $current->next = $newNode;
                    $current = $current->next;
                }
            }

            return $sortedList;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->mergeKLists([$node1, $node2, $node3])) . '</pre>';
    /* 
    echo '<pre>' . json_encode($solution->intToRoman(58)) . '</pre>';
    echo '<pre>' . json_encode($solution->intToRoman(1994)) . '</pre>'; */
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>