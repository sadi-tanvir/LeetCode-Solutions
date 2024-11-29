<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18. 4Sum</title>
</head>

<body>
    <h1>18. 4Sum</h1>

    <!-- https://leetcode.com/problems/4sum/description/ -->


    <?php
    class Solution
    {
        function fourSum($nums, $target)
        {
            sort($nums);
            $result = [];
            $n = count($nums);

            for ($i = 0; $i < $n - 3; $i++) {
                if ($i > 0 && $nums[$i] === $nums[$i - 1])
                    continue;
                for ($j = $i + 1; $j < $n - 2; $j++) {
                    if ($j > $i + 1 && $nums[$j] === $nums[$j - 1])
                        continue;
                    $leftPointer = $j + 1;
                    $rightPointer = $n - 1;
                    while ($leftPointer < $rightPointer) {
                        $sum = $nums[$i] + $nums[$j] + $nums[$leftPointer] + $nums[$rightPointer];
                        if ($sum === $target) {
                            $tempArr = [$nums[$i], $nums[$j], $nums[$leftPointer], $nums[$rightPointer]];
                            $result[count($result)] = $tempArr;
                            while ($leftPointer < $rightPointer && $nums[$leftPointer] === $nums[$leftPointer + 1])
                                $leftPointer++;
                            while ($leftPointer < $rightPointer && $nums[$rightPointer] === $nums[$rightPointer - 1])
                                $rightPointer--;
                            $leftPointer++;
                        } else if ($sum < $target) {
                            $leftPointer++;
                        } else {
                            $rightPointer--;
                        }
                    }
                }
            }

            return $result;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->fourSum([1, 0, -1, 0, -2, 2], 0)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>