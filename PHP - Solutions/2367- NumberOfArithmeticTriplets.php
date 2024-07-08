<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2367. Number of Arithmetic Triplets</title>
</head>

<body>
    <h1>2367. Number of Arithmetic Triplets</h1>

    <!-- https://leetcode.com/problems/number-of-arithmetic-triplets/description/ -->

    <?php
    class Solution
    {
        function arithmeticTriplets($nums, $diff)
        {
            $n = count($nums);
            $count = 0;
            for ($i = 0; $i < $n - 2; $i++) {
                for ($j = $i + 1; $j < $n - 1; $j++) {
                    for ($k = $j + 1; $k < $n; $k++) {
                        $match1 = $nums[$j] - $nums[$i];
                        $match2 = $nums[$k] - $nums[$j];
                        if (($match1 === $diff) && ($match2 === $diff))
                            $count++;
                    }
                }
            }

            return $count;
        }

    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->arithmeticTriplets([0, 1, 4, 6, 7, 10], 3)) . '</pre>';
    echo '<pre>' . json_encode($solution->arithmeticTriplets([4, 5, 6, 7, 8, 9], 2)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>