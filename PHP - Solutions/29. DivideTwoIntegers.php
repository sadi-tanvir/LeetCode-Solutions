<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>29. Divide Two Integers</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>29. Divide Two Integers</h1>

    <!-- https://leetcode.com/problems/divide-two-integers/description/ -->


    <?php
    class Solution
    {
        function divide($dividend, $divisor)
        {
            $res = ($dividend / $divisor) < 0 ? ceil($dividend / $divisor) : floor($dividend / $divisor);
            $max = 2 ** 31;
            $min = (-2) ** 31;
            if ($res >= $max) {
                return $max - 1;
            } else if ($res <= $min) {
                return $min;
            } else {
                return $res;
            }
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->divide(-2147483648, 1)) . '</pre>';
    echo '<pre>' . json_encode($solution->divide(1004958205, -2137325331)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>