<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>191. Number of 1 Bits</title>
</head>

<body>
    <h1>191. Number of 1 Bits</h1>

    <!-- https://leetcode.com/problems/number-of-1-bits/description/ -->

    <?php
    class Solution
    {
        function hammingWeight($n)
        {
            $binary = decbin($n);
            $count = substr_count($binary, '1');
            return $count;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->hammingWeight(11)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>