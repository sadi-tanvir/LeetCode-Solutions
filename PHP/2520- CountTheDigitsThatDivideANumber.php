<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2520. Count the Digits That Divide a Number</title>
</head>

<body>
    <h1>2520. Count the Digits That Divide a Number</h1>

    <!-- https://leetcode.com/problems/count-the-digits-that-divide-a-number/ -->


    <?php
    class Solution
    {
         function countDigits ($num) {
            $count = 0; 
            $n = $num;
            while ($n) {
                $lastDigit = $n % 10;
                if ($num % $lastDigit === 0) $count++;
                $n = intval($n / 10);
            };
            return $count;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->countDigits(7)) . '</pre>';
    echo '<pre>' . json_encode($solution->countDigits(121)) . '</pre>';
    echo '<pre>' . json_encode($solution->countDigits(1248)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>