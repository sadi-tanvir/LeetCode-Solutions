<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>28. Find the Index of the First Occurrence in a String</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>28. Find the Index of the First Occurrence in a String</h1>

    <!-- https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/description/ -->

    <?php
    class Solution
    {
        function strStr($haystack, $needle)
        {
            if (strpos($haystack, $needle) === false) {
                return -1;
            } else {
                return strpos($haystack, $needle);
            }
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->strStr("sadbutsad", "sad")) . '</pre>';
    echo '<pre>' . json_encode($solution->strStr("leetcode", "leeto")) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>