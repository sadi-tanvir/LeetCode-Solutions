<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1662- CheckIfTwoStringArraysareEquivalent</title>
</head>

<body>
    <h1>1662. Check If Two String Arrays are Equivalent</h1>

    <!-- https://leetcode.com/problems/check-if-two-string-arrays-are-equivalent/description/  -->

    <?php
    class Solution
    {
        function arrayStringsAreEqual($word1, $word2)
        {
            return implode("", $word1) === implode("", $word2);
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->arrayStringsAreEqual(["a", "bc"], ["ab", "c"])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>