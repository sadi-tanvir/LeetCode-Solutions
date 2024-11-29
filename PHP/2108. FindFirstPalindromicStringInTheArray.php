<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2108. Find First Palindromic String in the Array</title>
</head>

<body>
    <h1>2108. Find First Palindromic String in the Array</h1>

    <!-- https://leetcode.com/problems/find-first-palindromic-string-in-the-array/description/ -->

    <?php
    class Solution
    {
        function firstPalindrome($words)
        {
            for ($i = 0; $i < count($words); $i++) {
                $start = 0;
                $end = strlen($words[$i]) - 1;
                $isPalindrome = true;
                while ((count($words) % 2 === 0) ? $start < $end : $start <= $end) {
                    if ($words[$i][$start++] != $words[$i][$end--]) {
                        $isPalindrome = false;
                        break;
                    };
                }
                if ($isPalindrome) {
                    return $words[$i];
                }
            }

            return "";
        }

    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->firstPalindrome(["abc", "car", "ada", "racecar", "cool"])) . '</pre>';
    echo '<pre>' . json_encode($solution->firstPalindrome(["notapalindrome", "racecar"])) . '</pre>';
    echo '<pre>' . json_encode($solution->firstPalindrome(["def", "ghi"])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>