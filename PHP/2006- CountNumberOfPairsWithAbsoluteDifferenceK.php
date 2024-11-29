<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2006. Count Number of Pairs With Absolute Difference K</title>
</head>

<body>
    <h1>2006. Count Number of Pairs With Absolute Difference K</h1>

    <!-- https://leetcode.com/problems/count-number-of-pairs-with-absolute-difference-k/description/ -->

    <?php
    class Solution
    {
        function countKDifference($nums, $k)
        {
            $count = 0;
            for ($i = 0; $i < count($nums) - 1; $i++) {
                for ($j = $i + 1; $j < count($nums); $j++) {
                    if (abs($nums[$i] - $nums[$j]) === $k) {
                        $count++;
                    }
                }
            }
            return $count;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->countKDifference([1, 2, 2, 1], 1)) . '</pre>';
    echo '<pre>' . json_encode($solution->countKDifference([1, 3], 3)) . '</pre>';
    echo '<pre>' . json_encode($solution->countKDifference([3,2,1,5,4], 2)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>