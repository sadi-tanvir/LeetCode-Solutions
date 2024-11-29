<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>209. Minimum Size Subarray Sum</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>209. Minimum Size Subarray Sum</h1>

    <!-- https://leetcode.com/problems/minimum-size-subarray-sum/description/ -->

    <?php
    class Solution
    {
        function minSubArrayLen($target, $nums)
        {
            $n = count($nums);
            $minLen = $n + 2;
            $left = 0;
            $right = 0;
            $currentSum = $nums[$left];

            while (($left < $n) && ($right < $n)) {
                if ($currentSum < $target) {
                    $right++;
                    $currentSum += $nums[$right];
                } else if ($currentSum >= $target) {
                    $minLen = min($minLen, $right - $left + 1);
                    $left++;
                    $currentSum -= $nums[$left - 1];
                }
            }

            return $minLen == $n + 2 ? 0 : $minLen;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->minSubArrayLen(7, [2, 3, 1, 2, 4, 3])) . '</pre>';
    echo '<pre>' . json_encode($solution->minSubArrayLen(4, [1, 4, 4])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>