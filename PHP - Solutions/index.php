<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>125. Valid Palindrome</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>125. Valid Palindrome</h1>

    <!-- https://leetcode.com/problems/valid-palindrome/ -->

    <?php
    class Solution
    {
        function isPalindrome($s)
        {
            $str = preg_replace("/[^a-zA-Z0-9]/", "", $s);
            $str = str_split(strtolower($str));
            $start = 0;
            $end = count($str) - 1;

            while ($start < $end) {
                if ($str[$start] != $str[$end]) {
                    return false;
                }

                $start++;
                $end--;
            }

            return true;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->isPalindrome("A man, a plan, a canal: Panama")) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>