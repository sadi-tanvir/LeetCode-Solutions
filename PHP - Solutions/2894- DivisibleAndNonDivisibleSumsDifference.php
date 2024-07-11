<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2894. Divisible and Non-divisible Sums Difference</title>
</head>

<body>
    <!-- problem link -->
    <!-- https://leetcode.com/problems/divisible-and-non-divisible-sums-difference/description/ -->

    <h1 style="color:brown">2894. Divisible and Non-divisible Sums Difference</h1>

    <?php
    class Solution
    {
        function differenceOfSums($n, $m)
        {
            $ans = 0;
            for ($i = 1; $i <= $n; $i++) {
                $i % $m === 0 ? $ans -= $i : $ans += $i;
            }

            return $ans;
        }

    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->differenceOfSums(10, 3)) . '</pre>';
    echo '<pre>' . json_encode($solution->differenceOfSums(5, 6)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>