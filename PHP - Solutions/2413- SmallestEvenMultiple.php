<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2413. Smallest Even Multiple</title>
</head>

<body>
    <h1>2413. Smallest Even Multiple</h1>

    <!-- https://leetcode.com/problems/smallest-even-multiple/description/ -->


    <?php
    class Solution
    {
        function smallestEvenMultiple($n)
        {
            if ($n % 2 !== 0) {
                return $n * 2;
            }
            return $n;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->smallestEvenMultiple(5)) . '</pre>';
    echo '<pre>' . json_encode($solution->smallestEvenMultiple(6)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>