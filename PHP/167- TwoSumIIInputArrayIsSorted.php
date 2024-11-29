<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>167. Two Sum II - Input Array Is Sorted</title>
</head>

<body>
    <h1>167. Two Sum II - Input Array Is Sorted</h1>

    <!-- https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/description/ -->

    <?php
    class Solution
    {
        function twoSum($numbers, $target)
        {
            $left = 0;
            $right = count($numbers) - 1;

            while ($left < $right) {
                if (($numbers[$left] + $numbers[$right]) === $target) {
                    return [$left + 1, $right + 1];
                } else if (($numbers[$left] + $numbers[$right]) > $target) {
                    $right--;
                } else {
                    $left++;
                }
            }
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->twoSum([2, 7, 11, 15], 9)) . '</pre>';
    echo '<pre>' . json_encode($solution->twoSum([2, 3, 4], 6)) . '</pre>';
    echo '<pre>' . json_encode($solution->twoSum([-1, 0], -1)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>