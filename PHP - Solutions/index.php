<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2160. Minimum Sum of Four Digit Number After Splitting Digits</title>
</head>

<body>
    <h1>2160. Minimum Sum of Four Digit Number After Splitting Digits</h1>

    <!-- https://leetcode.com/problems/minimum-sum-of-four-digit-number-after-splitting-digits/description/ -->


    <?php
    class Solution
    {
        function minimumSum($num)
        {
            $digits = str_split(strval($num));
            sort($digits);
            $num1 = intval($digits[0]) * 10 + intval($digits[3]);
            $num2 = intval($digits[1]) * 10 + intval($digits[2]);

            return $num1 + $num2;
        }
    }

    $solution = new Solution();
    // echo '<pre>' . json_encode($solution->sumIndicesWithKSetBits([5, 10, 1, 5, 2], 1)) . '</pre>';
    echo '<pre>' . json_encode($solution->minimumSum(2932)) . '</pre>';
    echo '<pre>' . json_encode($solution->minimumSum(4009)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>