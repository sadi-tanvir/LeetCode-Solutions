<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2974. Minimum Number Game</title>
</head>

<body>
    <h1>2974. Minimum Number Game</h1>

    <!-- https://leetcode.com/problems/minimum-number-game/description/ -->

    <?php
    class Solution
    {
        function numberGame($nums)
        {
            $arr = [];
            sort($nums);
            for ($i = 0; $i < count($nums); $i += 2) {
                $arr[count($arr)] = $nums[$i + 1];
                $arr[count($arr)] = $nums[$i];
            }
            return $arr;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->numberGame([5, 4, 2, 3])) . '</pre>';
    echo '<pre>' . json_encode($solution->numberGame([2, 5])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>