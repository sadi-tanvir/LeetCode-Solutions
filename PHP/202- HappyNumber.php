<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>202. Happy Number</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>202. Happy Number</h1>

    <!-- https://leetcode.com/problems/happy-number/description/ -->

    <?php
    class Solution
    {
        function isHappy($n)
        {
            $numbers = [];
            while ($n != 1) {
                if ($numbers[$n])
                    break;
                array_push($numbers, $n);
                $sum = 0;
                while ($n > 0) {
                    $digit = $n % 10;
                    $sum += $digit * $digit;
                    $n = floor($n / 10);
                }
                $n = $sum;
            }

            return strval($n === 1) . 'this is the answer';
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->isHappy(19)) . '</pre>';
    echo '<pre>' . json_encode($solution->isHappy(2)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>