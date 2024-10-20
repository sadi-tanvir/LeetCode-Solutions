<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>67. Add Binary</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>67. Add Binary</h1>

    <!-- https://leetcode.com/problems/add-binary/ -->

    <?php
    class Solution
    {
        function intToRoman($num)
        {
            $romanNumeralsMap = [[1000, "M"], [900, "CM"], [500, "D"], [400, "CD"], [100, "C"], [90, "XC"], [50, "L"], [40, "XL"], [10, "X"], [9, "IX"], [5, "V"], [4, "IV"], [1, "I"]];

            $currentIndex = 0;
            $roman = "";

            while ($num) {
                if ($romanNumeralsMap[$currentIndex][0] <= $num) {
                    $num -= $romanNumeralsMap[$currentIndex][0];
                    $roman = $roman . $romanNumeralsMap[$currentIndex][1];
                } else {
                    $currentIndex++;
                }
            }

            return $roman;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->intToRoman(3749)) . '</pre>';
    echo '<pre>' . json_encode($solution->intToRoman(58)) . '</pre>';
    echo '<pre>' . json_encode($solution->intToRoman(1994)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>