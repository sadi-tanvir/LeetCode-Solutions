<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>83. Remove Duplicates from Sorted List</title>
</head>

<body>
    <!-- problem link -->
    <!-- https://leetcode.com/problems/remove-duplicates-from-sorted-list/ -->

    <h1 style="color:brown">83. Remove Duplicates from Sorted List</h1>

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

    $node = new ListNode(1);
    $node->next = new ListNode(1);
    $node->next->next = new ListNode(2);
    $node->next->next->next = new ListNode(3);
    $node->next->next->next->next = new ListNode(3);
    echo '<pre>' . json_encode($node) . '</pre>';



    class Solution
    {
        function deleteDuplicates($head)
        {
            $uniqueArr = [];
            $current = null;

            while ($head) {
                if (!in_array($head->val, $uniqueArr)) {
                    array_push($uniqueArr, $head->val);
                }
                $head = $head->next;
            }

            for ($i = 0; $i < count($uniqueArr); $i++) {
                $newNode = new ListNode($uniqueArr[$i]);
                if (!$current) {
                    $head = $newNode;
                    $current = $newNode;
                } else {
                    $current->next = $newNode;
                    $current = $current->next;
                }

            }

            return $head;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->deleteDuplicates($node)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>