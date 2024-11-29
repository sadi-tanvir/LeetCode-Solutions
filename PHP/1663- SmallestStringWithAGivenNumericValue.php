<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1663. Smallest String With A Given Numeric Value</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>1663. Smallest String With A Given Numeric Value</h1>

    <!-- https://leetcode.com/problems/smallest-string-with-a-given-numeric-value/description/ -->


    <?php
    class Solution
    {
         function getSmallestString ($n, $k) {
            $letters = [['a', 1], ['b', 2], ['c', 3], ['d', 4], ['e', 5],
            ['f', 6], ['g', 7], ['h', 8], ['i', 9], ['j', 10],
            ['k', 11], ['l', 12], ['m', 13], ['n', 14], ['o', 15],
            ['p', 16], ['q', 17], ['r', 18], ['s', 19], ['t', 20],
            ['u', 21], ['v', 22], ['w', 23], ['x', 24], ['y', 25],
            ['z', 26]];

            $index = count($letters) - 1;
            $str = "";
            while ($k > 0) {
                if ($k - $letters[$index][1] >= $n - 1) {
                    $str = $letters[$index][0] . $str;
                    $k = $k - $letters[$index][1];
                    $n--;
                } else {
                    $index--;
                }
            }

            return $str;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->getSmallestString(3, 27)) . '</pre>';
    echo '<pre>' . json_encode($solution->getSmallestString(5, 73)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>