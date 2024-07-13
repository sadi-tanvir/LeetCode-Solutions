<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2235. Add Two Integers</title>
</head>

<body>
    <h1>2235. Add Two Integers</h1>

    <!-- https://leetcode.com/problems/add-two-integers/ -->

    <?php
    class Solution
    {
        function sum ($num1, $num2) {
            return $num1 + $num2;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->sum(12, 5)) . '</pre>';
    echo '<pre>' . json_encode($solution->sum(-10, 4)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>